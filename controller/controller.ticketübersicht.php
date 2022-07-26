<?php

Core::setView("ticketübersicht", "view1", "list");


$Kategorie= filter_input(INPUT_GET,"filter");
switch($Kategorie){
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
Core::publish($Ticket, "Ticket");

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
