<?php

Core::$title="Ablehnen: Ticket";

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
    $Status=filter_input(INPUT_GET,"Status"); 
    $Ticket=new Ticket(); 
    $Ticket->loadDBData($id);
    $Ticket->loadFormData();
    $Ticket->update();
    $setStatus=5;
    

}else{ 

Core::setView("ticket_ablehnen", "view1", "detail");
Core::setView("ticket_ablehnen2", "view2", "edit");
  $id= filter_input(INPUT_GET, "id");
  $Ticket=new Ticket();
  $Ticket->loadDBData($id);
 
Core::publish($Ticket, "Ticket");  
Ticket::renderScript("new","form_Ticket");

}




