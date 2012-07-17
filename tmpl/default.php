<?php
// Verhindern, dass die Datei direkt aufgerufen wird
defined('_JEXEC') or die('Restricted access');

$wB = $params->get('snWidthBox', 200);

$style = '.snText {
	font-size: 15px;
	height: 25px;
	width: ' . $wB . 'px;
	display: inline-block;
	margin-bottom: 0;
	-webkit-border-radius: 3px 0 0 3px;
	-moz-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px;
	background-color: white;
	border: 1px solid #CCC;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	-webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
	-moz-transition: border linear 0.2s, box-shadow linear 0.2s;
	-ms-transition: border linear 0.2s, box-shadow linear 0.2s;
	-o-transition: border linear 0.2s, box-shadow linear 0.2s;
	transition: border linear 0.2s, box-shadow linear 0.2s;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	.snBtn {
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
	display: inline-block;
	width: auto;
	cursor: pointer;
	-webkit-apearance: button;
	background-color: #0074CC;
	background-image: -webkit-linear-gradient(top, #08C, #05C);
	background-image: -o-linear-gradient(top, #08C, #05C);
	background-image: -moz-linear-gradient(top, #08C, #05C);
	background-image: linear-gradient(top, #08C, #05C);
	background-repeat: repeat-x;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	color: white;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	padding: 6px 11px;
	font-size: 12px;
	line-height: normal;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	';
JFactory::getDocument()->addStyleDeclaration( $style );
?>
Dein Zugang ins Netzwerk der Pfadfindergruppen.<br /><br />
Hier kannst du einfach nach anderen Gruppen / St&auml;mmen suchen<br />
<form action="javascript:querySn()" method="post" name="snForm">
	<input class="snText" id="snSearch" type="text" placeholder="Name, Ort, PLZ oder Stadtteil"/>
	<input class="snBtn" type="button" value="Gruppe suchen" id="snSubmit" onClick="querySn()" />
</form>
<script type="text/javascript">
function querySn() {
	var s = document.getElementById("snSearch").value;
	window.open("http://www.scoutnet.de/navigator/?q="+encodeURI(s));
}
</script>