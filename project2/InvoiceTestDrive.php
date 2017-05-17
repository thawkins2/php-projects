<?php
    require_once('ProcessInvoice.php');
    
    //Test drive class to initiate the invoice project
    class InvoiceTestDrive {
        private $invoice;
        
        //Initiate and call the runProcess function
        public function testDrive() {
            $invoice = new ProcessInvoice();
            $invoice->runProcess();
        }
    }
    
    //Initiate and call the testdrive class
    $test = new InvoiceTestDrive();
    $test->testDrive();
?>