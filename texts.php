<?php
	// movies array
	$movies = array();
	$movies[1] = "Pink Flamingos";
	$movies[2] = "Hellzapoppin/Loquilandia";
	$movies[3] = "Two-Lane Blacktop";
	$movies[4] = "La vie de boh&egrave;me";
	$movies[5] = "Chungking Express";
	$movies[6] = "El &aacute;ngel exterminador";
	$movies[7] = "El c&iacute;rculo rojo";
	$movies[8] = "Tokyo Sonata";
	$movies[9] = "Shadows";
	$movies[10] = "La promesa";
	
	// display messages
	$msg_return = array();
	$msg_return['ca'][0] = '<p class="titol">Vot rebut! Gr&agrave;cies per participar.</p><p class="comparteix">Comparteix el teu vot:</p><div class="social"><a class="facebook" target="_blank" href="a_Facebook" title="Comparteix a Facebook">Comparteix a Facebook</a><a class="twitter" href="a_Twitter" target="_blank" title="Comparteix a Twitter">Comparteix a Twitter</a></div>';
	$msg_return['ca'][1] = "He votat la meva pel·lícula preferida _movie de #GandulesCCCB del @cececebe";
	$msg_return['ca'][2] = '<p class="titol">Votacions finalitzades</p>';
	$msg_return['ca'][-1] = "S'ha produ&iuml;t un error en la votaci&oacute;. Torna-ho a provar m&eacute;s tard.";
	$msg_return['ca'][-2] = '<p class="titol">Ja has votat aquesta pel&middot;l&iacute;cula!</p><p class="comparteix"></p><div class="social"></div>';
	$msg_return['ca'][-3] = "S'ha produ&iuml;t un error en la votaci&oacute;. Torna-ho a provar m&eacute;s tard.";
	$msg_return['ca'][-4] = "S'ha produ&iuml;t un error en la votaci&oacute;. Torna-ho a provar m&eacute;s tard.";
	$msg_return['ca'][-5] = "S'ha produ&iuml;t un error en la votaci&oacute;. Torna-ho a provar m&eacute;s tard.";
	$msg_return['es'][0] = '<p class="titol">¡Voto recibido! Gracias por participar.</p><p class="comparteix">Comparte tu voto:</p><div class="social"><a class="facebook" target="_blank" href="a_Facebook" title="Comparte en Facebook">Comparte en Facebook</a><a class="twitter" href="a_Twitter" target="_blank" title="Comparte en Twitter">Comparte en Twitter</a></div>';
	$msg_return['es'][1] = "He votado mi película preferida _movie de #GandulesCCCB del @cececebe";
	$msg_return['es'][2] = '<p class="titol">Votaciones finalizadas</p>';
	$msg_return['es'][-1] = "Se ha producido un error en la votaci&oacute;n. Vu&eacute;lvelo a intentar m&aacute;s tarde";
	$msg_return['es'][-2] = '<p class="titol">¡Ya has votado esta pel&iacute;cula!</p><p class="comparteix"></p><div class="social"></div>';
	$msg_return['es'][-3] = "Se ha producido un error en la votaci&oacute;n. Vu&eacute;lvelo a intentar m&aacute;s tarde";
	$msg_return['es'][-4] = "Se ha producido un error en la votaci&oacute;n. Vu&eacute;lvelo a intentar m&aacute;s tarde";
	$msg_return['es'][-5] = "Se ha producido un error en la votaci&oacute;n. Vu&eacute;lvelo a intentar m&aacute;s tarde";
	$msg_return['en'][0] = '<p class="titol">Vote submitted. Thank you!</p><p class="comparteix">Share your vote:</p><div class="social"><a class="facebook" target="_blank" href="a_Facebook" title="Share on Facebook">Share on Facebook</a><a class="twitter" href="a_Twitter" target="_blank" title="Share on Twitter">Share on Twitter</a></div>';
	$msg_return['en'][1] = "I've just voted my favourite film _movie of #GandulesCCCB @cececebe";
	$msg_return['en'][2] = '<p class="titol">Voting ended</p>';
	$msg_return['en'][-1] = "An error occurred, please try again later";
	$msg_return['en'][-2] = '<p class="titol">You\'ve already voted this film</p><p class="comparteix"></p><div class="social"></div>';
	$msg_return['en'][-3] = "An error occurred, please try again later";
	$msg_return['en'][-4] = "An error occurred, please try again later";
	$msg_return['en'][-5] = "An error occurred, please try again later";
?>