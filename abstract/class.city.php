<?php
require("abstract.databoundobject.php");
require("class.pdofactory.php");

class City extends DataBoundObject {

    protected $City;
    protected $CountryID;
    protected $LastUpdate;

    protected function DefineTableName() {
        return("city");
    }

    protected function DefineRelationMap() {
        return(array(
            "id" => "ID",
            "city" => "City",
            "country_id" => "CountryID",
            "last_update" => "LastUpdate"
        ));
    }
}

print "Running...<br />";

$strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
$objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root", array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$objCity = new City($objPDO);

$objCity->setCity("Badalona");
$objCity->setCountryID(1);
$objCity->setLastUpdate(date("Y-m-d H:i:s"));

print "City is " . $objCity->getCity() . "<br />";
print "CountryID is " . $objCity->getCountryID() . "<br />";
print "LastUpdate is " . $objCity->getLastUpdate() . "<br />";

print "<br />Saving...<br />";
$objCity->Save();

$id = $objCity->getID();
print "ID in database is " . $id . "<br />";

print "<br />Committing a change...<br/>";
$objCity->setCity("Cádiz");
$objCity->setCountryID(2);
$objCity->setLastUpdate(date("Y-m-d H:i:s"));

print "City is " . $objCity->getCity() . "<br />";
print "CountryID is " . $objCity->getCountryID() . "<br />";
print "LastUpdate is " . $objCity->getLastUpdate() . "<br />";

print "<br />Saving...<br />";
$objCity->Save();

// print "<br />Destroying object...<br />";
// $objCity->MarkForDeletion();
// unset($objCity);
?>
