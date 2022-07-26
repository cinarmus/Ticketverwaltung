<?php

$_TBKoordinator = TBKoordinator::findAll();
Core::publish($_TBKoordinator, "_TBKoordinator");
$_TBMitarbeiter = TBMitarbeiter::findAll();
Core::publish($_TBMitarbeiter, "_TBMitarbeiter");
$Status = StatusT::findAll();
Core::publish($Status, 'Status');
$Kategorie = KategorieT::findAll();
Core::publish($Kategorie, 'Kategorie');
$Priorität = PrioritätT::findAll();
Core::publish($Priorität, 'Priorität');
Ticket::$SQLrestrict=false;

$klasse = Core::$view->Ticket; 
    
Core::setView("ticket_detail", "view1", "detail");

//$ticket->loadDBData($id);
$id=filter_input(INPUT_GET, "id");
$ticket=new Ticket();
$ticket->loadDBData($id);

Core::publish($ticket, "Ticket"); 

Ticket::renderScript("ticket_detail", "form_Ticket");


