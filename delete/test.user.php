<?php

    require("class.user.php");
    require("class.pdofactory.php");

    print "Running...<br />";

    $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
    $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root",array());
    $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $objUsuario = new User($objPDO, 12);
    // $objUsuario->setFirstName('Maríaaa');
    // $objUsuario->setLastName('Sánchez');
    // $objUsuario->setUsername('mariaSánchez');
    // $objUsuario->setPassword('225822'); 
    // $objUsuario->setEmailAddress('mariaasdas@example.com');
    // $objUsuario->setDateAccountCreated('2022-07-15');
    // $objUsuario->setTimeAccountCreated('12:20:00');
    // $objUsuario->setDateLastLogin('2023-12-12'); 
    // $objUsuario->setTimeLastLogin('10:22:00');

    print "First name is " . $objUsuario->getFirstName() . "<br />";
    print "Last name is " . $objUsuario->getLastName() . "<br />";
    print "Username is " . $objUsuario->getUsername() . "<br />";
    print "Password is " . $objUsuario->getPassword() . "<br />";
    print "EmailAddress is " . $objUsuario->getEmailAddress() . "<br />";
    print "DateAccountCreated is " . $objUsuario->getDateAccountCreated() . "<br />";
    print "TimeAccountCreated is " . $objUsuario->getTimeAccountCreated() . "<br />";
    print "DateLastLogin is " . $objUsuario->getDateLastLogin() . "<br />";
    print "TimeLastLogin is " . $objUsuario->getTimeLastLogin() . "<br /><br />";
    
    

    $objUsuario2 = new User($objPDO, 13);
    // $objUsuario2->setFirstName('Pedrosa');
    // $objUsuario2->setLastName('Eldelasmotos');
    // $objUsuario2->setUsername('pedroEldelasmotos');
    // $objUsuario2->setPassword('abcdeee123453'); 
    // $objUsuario2->setEmailAddress('pedrosanche@example.com');
    // $objUsuario2->setDateAccountCreated('2020-10-20');
    // $objUsuario2->setTimeAccountCreated('12:45:00');
    // $objUsuario2->setDateLastLogin('2022-12-10'); 
    // $objUsuario2->setTimeLastLogin('15:25:00'); 

    print "First name is " . $objUsuario2->getFirstName() . "<br />";
    print "Last name is " . $objUsuario2->getLastName() . "<br />";
    print "Username is " . $objUsuario2->getUsername() . "<br />";
    print "Password is " . $objUsuario2->getPassword() . "<br />";
    print "EmailAddress is " . $objUsuario2->getEmailAddress() . "<br />";
    print "DateAccountCreated is " . $objUsuario2->getDateAccountCreated() . "<br />";
    print "TimeAccountCreated is " . $objUsuario2->getTimeAccountCreated() . "<br />";
    print "DateLastLogin is " . $objUsuario2->getDateLastLogin() . "<br />";
    print "TimeLastLogin is " . $objUsuario2->getTimeLastLogin() . "<br /><br />";


    
    $objUsuario3 = new User($objPDO, 14);
    // $objUsuario3->setFirstName('Paula');
    // $objUsuario3->setLastName('Manzano');
    // $objUsuario3->setUsername('paula444');
    // $objUsuario3->setPassword('paula444manzano'); 
    // $objUsuario3->setEmailAddress('444manzano@example.com');
    // $objUsuario3->setDateAccountCreated('2024-01-01');
    // $objUsuario3->setTimeAccountCreated('17:27:00');
    // $objUsuario3->setDateLastLogin('2027-07-07'); 
    // $objUsuario3->setTimeLastLogin('17:00:00');
    
    print "First name is " . $objUsuario3->getFirstName() . "<br />";
    print "Last name is " . $objUsuario3->getLastName() . "<br />";
    print "Username is " . $objUsuario3->getUsername() . "<br />";
    print "Password is " . $objUsuario3->getPassword() . "<br />";
    print "EmailAddress is " . $objUsuario3->getEmailAddress() . "<br />";
    print "DateAccountCreated is " . $objUsuario3->getDateAccountCreated() . "<br />";
    print "TimeAccountCreated is " . $objUsuario3->getTimeAccountCreated() . "<br />";
    print "DateLastLogin is " . $objUsuario3->getDateLastLogin() . "<br />";
    print "TimeLastLogin is " . $objUsuario3->getTimeLastLogin() . "<br /><br />";

    // $objUsuario->Save();
    // $objUsuario2->Save();
    // $objUsuario3->Save();

    $objUsuario->MarkForDeletion();
	unset($objUsuario);
    $objUsuario2->MarkForDeletion();
	unset($objUsuario2);
    $objUsuario3->MarkForDeletion();
	unset($objUsuario3);