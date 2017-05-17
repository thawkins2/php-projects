<?php
	require_once('InvoiceItem.php');
	require_once('Invoice.php');

	//Main class for process invoice
	class ProcessInvoice {
		private $invoice;
		
		/*
		//Constructor for the invoice class
		public function __construct() {
			$this->invoice = new Invoice();
		}
		*/
		
		
		//Create invoice objects and set them
		private function createInvoiceItems() {
		
			$invoices[0] = new InvoiceItem();
			$invoices[1] = new InvoiceItem();
			$invoices[2] = new InvoiceItem();

			$invoices[0]->setId(1);
			$invoices[0]->setQuantity(10);
			$invoices[0]->setPrice(10);
			$invoices[0]->setDescription("Thingys");

			$invoices[1]->setId(2);
			$invoices[1]->setQuantity(1);
			$invoices[1]->setPrice(50);
			$invoices[1]->setDescription("Stuff");

			$invoices[2]->setId(3);
			$invoices[2]->setQuantity(100);
			$invoices[2]->setPrice(2);
			$invoices[2]->setDescription("Crap");
			
			$this->invoice->setArray($invoices);
		}
		
		//Runs the invoice functions to display final invoice
		public function runProcess() {
			$this->invoice = new Invoice();

			$this->createInvoiceItems();
			$this->invoice->calculateInvoice();
			$this->invoice->displayInvoice();
		}
	}
?>
