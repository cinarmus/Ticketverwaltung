<?php

$ticket= Core::import("Ticket");
$TBKoordinator= Core::import("TBKoordinator");
$TBMitarbeiter= Core::import("TBMitarbeiter");

?>

<form id="form_Position" method="post" action="" data-ajax="false" enctype="<?=Ticket::$enctype?>">
<div class="ui-field-contain">
<?php
$ticket->renderLabel("TBMitarbeiter");
$ticket->render("TBMitarbeiter");
$ticket->renderLabel("Frist");
$ticket->render("Frist");
$ticket->renderLabel("Bemerkung");
$ticket->render("Bemerkung");

?>
<button type="submit" name="Zuweisen" id="Zuweisen" value="1" style="width:100%">update</button>
</div></form>
