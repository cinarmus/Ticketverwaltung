<?php

$Kategorie=KategorieT::findAll();
$Status=StatusT::findAll();
$Priorität=PrioritätT::findAll();
Core::publish($Kategorie, "Kategorie");
Core::publish($Status, "Status");
Core::publish($Priorität, "Priorität");

if(count($_POST)>0){
    Core::setView("ticket_neu", "view1", "detail");
    $ticket=new Ticket();
    $ticket->loadFormData();
    $ticket->Status=1;
    $ticket->create();

if($_FILES["Anhang"]['name']!=""){
    $ticket->updateFile("Anhang");
}

Core::publish($ticket, "Ticket");

} else {
    
Core::setView("ticket_neu", "view1", "new");

$ticket=new Ticket();

Core::publish($ticket, "Ticket");
    
Ticket::renderScript("new", "form_Ticket");
}

$_TBKoordinator = TBKoordinator::findAll();
Core::publish($_TBKoordinator, "_TBKoordinator");
$_TBMitarbeiter = TBMitarbeiter::findAll();
Core::publish($_TBMitarbeiter, "_TBMitarbeiter");
$_HSMitarbeiter = HSMitarbeiter::findAll();
Core::publish($_HSMitarbeiter, "_HSMitarbeiter");