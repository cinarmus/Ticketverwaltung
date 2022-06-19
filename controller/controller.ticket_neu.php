<?php

$menu=KategorieT::findAll();
Core::publish($menu, "Kategorie");

if(count($_POST)>0){

Core::setView("ticket_neu", "view1", "detail");
$ticket=new Ticket();
$ticket->loadFormData();
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

