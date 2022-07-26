<?php

$klasse = Core::$view->Ticket; 

?>

<form id="form_Position" method="get" action="" data-ajax="false" enctype="<?=Ticket::$enctype?>">
<div class="ui-field-contain">

<?php


$klasse->renderLabel("c_ts");
$klasse->render("c_ts");
$klasse->renderLabel("Titel");
$klasse->render("Titel");
$klasse->renderLabel("Beschreibung");
$klasse->render("Beschreibung");
$klasse->renderLabel("Status");
$klasse->render("Status");
$klasse->renderLabel("Kategorie");
$klasse->render("Kategorie");
$klasse->renderLabel("Frist");
$klasse->render("Frist");
$klasse->renderLabel("Priorität");
$klasse->render("Priorität");
//$klasse->renderLabel("Anhang");
//$klasse->render("Anhang");
$klasse->renderLabel("Bemerkung");
$klasse->render("Bemerkung");
$klasse->renderLabel("datum");
$klasse->render("datum");
$klasse->renderLabel("_TBMitarbeiter");
$klasse->render("_TBMitarbeiter");
$klasse->renderLabel("_TBKoordinator");
$klasse->render("_TBKoordinator");
$klasse->renderLabel("_HSMitarbeiter");
$klasse->render("_HSMitarbeiter");

?>
    <a href="?task=dashboard&menu=ticketübersicht" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext"> No text</a>