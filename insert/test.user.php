<?php

    require("class.user.php");
    require("class.pdofactory.php");

    print "Running...<br />";

    $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
    $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root",array());
    $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $usu = new User($objPDO, 1);
    
    print "ID: " . $usu->getID() . "<br />";
    print "First name is " . $usu->getFirstName() . "<br />";
    print "Last name is " . $usu->getLastName() . "<br />";
    print "Password is " . $usu->getPassword() . "<br />";
    print "Mail is " . $usu->getEmailAddress() . "<br />";
    print "Username is " . $usu->getUsername() . "<br />";
    print "DateLastLogin is " . $usu->getDateLastLogin() . "<br />";
    print "TimeLastLogin is " . $usu->getTimeLastLogin() . "<br />";
    print "DateAccountCreated is " . $usu->getDateAccountCreated() . "<br />";
    print "TimeAccountCreated is " . $usu->getTimeAccountCreated() . "<br /><br />";
    
    $usu2 = new User($objPDO, 3);
    
    print "ID: " . $usu2->getID() . "<br />";
    print "First name is " . $usu2->getFirstName() . "<br />";
    print "Last name is " . $usu2->getLastName() . "<br />";
    print "Password is " . $usu2->getPassword() . "<br />";
    print "Mail is " . $usu2->getEmailAddress() . "<br />";
    print "Username is " . $usu2->getUsername() . "<br />";
    print "DateLastLogin is " . $usu2->getDateLastLogin() . "<br />";
    print "TimeLastLogin is " . $usu2->getTimeLastLogin() . "<br />";
    print "DateAccountCreated is " . $usu2->getDateAccountCreated() . "<br />";
    print "TimeAccountCreated is " . $usu2->getTimeAccountCreated() . "<br /><br/>";

    
    $usuTemp1 = $usu->getFirstName();
    $usuTemp2 = $usu->getLastName();
    $usuTemp3 = $usu->getPassword();
    $usuTemp4 = $usu->getEmailAddress();
    $usuTemp5 = $usu->getUsername();
    $usuTemp6 = $usu->getDateLastLogin();
    $usuTemp7 = $usu->getDateAccountCreated();
    $usuTemp8 = $usu->getTimeAccountCreated();

    $usu->setFirstName($usu2->getFirstName());
    $usu->setLastName($usu2->getLastName());
    $usu->setPassword($usu2->getPassword());
    $usu->setEmailAddress($usu2->getEmailAddress());
    $usu->setUsername($usu2->getUsername());
    $usu->setDateLastLogin($usu2->getDateLastLogin());
    $usu->setDateAccountCreated($usu2->getDateAccountCreated());
    $usu->setTimeAccountCreated($usu2->getTimeAccountCreated());

    $usu2->setFirstName($usuTemp1);
    $usu2->setLastName($usuTemp2);
    $usu2->setPassword($usuTemp3);
    $usu2->setEmailAddress($usuTemp4);
    $usu2->setUsername($usuTemp5);
    $usu2->setDateLastLogin($usuTemp6);
    $usu2->setDateAccountCreated($usuTemp7);
    $usu2->setTimeAccountCreated($usuTemp8);

    print "<br /><strong>Datos intercambiados</strong><br />";
    print "ID: " . $usu->getID() . "<br />";
    print "First name is " . $usu->getFirstName() . "<br />";
    print "Last name is " . $usu->getLastName() . "<br />";
    print "Password is " . $usu->getPassword() . "<br />";
    print "Mail is " . $usu->getEmailAddress() . "<br />";
    print "Username is " . $usu->getUsername() . "<br />";
    print "DateLastLogin is " . $usu->getDateLastLogin() . "<br />";
    print "TimeLastLogin is " . $usu->getTimeLastLogin() . "<br />";
    print "DateAccountCreated is " . $usu->getDateAccountCreated() . "<br />";
    print "TimeAccountCreated is " . $usu->getTimeAccountCreated() . "<br /><br />";
        
    print "ID: " . $usu2->getID() . "<br />";
    print "First name is " . $usu2->getFirstName() . "<br />";
    print "Last name is " . $usu2->getLastName() . "<br />";
    print "Password is " . $usu2->getPassword() . "<br />";
    print "Mail is " . $usu2->getEmailAddress() . "<br />";
    print "Username is " . $usu2->getUsername() . "<br />";
    print "DateLastLogin is " . $usu2->getDateLastLogin() . "<br />";
    print "TimeLastLogin is " . $usu2->getTimeLastLogin() . "<br />";
    print "DateAccountCreated is " . $usu2->getDateAccountCreated() . "<br />";
    print "TimeAccountCreated is " . $usu2->getTimeAccountCreated() . "<br /><br/>";

    $usu->Save();
    $usu2->Save();