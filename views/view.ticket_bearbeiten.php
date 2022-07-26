<?php
$Ticket= Core::import("Ticket");
$Ticketliste = Core::$view->$Ticketliste;


?>

<form id="form_Ticket" method="post" name="update" action="?task=ticket_bearbeiten&id=<?=$Ticket->id;?>" data-ajax="false" enctype="<?=Ticket::$enctype?>">
<div class="ui-field-contain">
<?php

$Ticket->renderLabel("id");
$Ticket->render("id");
$Ticket->renderLabel("Titel");
$Ticket->render("Titel");
$Ticket->renderLabel("Frist");
$Ticket->render("Frist");
$Ticket->renderLabel("Status");
$Ticket->render("Status");
$Ticket->renderLabel("Beschreibung");
$Ticket->render("Beschreibung");
$Ticket->renderLabel("Kategorie");
$Ticket->render("Kategorie");
$Ticket->renderLabel("Priorität");
$Ticket->render("Priorität");
$Ticket->renderLabel("Anhang");
$Ticket->render("Anhang");
$Ticket->renderLabel("Bemerkung");
$Ticket->render("Bemerkung");
$Ticket->renderLabel("_TBMitarbeiter");
$Ticket->render("_TBMitarbeiter");
$Ticket->renderLabel("_TBKoordinator");
$Ticket->render("_TBKoordinator");
$Ticket->renderLabel("_HSMitarbeiter");
$Ticket->render("_HSMitarbeiter");
?>
<button type="submit" name="update" id="update" value="1" style="width:100%">Ticket ändern</button>
</div></form>
<br>
<a href="?task=dashboard&menu=ticketübersicht" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext" >No text</a>

