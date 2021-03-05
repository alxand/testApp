<?php

/**
 * execute payment against provider gateway
 * 
 */
namespace Controllers;

class Payment
{
  
  private $amount;
  private $msisdn;

  private $email;
  private $customer_name;
  private $description;

  public function setAmount($amount){
    $this->amount = $amount;
  }

  public function setMsisdn($msisdn){
    $this->msisdn = $msisdn;
  }

  public function setEmail($email){
    $this->email = $email;
  }
  public function setCustomerName($name){
    $this->$customer_name = $name;
  }
}
?>