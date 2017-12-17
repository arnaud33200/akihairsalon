<?php

class HairPriceItem {

	public $price = "";
	public $category = "";
	public $name = "";
	public $description = "";


	public static function test() {
		echo "TEST";
	}

    public static function makeHairPriceItemArray($websiteInfoString) {

		
		$json = json_decode($websiteInfoString, true);
		$itemList = $json["hasOfferCatalog"]["itemListElement"];

		$categoryArray = array();
		foreach ($itemList as $value) {
   			$hairPriceItem = new HairPriceItem($value);

   			$itemArray = $categoryArray[$hairPriceItem->category];
   			if (is_null($itemArray)) {
   				$itemArray = array();
   			}
   			array_push($itemArray, $hairPriceItem);

   			$categoryArray[$hairPriceItem->category] = $itemArray;
   			// echo $hairPriceItem->name;
		}
		// print_r($categoryArray);
		return $categoryArray;
	}

	public function __construct($jsonItem) {
		$this->price = $jsonItem["price"];

		$itemOfferedJson = $jsonItem["itemOffered"];
		$this->category = $itemOfferedJson["category"];
		$this->name = $itemOfferedJson["name"];
		$this->description = $itemOfferedJson["description"];
    }


    public function getStringTableRow() {
    	$rowString = "<tr><th class=\"price-title\">";
    	$rowString = $rowString . $this->name;
    	$rowString = $rowString . "</th><th class=\"price-value\">";
    	$rowString = $rowString . $this->price;
    	$rowString = $rowString . "</th></tr>";
    	
    	// description
    	if ($this->description !== '') {
    		$rowString = $rowString . "<tr><th class=\"price-detail\">";
    		$rowString = $rowString . $this->description;
    		$rowString = $rowString . "</th></tr>";
    	}
    	return $rowString;
    }
}


?>