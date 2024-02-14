<?php

    require("class.customer.php");
        

    $cc1 = new Customer();
    $cc1->setCustCode("CC001");
    $cc1->setCustName("Ana López");
    $cc1->setCustCity("Sevilla");
    $cc1->setGrade("C");
    $cc1->setOpeningAmt(2000);
    $cc1->setReceiveAmt(800);
    $cc1->setPaymentAmt(600);
    $cc1->setOutstandingAmt(1200);
    $cc1->setPhoneNo("987654321");
    $cc1->setAgentCode("AG003");

    $cc2 = new Customer();
    $cc2->setCustCode("CC002");
    $cc2->setCustName("Pedro Martínez");
    $cc2->setCustCity("Valencia");
    $cc2->setGrade("A");
    $cc2->setOpeningAmt(3000);
    $cc2->setReceiveAmt(1200);
    $cc2->setPaymentAmt(700);
    $cc2->setOutstandingAmt(2500);
    $cc2->setPhoneNo("123456789");
    $cc2->setAgentCode("AG004");

    print "CustCode: ". $cc1->getCustCode() . " | " . $cc2->getCustCode() . "<br>";
    print "CustName: ". $cc1->getCustName() . " | " . $cc2->getCustName() . "<br>";
    print "CustCity: ". $cc1->getCustCity() . " | " . $cc2->getCustCity() . "<br>";
    print "Grade: ". $cc1->getGrade() . " | " . $cc2->getGrade() . "<br>";
    print "OpeningAmt: ". $cc1->getOpeningAmt() . " | " . $cc2->getOpeningAmt() . "<br>";
    print "ReceiveAmt: ". $cc1->getReceiveAmt() . " | " . $cc2->getReceiveAmt() . "<br>";
    print "PaymentAmt: ". $cc1->getPaymentAmt() . " | " . $cc2->getPaymentAmt() . "<br>";
    print "OutstandingAmt: ". $cc1->getOutstandingAmt() . " | " . $cc2->getOutstandingAmt() . "<br>";
    print "PhoneNo: ". $cc1->getPhoneNo() . " | " . $cc2->getPhoneNo() . "<br>";
    print "AgentCode: ". $cc1->getAgentCode() . " | " . $cc2->getAgentCode() . "<br>";

    $cc2CustCode = $cc1->getCustCode();
    $cc2CustName = $cc1->getCustName();
    $cc2CustCity = $cc1->getCustCity();
    $cc2Grade = $cc1->getGrade();
    $cc2OpeningAmt = $cc1->getOpeningAmt();
    $cc2ReceiveAmt = $cc1->getReceiveAmt();
    $cc2PaymentAmt = $cc1->getPaymentAmt();
    $cc2OutstandingAmt = $cc1->getOutstandingAmt();
    $cc2PhoneNo = $cc1->getPhoneNo();
    $cc2AgentCode = $cc1->getAgentCode();

    $cc1->setCustCode($cc2->getCustCode());
    $cc1->setCustName($cc2->getCustName());
    $cc1->setCustCity($cc2->getCustCity());
    $cc1->setGrade($cc2->getGrade());
    $cc1->setOpeningAmt($cc2->getOpeningAmt());
    $cc1->setReceiveAmt($cc2->getReceiveAmt());
    $cc1->setPaymentAmt($cc2->getPaymentAmt());
    $cc1->setOutstandingAmt($cc2->getOutstandingAmt());
    $cc1->setPhoneNo($cc2->getPhoneNo());
    $cc1->setAgentCode($cc2->getAgentCode());
    
    $cc2->setCustCode($cc2CustCode);
    $cc2->setCustName($cc2CustName);
    $cc2->setCustCity($cc2CustCity);
    $cc2->setGrade($cc2Grade);
    $cc2->setOpeningAmt($cc2OpeningAmt);
    $cc2->setReceiveAmt($cc2ReceiveAmt);
    $cc2->setPaymentAmt($cc2PaymentAmt);
    $cc2->setOutstandingAmt($cc2OutstandingAmt);
    $cc2->setPhoneNo($cc2PhoneNo);
    $cc2->setAgentCode($cc2AgentCode);


    print "<br>Datos intercambiados:<br>";
    print "CustCode: ". $cc1->getCustCode() . " | " . $cc2->getCustCode() . "<br>";
    print "CustName: ". $cc1->getCustName() . " | " . $cc2->getCustName() . "<br>";
    print "CustCity: ". $cc1->getCustCity() . " | " . $cc2->getCustCity() . "<br>";
    print "Grade: ". $cc1->getGrade() . " | " . $cc2->getGrade() . "<br>";
    print "OpeningAmt: ". $cc1->getOpeningAmt() . " | " . $cc2->getOpeningAmt() . "<br>";
    print "ReceiveAmt: ". $cc1->getReceiveAmt() . " | " . $cc2->getReceiveAmt() . "<br>";
    print "PaymentAmt: ". $cc1->getPaymentAmt() . " | " . $cc2->getPaymentAmt() . "<br>";
    print "OutstandingAmt: ". $cc1->getOutstandingAmt() . " | " . $cc2->getOutstandingAmt() . "<br>";
    print "PhoneNo: ". $cc1->getPhoneNo() . " | " . $cc2->getPhoneNo() . "<br>";
    print "AgentCode: ". $cc1->getAgentCode() . " | " . $cc2->getAgentCode() . "<br>";
    
?>
