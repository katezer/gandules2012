<?php

	define('GENB_PUBLIC_LIB','');		// directori base de la llibreria /genb -> utilitzem llbreria comuna a tots els projectes del server.
	define('DATABASE', 'cccb');			// BBDD auxiliar
	define('DB_PREF','genb_cccb.');		// Prefix BBDD continguts gestionats amb GenB
	include_once(GENB_PUBLIC_LIB.'genb/Cgenerics.inc');
	
	// prints the movies ranking list
	function updateVotes($movies) {
		$order = getMoviesOrder();
		$first = true;
		$return = '<ul>';
		$i = 1;
		foreach ($order as $key => $id_movie) {
			if($i == 1) $li = '<li class="first">';
			else $li = '<li>';
			if($i < 10) $num = '0'.$i;
			else $num = $i;
			$return .= $li.$num.' / &nbsp;'.$movies[$id_movie].' <span>['.getVotes($id_movie).']</span></li>';
			$i++;
		}
		$return .= '</ul>';
		return $return;
	}
	// gets the movies order by votes
	function getMoviesOrder() {
		$return = array();
		// connect
		$connection = new Pmain;
		$connection->Connection();
		// query
		$query = "SELECT id_movie,count(*) as votes FROM `gandules2012_votes` WHERE 1=1 AND active=true GROUP BY id_movie ORDER BY votes DESC";
		$result = mysql_db_query(DATABASE, $query, $connection->Connection());
		if($result) {
			$num_ids = 0;
			$found_ids = array();
			while($row = mysql_fetch_row($result)) {
				$num_ids++;
				$found_ids[$num_ids] = $row[0];				
			}
			$all_ids = array();
			for($i=1;$i<=10;$i++){
				$all_ids[$i] = $i.'';
			}
			$return = array_unique(array_merge($found_ids,$all_ids));
		} else {
			insertError("SQL-getMoviesOrder",mysql_error());
		}
		return $return;
	}
	// returns the number of votes for a movie
	// the movie is defined by the id_movie parameter
	function getVotes($id_movie) {
		$return = '0';
		try {
			$id_movie = (int)$id_movie;
			// connect
			$connection = new Pmain;
			$connection->Connection();
			// query
			$query = sprintf("SELECT count(id) FROM `gandules2012_votes` WHERE `id_movie`='%s' AND active=true",
				mysql_real_escape_string($id_movie));
			$result = mysql_db_query(DATABASE, $query, $connection->Connection());
			if($result) {
				if($row = mysql_fetch_row($result)) return $row[0];
			} else {
				insertError("SQL-canVote",mysql_error());
			}
		} catch (Exception $e) {
			insertError("SOURCE-canVote",$e->getMessage());
		}
		return $return;
	}
	// insert the vote if the visitor ip follows the voting rules
	// the voted movie is the id_movie parameter
	function vote($id_movie, $hours) {
		try {
			$id_movie = (int)$id_movie;
			if($id_movie < 1 || $id_movie > 10) {
				insertError("EDIT-vote","tried with id_movie=".$id_movie);
				return '-4';
			}
			// can vote?
			if(canVote($id_movie, $hours)) {
				if(insertVote($id_movie)) return '0';
				else return '-1';
			} else {
				insertError("DUPLICATE-vote","tried with id_movie=".$id_movie." and IP=".$_SERVER['REMOTE_ADDR']);
				return '-2';
			}
		} catch (Exception $e) {
			return '-3';
		}
	}
	// is the visitor (ip) allowed to vote?
	// restriction is the hours parameter by ip
	function canVote($id_movie, $hours) {
		$return = false;
		if(isset($_SERVER['REMOTE_ADDR'])) {
			$ip = $_SERVER['REMOTE_ADDR'];
			try {
				// connect
				$connection = new Pmain;
				$connection->Connection();
				// query
				$query = sprintf("SELECT id FROM `gandules2012_votes` WHERE `id_movie`='%s' AND `ip`='%s' AND DATE_SUB(NOW(),INTERVAL $hours HOUR) <=`date_insert` AND active=true",
					mysql_real_escape_string($id_movie),
					mysql_real_escape_string($ip));
				$result = mysql_db_query(DATABASE, $query, $connection->Connection());
				if($result) {
					if(!$row = mysql_fetch_row($result)) return true;
				} else {
					insertError("SQL-canVote",mysql_error());
				}
			} catch (Exception $e) {
				insertError("SOURCE-canVote",$e->getMessage());
			}
		}
		return $return;
	}
	// it does the insert of the vote in the DB
	// the voted movie is defined by the id_movie parameter
	function insertVote($id_movie) {
		$return = false;
		try{
			$id_movie = (int)$id_movie;
			// get visitor info
			if(isset($_SERVER['REMOTE_ADDR'])) $ip = $_SERVER['REMOTE_ADDR'];
			if(isset($_SERVER['HTTP_USER_AGENT'])) $browser = $_SERVER['HTTP_USER_AGENT'];
			if(isset($_SERVER['REMOTE_HOST'])) $host = $_SERVER['REMOTE_HOST'];
			if(!isset($host)) $host = gethostbyaddr($ip);
			if(isset($_SERVER['HTTP_REFERER'])) $referred = $_SERVER['HTTP_REFERER'];
			if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) $language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
			if(isset($_SERVER['REQUEST_METHOD'])) $method = $_SERVER['REQUEST_METHOD'];
			if(isset($_SERVER['QUERY_STRING'])) $query = $_SERVER['QUERY_STRING'];
			if(isset($_SERVER['REMOTE_PORT'])) $port = $_SERVER['REMOTE_PORT'];
			// connect
			$connection = new Pmain;
			$connection->Connection();
			// query
			$query = sprintf("INSERT INTO `cccb`.`gandules2012_votes`(`id`,`id_movie`,`date_insert`,`ip`,`browser`,`host`,`referrer`,`language`,`method`,`query`,`port`) VALUES (NULL,$id_movie,NULL,'%s','%s','%s','%s','%s','%s','%s','%s')",
				mysql_real_escape_string($ip),
				mysql_real_escape_string($browser),
				mysql_real_escape_string($host),
				mysql_real_escape_string($referred),
				mysql_real_escape_string($language),
				mysql_real_escape_string($method),
				mysql_real_escape_string($query),
				mysql_real_escape_string($port));
			$result = mysql_db_query(DATABASE, $query, $connection->Connection());
			if($result) {
				return true;
			} else {
				insertError("SQL-insertVote",mysql_error());
			}
		} catch (Exception $e) {
			insertError("SOURCE-insertVote",$e->getMessage());
		}
		return $return;
	}
	// it inserts an error to the errors table
	// the error is defined by the type and error (description) parameters
	function insertError($type,$error) {
		if(isset($_SERVER['REMOTE_ADDR'])) $ip = $_SERVER['REMOTE_ADDR'];
		// connect
		$connection = new Pmain;
		$connection->Connection();
		// query
		$query = sprintf("INSERT INTO `cccb`.`gandules2012_errors`(`id`,`ip`,`date_insert`,`type`,`text`) VALUES (NULL,'%s',NULL,'%s','%s')",
			mysql_real_escape_string($ip),
			mysql_real_escape_string($type),
			mysql_real_escape_string($error));
		$result = mysql_db_query(DATABASE, $query, $connection->Connection());
	}
?>