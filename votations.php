<?php
	require_once('functions.php');
	require_once('texts.php');
	
	$action = (int)$_POST['action'];
	$id_movie = (int)$_POST['movie'];
	$lang = $_POST['lang'];
	$site_url = $_SERVER["SERVER_NAME"].'/gandules2012/'.$lang.'/';
	
	$hours_to_vote = "23";	// this is the time in hours until the same ip can vote
	
	switch($action) {
		case 0:
			echo updateVotes($movies);
			return;
			break;
		case 1:
			//$msg_num = vote($id_movie, $hours_to_vote);
			$msg_num = 2;
			break;
		default:
			$msg_num = '-5';
			insertError("EDIT-votations","tried with action=".$action);
	}
	
	$face = "http://www.facebook.com/share.php?u=".$site_url;
	$twit = "http://twitter.com/intent/tweet?url=".$site_url."&text=".urlencode($msg_return[$lang][1].' '.$site_url);
	$movie = $movies[$id_movie];
	
	if($msg_num == 0) $msg_return[$lang][$msg_num] = str_replace("a_Facebook", $face, $msg_return[$lang][$msg_num]);
	if($msg_num == 0) $msg_return[$lang][$msg_num] = str_replace("a_Twitter", $twit, $msg_return[$lang][$msg_num]);
	if($msg_num == 0) $msg_return[$lang][$msg_num] = str_replace("_movie", $movie, $msg_return[$lang][$msg_num]);
	echo $msg_return[$lang][$msg_num];
?>