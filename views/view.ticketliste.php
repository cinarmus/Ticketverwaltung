<?php
$Ticketliste= Core::import("Ticketliste");
   /* @var $klasse Speise */
$klasse=new Ticket(); // für das Anzeigen des headers

?>

<div data-role="ui-bar ui-bar-a">
<h1>Ticketliste</h1>    


<div class="overflowx">

    

<form>
<input id="filterTable-input" data-type="search" palceholder="Suche..">
</form>    
    
<table data-role="table" id="tbl_Kunde" data-filter="true" data-input="#filterTable-input" class="ui-responsive" data-mode="columntoggle" data-column-btn-theme="b" data-column-btn-text="Spalten" data-column-popup-theme="a">
<thead>
<tr>   
<?php 
$klasse->renderHeader("id", "table");
$klasse->renderHeader("c_ts", "table"); 
$klasse->renderHeader("m_ts", "table"); 
$klasse->renderHeader("Titel", "table");
$klasse->renderHeader("Status", "table"); 
$klasse->renderHeader("Beschreibung", "table");
$klasse->renderHeader("Kategorie", "table");
$klasse->renderHeader("Frist", "table");
$klasse->renderHeader("Priorität", "table");
$klasse->renderHeader("Anhang", "table"); 
$klasse->renderHeader("Bemerkung", "table");
$klasse->renderHeader("datum", "table");
$klasse->renderHeader("_TBKoordinator", "table");
$klasse->renderHeader("_TBMitarbeiter", "table");
$klasse->renderHeader("_HSMitarbeiter", "table");

?>   
</tr>
</thead>
<tbody>
<?php foreach ($Ticketliste as $klasse){
?>
<tr>
<?php
$klasse->render("id");
$klasse->render("c_ts");
$klasse->render("m_ts");
//$klasse->render("Titel");
?>
<td><a data-ajax="false" href="?task=ticket_detail&id=<?=$klasse->id?>"><?=$klasse->Titel; ?></a></td>
<?php
$klasse->render("Beschreibung");
$klasse->render("Status");
$klasse->render("Kategorie");
$klasse->render("Frist");
$klasse->render("Priorität");
$klasse->render("Anhang");
$klasse->render("Bemerkung");
$klasse->render("datum");
$klasse->render("_TBKoordinator");
$klasse->render("_TBMitarbeiter");
$klasse->render("_HSMitarbeiter");
?>   

<td>
<a href="?task=Ticket_detail&id=<?=$klasse->id?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-eye ui-btn-icon-notext ui-corner-all ui-btn-inline">show</a>
<?php if(Core::$user->Gruppe>=2){ ?>
<a href="?task=ticket_bearbeiten&id=<?=$klasse->id?>&task_source=Ticket" data-ajax="false" data-role="button"  class="ui-btn ui-icon-pencil ui-btn-icon-notext ui-corner-all ui-btn-inline">edit</a>
<?php } ?>
<?php if(Core::$user->Gruppe>=2){ ?>
    <a href="?task=ticket_vermerken&id=<?=$klasse->id?>&task_source=Ticket" data-ajax="false" data-role="button"  class="ui-btn ui-icon-check ui-btn-icon-notext ui-corner-all ui-btn-inline">vermerken</a>
<?php } ?>
<?php if(Core::$user->Gruppe>=2){ ?>
    <a href="?task=ticket_ablehnen&id=<?=$klasse->id?>&task_source=Ticket" data-ajax="false" data-role="button"  class="ui-btn ui-icon-ban ui-btn-icon-notext ui-corner-all ui-btn-inline">vermerken</a>
<?php } ?>
</td>
</tr>

<?php
        }
        ?>
</tbody>
</table>
</div>

<a href="?task=ticket_neu" class="ui-btn ui-btn-b ui-icon-plus ui-btn-icon-left" data-ajax="false">Neues Ticket anlegen</a><br>

<br>
<a href="?task=dashboard&menu=ticketliste" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext" >No text</a>
 

