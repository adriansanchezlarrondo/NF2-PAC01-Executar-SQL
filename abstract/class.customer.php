<?php
require("abstract.databoundobject.php");
require("class.pdofactory.php");

class Customer extends DataBoundObject {

    protected $StoreID;
    protected $FirstName;
    protected $LastName;
    protected $Email;
    protected $AddressID;
    protected $ActiveBool;
    protected $CreateDate;
    protected $LastUpdate;
    protected $Active;

    protected function DefineTableName() {
        return("customer");
    }

    protected function DefineRelationMap() {
        return(array(
            "id" => "ID",
            "store_id" => "StoreID",
            "first_name" => "FirstName",
            "last_name" => "LastName",
            "email" => "Email",
            "address_id" => "AddressID",
            "activebool" => "ActiveBool",
            "create_date" => "CreateDate",
            "last_update" => "LastUpdate",
            "active" => "Active"
        ));
    }
}

print "Running...<br />";

$strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
$objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root", array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$objCustomer = new Customer($objPDO);

$objCustomer->setStoreID(1);
$objCustomer->setFirstName("María");
$objCustomer->setLastName("Gómez");
$objCustomer->setEmail("maria.gomez@gmail.com");
$objCustomer->setAddressID(1);
$objCustomer->setActiveBool(true);
$objCustomer->setCreateDate(date("Y-m-d H:i:s"));
$objCustomer->setLastUpdate(date("Y-m-d H:i:s"));
$objCustomer->setActive(true);

print "StoreID is " . $objCustomer->getFirstName() . "<br />";
print "First name is " . $objCustomer->getFirstName() . "<br />";
print "Last name is " . $objCustomer->getLastName() . "<br />";
print "Email is " . $objCustomer->getEmail() . "<br />";
print "AddressID is " . $objCustomer->getAddressID() . "<br />";
print "ActiveBool is " . $objCustomer->getActiveBool() . "<br />";
print "CreateDate is " . $objCustomer->getCreateDate() . "<br />";
print "LastUpdate is " . $objCustomer->getLastUpdate() . "<br />";
print "Active is " . $objCustomer->getActive() . "<br />";

print "<br />Saving...<br />";
$objCustomer->Save();

$id = $objCustomer->getID();
print "ID in database is " . $id . "<br />";

print "<br />Committing a change...<br/>";
$objCustomer->setStoreID(5);
$objCustomer->setFirstName("Jose");
$objCustomer->setLastName("Smith");
$objCustomer->setEmail("josesolo@gmail.com");
$objCustomer->setAddressID(4);
$objCustomer->setActiveBool(true);
$objCustomer->setCreateDate(date("Y-m-d H:i:s"));
$objCustomer->setLastUpdate(date("Y-m-d H:i:s"));
$objCustomer->setActive(true);

print "StoreID is " . $objCustomer->getFirstName() . "<br />";
print "First name is " . $objCustomer->getFirstName() . "<br />";
print "Last name is " . $objCustomer->getLastName() . "<br />";
print "Email is " . $objCustomer->getEmail() . "<br />";
print "AddressID is " . $objCustomer->getAddressID() . "<br />";
print "ActiveBool is " . $objCustomer->getActiveBool() . "<br />";
print "CreateDate is " . $objCustomer->getCreateDate() . "<br />";
print "LastUpdate is " . $objCustomer->getLastUpdate() . "<br />";
print "Active is " . $objCustomer->getActive() . "<br />";

print "<br />Saving...<br />";
$objCustomer->Save();

// print "<br />Destroying object...<br />";
// $objCustomer->MarkForDeletion();
// unset($objCustomer);
?>
