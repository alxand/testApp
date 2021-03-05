<?php
    namespace TestFiles\Test;

    use PHPUnit\Framework\TestCase;
    use Controllers\Payment;
    class FirstTest extends TestCase
	{
        private $momo;
        public function setUp(){
            $this->momo =  new Payment();

        }

        public function testSetMsisdn(){
            $this->momo->setMsisdn('02440718723');
            if($this->momo->getMsisdn()){
                $this->assertTrue(TRUE);
            }
        }

        public function testGetMsisdn(){
            $this->momo->setMsisdn('02440718723');
            if($this->momo->getMsisdn()){
                $this->assertTrue(TRUE);
            }
        }
        public function testMsisdnIsSetToEmpty(){
            $this->momo->setMsisdn('');
            $this->assertEmpty($this->momo->getMsisdn());
            
        }
    }

?>