<?php

Core::setView("meinte_tickets", "view1", "list");


$Ticketliste=Ticket::findAll(Ticket::SQL_SELECT_ALL);


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