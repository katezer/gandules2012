<?php
	$lang = 'en';
	require_once('../functions.php');
	require_once('../texts.php');
	//error_reporting(E_ALL);
	//ini_set('display_errors', '1');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" />
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="en_GB">
<meta name="description" content="Gandules, the CCCB’s cinema al fresco has reached its 10th birthday, and to celebrate it, we are preparing a special show. We offer you a list with some of the most significant films that we have seen at Gandules during recent years. Choose the one that you like best. You can vote until 11 July 2012. The film receiving the most votes will be screened on the last day of Gandules." />
<meta name="DC.creator" content="Centre de Cultura Contemporània de Barcelona" />
<meta name="DC.language" content="<?php echo $lang; ?>" />
<meta name="DC.title" content="Gandules’12 & Gas Natural Fenosa – Your session" />
<meta name="DC.description" content="Gandules, the CCCB’s cinema al fresco has reached its 10th birthday, and to celebrate it, we are preparing a special show. We offer you a list with some of the most significant films that we have seen at Gandules during recent years. Choose the one that you like best. You can vote until 11 July 2012. The film receiving the most votes will be screened on the last day of Gandules." />
<title>Gandules’12 & Gas Natural Fenosa – Your session</title>
<link rel="shorcut icon" href="../img/favicon.png">
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/estils.css" rel="stylesheet" type="text/css" />
<link href="../js/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="../js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5823913-11']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
<div id="page">
	<div id="menu_idiomes">
		<a href="../ca/" title="Català">Català</a>  /  <a href="../es/" title="Castellano">Castellano</a>  /  <a class="select" href="../en/" title="English">English</a>
	</div>
	<div id="head">
		<div id="presentacio">
			<h1 class="en">Gandules 10 years. Your sesion</h1>
			<div id="intro">
				<p>Gandules, the CCCB’s cinema al fresco has reached its 10th birthday, and to celebrate it, we are preparing a special show. We offer you a list with some of the most significant films that we have seen at Gandules during recent years. Choose the one that you like best. You can vote until 11 July 2012.</p>
				<p><strong>The voting has finished. Thank you for participating.</strong></p>
				<p><strong>The winning film, “El Ángel exterminador” by Luis Buñuel, will be screened on 24 August.</strong></p>
			</div>
		</div>
		<div id="ranquing">
			<h2>Most voted films</h2>
			<div id="ranquing_list">
				<?php echo updateVotes($movies); ?>
			</div>
			<a class="programacio" href="http://www.cccb.org/<?php echo $lang; ?>/audiovisual-gandules12_cine_al_fresco-41335" title="Gandules 2012 Programme">Gandules 2012 Programme</a>
			<p class="nota" style="display:none;"><strong>Note:</strong> The voting is restricted to one vote per user (IP) per day. An abuse in the voting to the film "Hellzapoppin / Loquilandia" has been detected. To ensure fair results, the votes to this film made irregularly have been eliminated. </p>
		</div>
		<div class="clear"></div>
	</div>

	<div id="llistat_pelicules">
		<h2>WHICH FILM WOULD YOU LIKE TO SEE AGAIN?</h2>
		<ul>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Pink Flamingos</p>
						<p class="autor">John Waters, 1972, 93’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="1">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_01_g.jpg" title="Pink Flamingos"><img src="../films/film_01_p.jpg" alt="Pink Flamingos"/></a>
					<p class="sinopsi">Pink flamingos decorate the area outside the caravan in which Divine prepares to be the filthiest person in the world and, at the same time, gave the name to the strip club where Jayne Mansfield raised the temperature in London. Pink is also the colour associated with trash. A manifesto, a declaration of principles, a brutal desire to get up people’s noses. John Waters, the great ideologist of trash culture, wrote its founding bible with the complicity of Divine and a group of dropouts from Baltimore: scatology can be an art. And also a political act.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Hellzapoppin/Loquilandia</p>
						<p class="autor">Henry C. Potter, 1941, 84’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="2">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_02_g.jpg" title="Hellzapoppin/Loquilandia"><img src="../films/film_02_p.jpg" alt="Hellzapoppin/Loquilandia"/></a>
					<p class="sinopsi">A young screenwriter wants to stage a show, and we get to watch the entire chaotic process, which gives rise to a sarcastic and crazy comedy on cinema inside cinema which subverts the conventional narrative mechanisms of Hollywood. The two stars, Olsen and Johnson, thus adapted the musical comedy with which they had triumphed on Broadway, into a film with an influence that extends to the series by Lynch.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Two-Lane Blacktop</p>
						<p class="autor">Monte Hellman (1971), 102’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="3">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_03_g.jpg" title="Two-Lane Blacktop"><img src="../films/film_03_p.jpg" alt="Two-Lane Blacktop"/></a>
					<p class="sinopsi">A driver and his mechanic tour the United States at the wheel of a 1955 Chevy in search of street races. During the trip they meet a young woman and a pretentious speed fanatic. A legend among the new American cinema films.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">La vie de bohème</p>
						<p class="autor">Aki Kaurismaki / 1992 / 100’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="4">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_04_g.jpg" title="La vie de bohème"><img src="../films/film_04_p.jpg" alt="La vie de bohème"/></a>
					<p class="sinopsi">The painter Rodolfo, the writer Marcel, the musician Schaunard and the dog Baudelaire: they are all that remains of Parisian bohemia. They live in misery, without renouncing their ideals or their friendship. Between Boris Vian, Mozart and rock; between comedy and tragedy.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Chungking Express</p>
						<p class="autor">Wong Kar-wai, 1994, 103’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="5">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_05_g.jpg" title="Chungking Express"><img src="../films/film_05_p.jpg" alt="Chungking Express"/></a>
					<p class="sinopsi">Four characters and two love stories in the frenetic yet intimate Hong Kong. The apparent narrative complexity only intensifies the recognition of the emotional states: requited and unrequited love, encounters and reencounters, filmed with a vibrant and virtuoso style, with incessant incursions into movement and speed.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">El ángel exterminador</p>
						<p class="autor">Luis Buñuel, 1962, 93’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="6">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_06_g.jpg" title="El ángel exterminador"><img src="../films/film_06_p.jpg" alt="El ángel exterminador"/></a>
					<p class="sinopsi">A mundane party becomes an enclosure that reveals the hypocrisy and grotesque forms of the bourgeoisie. After a conventional dinner, it seems that the guests cannot leave, as if they were in an invisible maze. Buñuel, again, destroyed social forms to turn the bourgeoisie into savages. “While you may find the film you are about to see enigmatic and incoherent, life is also like that. The author declares that he had no conscious intention of playing with symbols. Perhaps the best explanation for El ángel exterminador is that, rationally, there is no explanation” (L. Buñuel).</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">El círculo rojo</p>
						<p class="autor">Jean-Pierre Melville, 1970, 131’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="7">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_07_g.jpg" title="El círculo rojo"><img src="../films/film_07_p.jpg" alt="El círculo rojo"/></a>
					<p class="sinopsi">Melville shot a master thriller and his most refined vision of a genre that he stylised by filming the emotion of rituals, ethical codes, destiny and its tragic characters. Voge escapes from the train where he is travelling in the custody of Commissioner Mattei; Corey, another delinquent, comes out of prison. When the two of them meet, they plan a meticulous jewel robbery with the help of Jansen, an alcoholic former policeman, while Commissioner Mattei starts his chase.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Tokyo Sonata</p>
						<p class="autor">Kiyoshi Kurosawa, 2008, 119’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="8">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_08_g.jpg" title="Tokyo Sonata"><img src="../films/film_08_p.jpg" alt="Tokyo Sonata"/></a>
					<p class="sinopsi">About what is hidden by a man, a family, a society, an economic system. Fired from his job due to competition from the Chinese workforce, Ryuhei hides his situation from his family, which brings devastating underlying tensions and conflicts to the surface. If up to this point Japanese filmmaker Kiyoshi Kurosawa had surprised the world with his stories of the supernatural, here the overlapping events reveal a no less dark side of human nature.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Shadows</p>
						<p class="autor">John Cassavetes, 1959, 87’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="9">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_09_g.jpg" title="Shadows"><img src="../films/film_09_p.jpg" alt="Shadows"/></a>
					<p class="sinopsi">To the rhythm of the music of Charles Mingus, Cassavetes works with a group of students to film this 16 mm improvisation. Asynchronous sound, a hand-held camera and very close attention paid to faces and to capturing emotions. This film debut revolves around the impetus and disconcertment of youth, the exaltation of first love and the portrait of an era of creative frenzy. It is a landmark of independent film and shows how films can be made as and with music.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">La promesa</p>
						<p class="autor">Jean-Pierre i Luc Dardenne, 1996, 93’</p>
					</div>
					<a class="vota" href="#popup" title="Vote!" name="10">Vote!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_10_g.jpg" title="La promesa"><img src="../films/film_10_p.jpg" alt="La promesa"/></a>
					<p class="sinopsi">Igor is 15 years old, is a mechanic’s apprentice and also works with his father, who exploits illegal immigrants in exchange for false permits. One day, Igor makes a promise: to look after the wife and child of a dying worker from Ghana. One of the most realistic and sensitive portraits of immigration in European society.</p>
				</div>
			</li>
		</ul>
	</div>
	
	<div id="foot">
		<p><span class="cccb">CCCB</span></p>
		<p><a href="http://www.gasnaturalfenosa.com" target="_blank"><span class="gasnatural">Gas Natural</span></a></p>
		<div class="clear"></div>
	</div>

</div>

<div id="popup_box">
	<div id="popup"></div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$(".film_thumb").fancybox();
	$(".vota").fancybox({
		'titleShow'			: false,
		'overlayOpacity'	: 0.3,
		onStart				: function(element){
            vote($(element).attr('name'))
        }
	});
	function vote(id) {
		$.post("../votations.php", { action: "1", movie: id, lang: "<?php echo $lang; ?>" }, function(data) {
			$('#popup').html('<p>'+data+'</p>');
			updateVotes();
		});
	}
	function updateVotes() {
		$.ajax({
			type: 'POST',
			url: '../votations.php',
			data: { action: "0" },
			success: function(data) {
				$( '#ranquing_list' ).html(data);
			},
			complete: function() {
				setTimeout(updateVotes, 5000);
			}
		});
	}
	//updateVotes();
});
</script>
</body>
</html>