<?php
$taskType = "edit";
$classSettings = Ticket::$settings;
Core::$title="Bearbeiten: Ticket";

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
$_HSMitarbeiter = HSMitarbeiter::findAll();
Core::publish($_HSMitarbeiter, "_HSMitarbeiter");
$Ticketliste = Ticket::findAll();
Core::publish($Ticketliste, "Ticketliste"); 

if(count($_POST)>0){ 
    $id= filter_input(INPUT_GET, "id");
    $Ticket=new Ticket(); 
    $Ticket->loadDBData($id);
    $Ticket->loadFormData();
    $Ticket->update();

}else{ // Von Liste
Core::setView("ticket_bearbeiten", "view1", "edit");
  $id= filter_input(INPUT_GET, "id");
  $Ticket=new Ticket();
  $Ticket->loadDBData($id);
  
  
Core::publish($Ticket, "Ticket");  
Ticket::renderScript("new","form_Ticket");

}
