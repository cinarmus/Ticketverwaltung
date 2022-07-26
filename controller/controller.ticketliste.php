<?php

$taskType = "list";
$classSettings =Ticket::$settings;
$access = Core::checkAccessGui($classSettings, $taskType);
Core::publish($access, "access");

Core::setView("ticketliste", "view1", "list");


$Status= filter_input(INPUT_GET,"filter");
switch($Status){
    case "1":
        $Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_OFFEN);
        break;
    case "2":
        $Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_ZUGETEILT);
        break;
    case "3":
        $Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_IN_BEARBEITUNG);
        break;
    case "4":
        $Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_ABGESCHLOSSEN);
        break;
    case "5":
        $Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_ABGELEHNT);
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