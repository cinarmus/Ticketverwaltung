<?php
$Ticket = Core::$view->Ticket;
$Ticketliste = Core::$view->$Ticketliste;


?>

<form method="post" name="update" action="?task=ticket_vermerken&id=<?=$Ticket->id;?>" data-ajax="false" enctype="<?=Ticket::$enctype?>">
<div class="ui-field-contain">
<?php


$Ticket->renderLabel("Bemerkung");
$Ticket->render("Bemerkung");
$Ticket->renderLabel("datum");
$Ticket->render("datum");


?>
<button type="submit" name="update" id="update" value="1" style="width:100%">Ticket vermerken</button>
</div></form>
<br>
<a href="?task=dashboard&menu=ticketübersicht" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext" >No text</a>

