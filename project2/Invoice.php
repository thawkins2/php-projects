<?php
	require_once('InvoiceItem.php');
	require_once('ProcessInvoice.php');
	
	//Main class for the generating the invoice
	class Invoice {
		private $invoiceArray = array();
		private $totalInvoice;
		
		//Get/set for array AND BETTER naming conventions
		public function getArray() {
			return $this->invoiceArray;
		}
		public function setArray($invoiceArray) {
			return $this->invoiceArray = $invoiceArray;
		}
		
		//Get/set for invoice total
		public function getTotal() {
			return $this->total;
		}
		public function setTotal($totalInvoice) {
			return $this->total = $totalInvoice;
		}

		//Calculate the total invoice cost for all items
		public function calculateInvoice() {
			$totalInvoice = 0;
			$item = new InvoiceItem();

			for ($i = 0; $i < count($this->invoiceArray); $i++) {
				$totalInvoice += $this->invoiceArray[$i]->calculateItemTotal();
			}
			$this->setTotal($totalInvoice);
		}
		
		//Call the display function and output each item and final invoice total
		//Call the calculate invoice function to get total instead of saving in variables
		public function displayInvoice() {

			$item = new InvoiceItem();

			for ($i = 0; $i < count($this->invoiceArray); $i++) {
				echo $this->invoiceArray[$i]->display();
			}
			echo 'Invoice Total: $' . $this->total;
		}
	}
?>
