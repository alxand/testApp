<?php

/**
 * doc
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

  public function getAmount(){
    return $this->amount;
  }
  public function getMsisdn(){
    return $this->msisdn;
  }

  public function getEmail(){
    return $this->email;
  }
  public function getCustomerName(){
    return $this->customer_name;
  }
}
?>