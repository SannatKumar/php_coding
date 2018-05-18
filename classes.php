
<?php
echo"Welcome to classes and objects<br>";        //php echo statement displays the data to the screen
// A class called SHIP is started
class SHIP
{
  public $shipName;
  public $shipType;               //variable is public and the ship_type attributes and string transport is the value
  public $shipSize;
  public $shipPrice;
  public $shipManufacturer;
  public $shipOperatinalterritory;
  //private $shipCode;
  //protected $shipPass;

  //consrtuctor with arguments

  public function __construct
  (
       $nameConstruct,
       $typeConstruct,
       $sizeConstruct,
       $priceConstruct,
       $manufacturerConstruct,
       $operationalTerritoryconstruct
  )
  {

    $this->shipName = $nameConstruct;
    $this->shipType = $typeConstruct;
    $this->shipSize = $sizeConstruct;
    $this->shipPrice = $priceConstruct;
    $this->shipManufacturer = $manufacturerConstruct;
    $this->shipOperatinalterritory = $operationalTerritoryconstruct;
  }
//get function to display the details
  public function getDetails()
  {
    return $this->shipName." <br>".
     $this->shipType."<br>".
     $this->shipSize."<br>".
     $this->shipPrice."<br>".
     $this->shipManufacturer."<br>".
     $this->shipOperatinalterritory;
  }
}
  //$ship1 object is created with value
  $ship1 = new SHIP(
    "VIKING LINE",
    "Cruise",
    "2000 Passengers",
    "2000000",
    "MEYER TURKU",
    "FINLAND SWEDEN" );

  echo "New SHIP Details: {$ship1->getDetails()}";
?>




<!--//This function is used to increase value

  public function ship_size_Up()
  {
    $this->ship_size++; // $this helps to get the public variable of the same particular class
  }
// a function is started to to decrease the value
  public function ship_size_Down()
  {
    $this->ship_size--;// $this helps to get the public variable of the same particular class
  }
}
//object is created which can use the function and attributes of the SHIP class
$ship_one = new SHIP;
$ship_two = new SHIP;
// displaying the value of the ship type
echo "$ship_one->ship_type<br>";
echo "$ship_two->ship_type<br>";
echo "$ship_one->ship_size<br>";
$ship_one->ship_size_Up();                            //function call
echo "$ship_one->ship_size<br>";
$ship_one->ship_size_Down();
echo "$ship_one->ship_size<br>";
echo "$ship_two->ship_size<br>";
$ship_two->ship_size_Up();
echo "$ship_two->ship_size<br>";
$ship_two->ship_size_Down();
echo "$ship_two->ship_size<br>";

?>
-->
