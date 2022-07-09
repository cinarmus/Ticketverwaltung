<?php
$Ticketliste= Core::import("Ticketliste");
   /* @var $klasse Speise */
$klasse=new Ticket(); // für das Anzeigen des headers
?>

<div class="overflowx">
<table data-role="table" id="tbl_Kunde" data-filter="true" data-input="#filterTable-input" class="ui-responsive" data-mode="columntoggle" data-column-btn-theme="b" data-column-btn-text="Spalten" data-column-popup-theme="a">
<thead>
<tr>   
<?php 
$klasse->renderHeader("id", "table");
$klasse->renderHeader("c_ts", "table"); 
$klasse->renderHeader("m_ts", "table"); 
$klasse->renderHeader("Titel", "table"); 
$klasse->renderHeader("Bemerkung", "table");
$klasse->renderHeader("Kategorie", "table");
$klasse->renderHeader("Frist", "table");
$klasse->renderHeader("Anhang", "table");
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
$klasse->render("Bemerkung");
$klasse->render("Kategorie");
$klasse->render("Frist");
$klasse->render("Anhang");
?>   
</tr>
<?php
        }
        ?>
</tbody>
</table>
</div>
<a href="?task=dashboard&menu=Ticketübersicht" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext" >No text</a>
 

