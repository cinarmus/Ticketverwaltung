<?php

Core::setView("ticketübersicht", "view1", "list");

$Ticketliste=Ticket::findAll();

$kategorie= filter_input(INPUT_GET, "filter");
switch($kategorie){
    case "1":
        $Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_GEBÄUDEMANGEL);
        break;
    case "2":
        $Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_ELEKTRIK);
        break;
    case "3":
        $Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_VORLESUNGSRAUM);
        break;
    case "4":
        $Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_EVENT);
        break;
}

Core::publish($Ticketliste, "Ticketliste");