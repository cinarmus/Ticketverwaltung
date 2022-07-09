<?php

$menu=KategorieT::findAll();
Core::publish($menu, "Kategorie");

if(count($_POST)>0){

$position=new Position();
$position->loadFormData();
$position->create();
Core::redicrect("dashboard&menu=Ticketübersicht");

} else {
    
Core::setView("ticket_neu", "view1", "detail");
Core::setView("position", "view2", "new");

$id=filter_input(INPUT_GET, "id");
$ticket=new Ticket();
$ticket->loadDBData($id);
$position=new Position();
$position->_Ticket=$ticket->$id;

Core::publish($ticket, "Ticket");
Core::publish($position, "Position");   

Ticket::renderScript("detail", "form_Ticket");
Position::renderScript("new", "form_Position");
}

