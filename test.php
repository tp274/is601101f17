<?php
class HtmlTags{

	public static function getHorizontalRule(){
	    return '<hr>';
	}

	public static function getHeaderDescription($commandName){
	     return  "<h1> $commandName  function demo </h1>";
        }
	public static function printText($text){
             print($text);
	}
}

class StringFunctions{
        private $html ;
	private $inputString;

	public function __construct($inputString){
	     $this->inputString = $inputString;
	     echo "<h1>**************************Strings and Arrays in php********************</h1>";
	}

	public function getStringLength(){
	     $text .= HtmlTags :: getHeaderDescription("Length");
	     $text .= 'The length of String is :'. Strlen($this->inputString); # need to pass the inputString
	     $this->html.=  $text .= HtmlTags:: getHorizontalRule();
	}


  	public function __destruct(){
echo 'in destruct';
HtmlTags:: printText($this->html);
	}

}

$obj = new StringFunctions("I am learning PHP Programming");
#$inputString = "I am learning PHP Programming";
$obj->getStringLength($inputString);
?>
