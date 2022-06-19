<?php

$ticket= Core::import("Ticket");

?>

<form id="form_Ticket" method="post" action="" data-ajax="false" enctype="<?=Ticket::$enctype?>">
<div class="ui-field-contain">
<?php
$ticket->renderLabel("Titel");
$ticket->render("Titel");
$ticket->renderLabel("Bemerkung");
$ticket->render("Bemerkung");
$ticket->renderLabel("Kategorie");
$ticket->render("Kategorie");
$ticket->renderLabel("Frist");
$ticket->render("Frist");
$ticket->renderLabel("Anhang");
$ticket->render("Anhang");
?>
<button type="submit" name="update" id="update" value="1" style="width:100%">update</button>
</div></form>