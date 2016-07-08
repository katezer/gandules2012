<?php
	$lang = 'es';
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
<META HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="es_ES">
<meta name="description" content="Gandules, el cine al fresco del CCCB, ha cumplido 10 años y para celebrarlo, preparamos un pase especial. Te proponemos un listado con algunas de las películas más significativas que hemos visto en Gandules durante los últimos años. Elige la que más te guste. Puedes votar hasta el 11 de julio de 2012. La película más votada se proyectará el último día de Gandules." />
<meta name="DC.creator" content="Centre de Cultura Contemporània de Barcelona" />
<meta name="DC.language" content="<?php echo $lang; ?>" />
<meta name="DC.title" content="Gandules’12 & Gas Natural Fenosa – Tu sesión" />
<meta name="DC.description" content="Gandules, el cine al fresco del CCCB, ha cumplido 10 años y para celebrarlo, preparamos un pase especial. Te proponemos un listado con algunas de las películas más significativas que hemos visto en Gandules durante los últimos años. Elige la que más te guste. Puedes votar hasta el 11 de julio de 2012. La película más votada se proyectará el último día de Gandules." />
<title>Gandules’12 & Gas Natural Fenosa – Tu sesión</title>
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
		<a href="../ca/" title="Català">Català</a>  /  <a class="select" href="../es/" title="Castellano">Castellano</a>  /  <a href="../en/" title="English">English</a>
	</div>
	<div id="head">
		<div id="presentacio">
			<h1 class="es">Gandules 10 años. Tu sesión</h1>
			<div id="intro">
				<p>Gandules, el cine al fresco del CCCB, ha cumplido 10 años y para celebrarlo, preparamos un pase especial. Te proponemos un listado con algunas de las películas más significativas que hemos visto en Gandules durante los últimos años. Elige la que más te guste. Puedes votar hasta el 11 de julio de 2012.</p>
				<p><strong>La votación ha finalizado. Gracias a todos los que habéis participado.</strong></p>
				<p><strong>La película ganadora, “El ángel exterminador” de Luis Buñuel, se proyectará el viernes 24 de agosto.</strong></p>
			</div>
		</div>
		<div id="ranquing">
			<h2>Películas más votadas</h2>
			<div id="ranquing_list">
				<?php echo updateVotes($movies); ?>
			</div>
			<a class="programacio" href="http://www.cccb.org/<?php echo $lang; ?>/audiovisual-gandules12_cine_al_fresco-41335" title="Programación Gandules 2012">Programación Gandules 2012</a>
			<p class="nota" style="display:none;"><strong>Nota:</strong> La votación está restringida a un voto por usuario (IP) por día. Se ha detectado un abuso en las votaciones a “Hellzapoppin/Loquilandia” y para poder garantizar unos resultados justos, se han eliminado los votos realizados a esta película de forma irregular. </p>
		</div>
		<div class="clear"></div>
	</div>

	<div id="llistat_pelicules">
		<h2>¿CUÁL ES LA PELÍCULA QUE TE GUSTARÍA VER?</h2>
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
					<p class="sinopsi">Los flamencos rosas decoran el exterior de la caravana en la que Divine se dispone a ser la persona más inmunda del mundo y, al mismo tiempo, dan nombre al club de striptease en el que Jayne Mansfield sube la temperatura de Londres. El rosa también es el color de la basura. Un manifiesto, una declaración de principios, unas ganas brutales de tocar las narices. John Waters, gran ideólogo de la cultura basura, escribe la Biblia fundacional del trash con la complicidad de Divine y un puñado de colgados de Baltimore: la escatología puede ser un arte. Y también un acto político.</p>
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
					<p class="sinopsi">Un joven escritor quiere poner en escena un espectáculo, del que vemos todo el caótico proceso, que da pie a una sarcástica y disparatada comedia sobre el cine dentro del cine que subvierte los mecanismos narrativos convencionales de Hollywood. Los dos protagonistas, Olsen y Johnson, adaptaron así la comedia musical con que habían triunfado en Broadway, en un filme cuya influencia se extiende hasta la serie de Lynch.</p>
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
					<p class="sinopsi">Un piloto y su mecánico recorren los Estados Unidos al volante de un Chevrolet 55 en busca de carreras clandestinas. Durante el viaje encuentran a una joven y a un presuntuoso aficionado a la velocidad. Un mítico filme del nuevo cine norteamericano.</p>
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
					<p class="sinopsi">El pintor Rodolfo, el escritor Marcel, el músico Schaunard y el perro Baudelaire: son lo que queda de la bohemia parisina. Viven en la miseria, sin renunciar a sus ideales ni a su amistad. Entre Boris Vian, Mozart y el rock; entre lo cómico y lo trágico.</p>
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
					<p class="sinopsi">Cuatro personajes y dos historias de amor en el trepidante y al mismo tiempo íntimo Hong Kong. La aparente complejidad narrativa no hace más que intensificar el reconocimiento de los estados emocionales: enamoramientos, correspondidos y no correspondidos, encuentros y reencuentros, filmados con un estilo vibrante y virtuoso, con investigaciones incesantes sobre el movimiento y la velocidad.</p>
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
					<p class="sinopsi">Una fiesta mundana se convierte en un recinto cerrado que pone de manifiesto la hipocresía y las formas grotescas de la burguesía. Tras una cena convencional, parece que los invitados no pueden salir, como si se hallaran en un laberinto invisible. Buñuel, de nuevo, destruía las formas sociales para convertir a los burgueses en salvajes. «Si el filme que van a ver les parece enigmático e incoherente, también la vida lo es. El autor declara no haber querido jugar con los símbolos, al menos conscientemente. Quizá la explicación de El ángel exterminador sea que, racionalmente, no hay ninguna» (L. Buñuel).</p>
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
					<p class="sinopsi">Melville rueda una obra maestra del thriller y su visión más depurada de un género que estilizó para filmar la emoción de los rituales, los códigos éticos, el destino y sus personajes trágicos. Voge escapa del tren donde viaja custodiado por el comisario Mattei; Corey, otro delincuente, sale de la cárcel. Cuando los dos se encuentran planean un meticuloso robo de joyas con la ayuda de Jansen, un antiguo policía alcohólico, mientras el comisario Mattei inicia su larga persecución.</p>
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
					<p class="sinopsi">De lo que esconde un hombre, una familia, una sociedad, un sistema económico. Despedido del trabajo por la competencia de la mano de obra china, Ryuhei oculta la situación a la familia, haciendo emerger de forma devastadora las tensiones y conflictos soterrados. Si hasta entonces el japonés Kiyoshi Kurosawa había sorprendido al mundo con sus historias sobrenaturales, aquí el encabalgamiento de los hechos revela una no menos oscura naturaleza humana.</p>
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
					<p class="sinopsi">Al ritmo de la música de Charles Mingus, Cassavetes filma improvisando, trabajando con un grupo de estudiantes, en 16 mm. Sonido no sincrónico, una cámara ligera y una atención extrema por los rostros y la captación de las emociones. Su debut cinematográfico gira en torno al ímpetu y el desconcierto de la juventud, la exaltación del primer amor y el retrato de una época de ebullición creativa. Es un referente del cine independiente y demuestra que el cine puede hacerse como música y con la música.</p>
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
					<p class="sinopsi">Igor tiene 15 años, es aprendiz de mecánico y trabaja con su padre, que explota inmigrantes ilegales a cambio de papeles falsos. Un día, Igor hace una promesa: hacerse cargo de la mujer y el hijo de un trabajador de Ghana. Uno de los retratos más realistas y sensibles de la inmigración en la sociedad europea.</p>
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