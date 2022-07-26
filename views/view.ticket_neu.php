<?php

$ticket= Core::import("Ticket");

?>

<form id="form_Ticket" method="post" action="" data-ajax="false" enctype="<?=Ticket::$enctype?>">
<div class="ui-field-contain">
<?php
$ticket->renderLabel("Titel");
$ticket->render("Titel");
$ticket->renderLabel("Beschreibung");
$ticket->render("Beschreibung");
?>
<?php if(Core::$user->Gruppe >=2){ 
$ticket->renderLabel("Status");
$ticket->render("Status");
}?>
<?php
$ticket->renderLabel("Kategorie");
$ticket->render("Kategorie");
$ticket->renderLabel("Frist");
$ticket->render("Frist");
$ticket->renderLabel("Anhang");
$ticket->render("Anhang");
?>
<?php if(Core::$user->Gruppe >1){
    $ticket->renderLabel("Priorität");
    $ticket->render("Priorität");
} ?>
<?php if(Core::$user->Gruppe >=3){
    $ticket->renderLabel("_TBKoordinator");
    $ticket->render("_TBKoordinator");
} ?>
<?php if(Core::$user->Gruppe >=3){
    $ticket->renderLabel("_TBMitarbeiter");
    $ticket->render("_TBMitarbeiter");
} ?>
<?php
?>
<br>

<br><button type="submit" name="Update" id="update" value="1" style="width:100%">Ticket erstellen</button>
</div></form>