<?php
	//Main class for the invoice item. Private variables w/ get/set found here.
	class InvoiceItem {
		//Private variables
		private $id;
		private $quantity;
		private $price;
		private $description;

		//Get/set for id variables
		public function getId() {
			return $this->id;
		}
		public function setId($id) {
			return $this->id = $id;
		}

		//Get/set for quantity variables
		public function getQuantity() {
			return $this->quantity;
		}
		public function setQuantity($quantity) {
			return $this->quantity = $quantity;
		}

		//Get/set for price variables
		public function getPrice() {
			return $this->price;
		}
		public function setPrice($price) {
			return $this->price = $price;
		}

		//Get/set for description variables
		public function getDescription() {
			return $this->description;
		}
		public function setDescription($description) {
			return $this->description = $description;
		}

		//Calculates items total
		public function calculateItemTotal() {
			$itemTotal = $this->getQuantity() * $this->getPrice();
			return $itemTotal;
		}

		//Creates a single variable to display each invoice item
		public function display() {
			$display = "Item ID: " . $this->getId() . ", Quantity: " . $this->getQuantity()
					. ", Price: $" . $this->getPrice() . ", Description: " .
					$this->getDescription() . ", Total Cost: $" .
					$this->calculateItemTotal() . "<br/>";
			return $display;
		}
	}
?>