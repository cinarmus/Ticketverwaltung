<?php

Core::$title="Vermerken: Ticket";

$Status = StatusT::findAll();
Core::publish($Status, 'Status');
$Kategorie = KategorieT::findAll();
Core::publish($Kategorie, 'Kategorie');
$Priorität = PrioritätT::findAll();
Core::publish($Priorität, 'Priorität');
$_TBKoordinator = TBKoordinator::findAll();
Core::publish($_TBKoordinator, "_TBKoordinator");
$_TBMitarbeiter = TBMitarbeiter::findAll();
Core::publish($_TBMitarbeiter, "_TBMitarbeiter");


if(count($_POST)>0){ 
    $id= filter_input(INPUT_GET, "id");
    $Status=filter_input(INPUT_GET,"status"); 
    $Ticket=new Ticket(); 
    $Ticket->loadDBData($id);
    $Ticket->loadFormData();
    $Ticket->update();
    $setStatus=4;


}else{
Core::setView("ticket_vermerken", "view1", "detail");
Core::setView("ticket_vermerken2", "view2", "edit");
  $id= filter_input(INPUT_GET, "id");
  $Ticket=new Ticket();
  $Ticket->loadDBData($id);
  
  
Core::publish($Ticket, "Ticket");  
Ticket::renderScript("new","form_Ticket");
}



