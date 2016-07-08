<?php
	$lang = 'ca';
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
<META HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="ca_ES">
<meta name="description" content="Gandules, el cinema a la fresca del CCCB, ha fet 10 anys i per celebrar-ho, preparem un passi especial. Et proposem una llista amb algunes de les pel•lícules més significatives que hem vist a Gandules durant els últims anys. Tria la que t’agradi més. Pots votar fins l’11 de juliol de 2012. La pel•lícula més votada es projectarà l’últim dia de Gandules." />
<meta name="DC.creator" content="Centre de Cultura Contemporània de Barcelona" />
<meta name="DC.language" content="ca" />
<meta name="DC.title" content="Gandules’12 & Gas Natural Fenosa – La teva sessió" />
<meta name="DC.description" content="Gandules, el cinema a la fresca del CCCB, ha fet 10 anys i per celebrar-ho, preparem un passi especial. Et proposem una llista amb algunes de les pel•lícules més significatives que hem vist a Gandules durant els últims anys. Tria la que t’agradi més. Pots votar fins l’11 de juliol de 2012. La pel•lícula més votada es projectarà l’últim dia de Gandules." />
<title>Gandules’12 & Gas Natural Fenosa – La teva sessió</title>
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
		<a class="select" href="../ca/" title="Català">Català</a>  /  <a href="../es/" title="Castellano">Castellano</a>  /  <a href="../en/" title="English">English</a>
	</div>
	<div id="head">
		<div id="presentacio">
			<h1 class="ca">Gandules 10 anys. La teva sessió</h1>
			<div id="intro">
				<p>Gandules, el cinema a la fresca del CCCB, ha fet 10 anys i per celebrar-ho, preparem un passi especial. Et proposem una llista amb algunes de les pel·lícules més significatives que hem vist a Gandules durant els últims anys. Tria la que t’agradi més. Pots votar fins l’11 de juliol de 2012.</p>
				<p><strong>La votació ha finalitzat. Gràcies a tots els que heu participat.</strong></p>
				<p><strong>La pel•lícula guanyadora, “El ángel exterminador” de Luis Buñuel, es projectarà el divendres 24 d’agost.</strong></p>
			</div>
		</div>
		<div id="ranquing">
			<h2>Pel·lícules més votades</h2>
			<div id="ranquing_list">
				<?php echo updateVotes($movies); ?>
			</div>
			<a class="programacio" href="http://www.cccb.org/ca/audiovisual-gandules12_cine_al_fresco-41335" title="Programació Gandules 2012">Programació Gandules 2012</a>
			<p class="nota" style="display:none;"><strong>Nota:</strong>  La votació està restringida a un vot per usuari (IP) per dia. S’ha detectat un abús en les votacions a “Hellzapoppin/Loquilandia” i per poder garantir uns resultats justos, s’han eliminat els vots realitzats a aquesta pel·lícula de forma irregular.</p>
		</div>
		<div class="clear"></div>
	</div>

	<div id="llistat_pelicules">
		<h2>QUINA ÉS LA PEL•LÍCULA QUE T’AGRADARIA VEURE?</h2>
		<ul>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Pink Flamingos</p>
						<p class="autor">John Waters, 1972, 93’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="1">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_01_g.jpg" title="Pink Flamingos"><img src="../films/film_01_p.jpg" alt="Pink Flamingos"/></a>
					<p class="sinopsi">Els flamencs roses decoren l’exterior de la caravana en què Divine es disposa a ser la persona més immunda del món i, al mateix temps, donen nom al club de striptease on Jayne Mansfield puja la temperatura de Londres. El rosa també és el color de la porqueria. Un manifest, una declaració de principis, unes ganes brutals de tocar els nassos. John Waters, gran ideòleg de la cultura porqueria, escriu la Bíblia fundacional del trash amb la complicitat de Divine i un grapat de penjats de Baltimore: l’escatologia pot ser un art. I també un acte polític.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Hellzapoppin/Loquilandia</p>
						<p class="autor">Henry C. Potter, 1941, 84’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="2">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_02_g.jpg" title="Hellzapoppin/Loquilandia"><img src="../films/film_02_p.jpg" alt="Hellzapoppin/Loquilandia"/></a>
					<p class="sinopsi">Un jove escriptor vol posar en escena un espectacle, del qual veiem tot el caòtic procés, que dóna peu a una comèdia sarcàstica i esbojarrada sobre el cinema dins del cinema que subverteix els mecanismes narratius convencionals de Hollywood. Els dos protagonistes, Olsen i Johnson, van adaptar així la comèdia musical amb què havien triomfat a Broadway, en un film que té una influència que s’estén fins a la sèrie de Lynch.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Two-Lane Blacktop</p>
						<p class="autor">Monte Hellman (1971), 102’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="3">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_03_g.jpg" title="Two-Lane Blacktop"><img src="../films/film_03_p.jpg" alt="Two-Lane Blacktop"/></a>
					<p class="sinopsi">Un pilot i el seu mecànic recorren els Estats Units al volant d’un Chevrolet 55 a la recerca de curses clandestines. Durant el viatge troben una jove i un presumptuós aficionat a la velocitat. Un film mític del nou cinema nord-americà.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">La vie de bohème</p>
						<p class="autor">Aki Kaurismaki / 1992 / 100’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="4">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_04_g.jpg" title="La vie de bohème"><img src="../films/film_04_p.jpg" alt="La vie de bohème"/></a>
					<p class="sinopsi">El pintor Rodolfo, l’escriptor Marcel, el músic Schaunard i el gos Baudelaire: són el que queda de la bohèmia parisenca. Viuen a la misèria, sense renunciar als seus ideals ni a la seva amistat. Entre Boris Vian, Mozart i el rock; entre la comèdia i la tragèdia.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Chungking Express</p>
						<p class="autor">Wong Kar-wai, 1994, 103’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="5">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_05_g.jpg" title="Chungking Express"><img src="../films/film_05_p.jpg" alt="Chungking Express"/></a>
					<p class="sinopsi">Quatre personatges i dues històries d’amor al trepidant i alhora íntim Hong Kong. L’aparent complexitat narrativa no fa sinó intensificar el reconeixement dels estats emocionals: enamoraments, correspostos i no correspostos, trobades i retrobaments, filmats amb un estil vibrant i virtuós, amb recerques incessants sobre el moviment i la velocitat.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">El ángel exterminador</p>
						<p class="autor">Luis Buñuel, 1962, 93’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="6">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_06_g.jpg" title="El ángel exterminador"><img src="../films/film_06_p.jpg" alt="El ángel exterminador"/></a>
					<p class="sinopsi">Una festa mundana esdevé un recinte tancat que posa de manifest la hipocresia i les formes grotesques de la burgesia. Després d’un sopar convencional, sembla que els convidats no poden sortir, com si es trobessin en un laberint invisible. Buñuel, de nou, destruïa les formes socials per convertir als burgesos en salvatges. «Si el film que veuran els sembla enigmàtic i incoherent, la vida també ho és. L’autor declara no haver volgut jugar amb els símbols, si més no de manera conscient. Potser l’explicació d’El ángel exterminador és que, racionalment, no n’hi ha cap» (L. Buñuel).</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">El círculo rojo</p>
						<p class="autor">Jean-Pierre Melville, 1970, 131’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="7">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_07_g.jpg" title="El círculo rojo"><img src="../films/film_07_p.jpg" alt="El círculo rojo"/></a>
					<p class="sinopsi">Melville roda una obra mestra del thriller i la seva visió més depurada d’un gènere que va estilitzar per filmar l’emoció dels rituals, els codis ètics, el destí i els seus personatges tràgics. Voge s’escapa del tren on viatja custodiat pel comissari Mattei; Corey, un altre delinqüent, surt de la presó. Quan tots dos es troben planegen un meticulós robatori de joies amb l’ajuda de Jansen, un antic policia alcohòlic, mentre el comissari Mattei inicia la seva llarga persecució.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Tokyo Sonata</p>
						<p class="autor">Kiyoshi Kurosawa, 2008, 119’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="8">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_08_g.jpg" title="Tokyo Sonata"><img src="../films/film_08_p.jpg" alt="Tokyo Sonata"/></a>
					<p class="sinopsi">Del que amaga un home, una família, una societat, un sistema econòmic. Acomiadat de la feina per la competència de la mà d’obra xinesa, Ryuhei amaga la situació a la família, amb la qual cosa fa emergir de manera devastadora les tensions i els conflictes soterrats. Si fins llavors el japonès Kiyoshi Kurosawa havia sorprès el món amb les seves històries sobrenaturals, aquí l’encavalcament dels fets revela una no menys fosca naturalesa humana.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">Shadows</p>
						<p class="autor">John Cassavetes, 1959, 87’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="9">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_09_g.jpg" title="Shadows"><img src="../films/film_09_p.jpg" alt="Shadows"/></a>
					<p class="sinopsi">Al ritme de la música de Charles Mingus, Cassavetes filma improvisant, treballant amb un grup d’estudiants, en 16 mm. So no sincrònic, una càmera lleugera i una atenció extrema pels rostres i la captació de les emocions. El seu debut cinematogràfic gira entorn de l’ímpetu i el desconcert de la joventut, l’exaltació del primer amor i el retrat d’una època d’ebullició creativa. És un referent del cinema independent i demostra que el cinema es pot fer com a música i amb la música.</p>
				</div>
			</li>
			<li>
				<div class="sup">
					<div class="sup_titol">
						<p class="titol">La promesa</p>
						<p class="autor">Jean-Pierre i Luc Dardenne, 1996, 93’</p>
					</div>
					<a class="vota" href="#popup" title="Vota!" name="10">Vota!</a>
					<div class="clear"></div>
				</div>
				<div class="desc">
					<a class="film_thumb" href="../films/film_10_g.jpg" title="La promesa"><img src="../films/film_10_p.jpg" alt="La promesa"/></a>
					<p class="sinopsi">L’Igor té 15 anys, és aprenent de mecànic i treballa amb el seu pare, que explota immigrants il·legals a canvi de papers falsos. Un dia, l’Igor fa una promesa: fer-se càrrec de la dona i el fill d’un treballador de Ghana. Un dels retrats més realistes i sensibles de la immigració a la societat europea.</p>
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