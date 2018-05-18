
<?php

//namespace Bookstore\Domain;

class Person {

    private static $lastId = 0;
    protected $id;
    protected $firstname;
    protected $lastname;
    protected $email;

    public function __construct($id, $firstname, $lastname, $email)
    {

      	if (empty($id))
           {
      	      $this->id = ++self::$lastId;
      	    }
            else
            {
      		      $this->id = $id;
      		      if ($id > self::$lastId)
                {
      		          self::$lastId = $id;
      			    }
      		   }


    $this->firstname = $firstname;
	  $this->lastname = $lastname;
	  $this->email = $email;
 }

    public function getFirstName(){
       return $this->firstname;
    }


    public function getLastName() {
       return $this->lastname;
	}


    public static function getLastId() {
       return self::$lastId;
    }


    public function getId() {
       return $this->id;
    }


    public function getEmail() {
       return $this->email;
    }
}
//child class customer is created


Abstract class Customer extends Person
 {

    protected $firstname;
    protected $lastname;

    public function __construct($firstname, $lastname) {

       $this->firstname = $firstname;
	     $this->lastname = $lastname;
    }
    public function getFirstName()
    {
       return $this->firstname;
    }

    public function getLastName() {
       return $this->lastname;
	  }
}

//child class basiccustomer is extended from customer
class BasicCustomer extends Customer
 {

    protected $amount;
    protected $monthlyfee;
    protected $type;

    public function __construct($amount, $monthlyfee, $type) {

      $this->amount = $amount;
	    $this->monthlyfee = $monthlyfee;
      $this->type = $type;
    }

    public function getAmountToBorrow() {
       return $this->amount;
    }

    public function getMonthlyFee() {
       return $this->monthlyfee;
	  }

    public function getType() {
       return $this->type;
	  }
}

//child class premiumcustomer is extended from customer

class PremiumCustomer extends Customer
 {

   protected $amount;
   protected $monthlyfee;
   protected $type;

   public function __construct($amount, $monthlyfee,$type) {

     $this->amount = $amount;
     $this->monthlyfee = $monthlyfee;
     $this->type = $type;
   }

   public function getAmountToBorrow() {
      return $this->amount;
   }

   public function getMonthlyFee() {
      return $this->monthlyfee;
   }
   public function getType() {
      return $this->type;
   }
}


//$person1 object is created with value
$person1 = new Person(
  1,
  "ANIRUDH",
  "PRADYUMNA",
  "anirudh.pradyumna@peace.com");

echo "USER ID: {$person1->getId()}";
echo "<br>First Name: {$person1->getFirstname()}";
echo "<br>Last Name: {$person1->getLastName()}";
echo "<br>Email ID: {$person1->getEmail()}<br>";


//customer1 basic customer is created


$customer1 = new BasicCustomer(
  '100',
  '90.45',
  "Basic");

echo "<br>Monthly Fee: {$customer1->getMonthlyFee()}";
echo "<br>Amount: {$customer1->getAmountToBorrow()}";
echo "<br>Type: {$customer1->getType()}<br><br>";



//customer2 premium customer is created


$customer2 = new PremiumCustomer(
  '150',
  '180.55',
  "Premium");

echo "<br>Monthly Fee: {$customer2->getMonthlyFee()}";
echo "<br>Amount: {$customer2->getAmountToBorrow()}";
echo "<br>Type: {$customer2->getType()}";



?>
