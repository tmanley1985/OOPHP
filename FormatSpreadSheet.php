<?php

class FormatSpreadSheet
{
	protected $filepath;

	function __construct($filepath)
	{
		$this->filepath = $filepath;

	}


	protected function createArrayFromSpreadSheet($filepath)
	{
		//Get contents of spreadsheet file
		
		//Create Array From Spreadsheet
		
		//return array
	}

	protected function removeDuplicates()
	{
		$spreadSheetArray = $this->createArrayFromSpreadSheet($this->filepath);

		//Search for duplicates and replace them
		
		//Return formatted array

	}

	protected function exportFormattedSpreadSheet()
	{
		$formattedSpreadSheet = $this->removeDuplicates();

		//Export array to new spread sheet
		
	}
}

$newSpreadSheet = new FormatSpreadSheet('/home/thomas/');