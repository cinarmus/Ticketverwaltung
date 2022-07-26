<?php
$Ticket = Core::$view->Ticket;
$Ticketliste = Core::$view->$Ticketliste;

$klasse = Core::$view->Ticket; 

?>
<h1>Ausgewähltes Ticket vermerken?</h1>  
<form method="get" name="update" action="?task=ticket_vermerken&id=<?=$Ticket->id;?>" data-ajax="false" enctype="<?=Ticket::$enctype?>">
<div class="ui-field-contain">
<?php

$klasse->renderLabel("Titel");
$klasse->render("Titel");
$klasse->renderLabel("Status");
$klasse->render("Status");
$klasse->renderLabel("Beschreibung");
$klasse->render("Beschreibung");
$klasse->renderLabel("Kategorie");
$klasse->render("Kategorie");
$klasse->renderLabel("Frist");
$klasse->render("Frist");
$klasse->renderLabel("Priorität");
$klasse->render("Priorität");
$klasse->renderLabel("_TBMitarbeiter");
$klasse->render("_TBMitarbeiter");
$klasse->renderLabel("_TBKoordinator");
$klasse->render("_TBKoordinator");
$klasse->renderLabel("_HSMitarbeiter");
$klasse->render("_HSMitarbeiter");
$klasse->renderLabel("Anhang");
$klasse->render("Anhang");

?>
</div></form>
<br>