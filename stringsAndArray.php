<?php
class HtmlTags{

        public static function getHorizontalRule(){
	            return '<hr>';
	}
	public static function getHeaderDescription($commandName){
	     return  "<h1> $commandName  function demo </h1>";
	}
	
}

class StringFunctions{


	private $inputString;
	private $html;

	 public function __construct($inputString){
	  $this->inputString = $inputString;
          echo '**************************Strings and Arrays in php********************<br>';
	  echo 'Input String : Learning PHP Programming';
	  }

	  public function getStringLength(){
	  $text = HtmlTags :: getHeaderDescription("Length");
	  $text .= 'The length of String is :'. Strlen($this->inputString); 
	  $this->html.=  $text .= HtmlTags:: getHorizontalRule();
	  }


	  public function getStringWordCount(){
	  $text = HtmlTags :: getHeaderDescription("String word count");
	  $text .= 'Word count :' . Str_word_count($this->inputString);
	  $this->html.=  $text .= HtmlTags:: getHorizontalRule();
	  }

	  public function replaceText(){
	  $text = HtmlTags :: getHeaderDescription("Replace Text");
	  $text .= 'New String : ' . str_replace("PHP","Java",$this->inputString);
	  $this->html.=  $text .= HtmlTags:: getHorizontalRule();
	  }

	  public function reverseString(){
	  $text = HtmlTags :: getHeaderDescription("Reverse String");
	  $text .= 'Reverse String : ' . strrev($this->inputString);
	  $this->html.=  $text .= HtmlTags:: getHorizontalRule();
	  }
	
	public function convertToTitleCase(){
	$text = HtmlTags :: getHeaderDescription("Lower to title case");
	$inputString = "learning php programming";
	$text .=  ucwords($inputString);
	$this->html.=  $text .= HtmlTags:: getHorizontalRule();
	}

	public function toLowerCase(){
	$text = HtmlTags :: getHeaderDescription("Lowercase");
	$inputString = "LEARN PHP PROGRAMMING";
	$text .= strtolower($inputString);
	$this->html.=  $text .= HtmlTags:: getHorizontalRule();
	}

	public function toUpperCase(){
	$text = HtmlTags :: getHeaderDescription("Upper case");
	$inputString = "i am learning php";
	$text .= strtoupper($inputString);
	$this->html.=  $text .= HtmlTags:: getHorizontalRule();
	}

	public function repeatString(){
	$text = HtmlTags :: getHeaderDescription("Repeat String");
	$text .= str_repeat($this->inputString,5);
	$this->html.=  $text .= HtmlTags:: getHorizontalRule();
	}

	
	public function subString(){
	$text = HtmlTags :: getHeaderDescription("Sub String");
	$text .= substr($this->inputString,0,8);
	$this->html.=  $text .= HtmlTags:: getHorizontalRule();
	  }
	    
	public function compareString(){
	$text = HtmlTags :: getHeaderDescription("Compare String");
	$text.= strcmp($this->inputString,$this->inputString);
	$this->html.=  $text .= HtmlTags:: getHorizontalRule();
	}


	public function call(){
	  $this-> getStringLength();
	  $this-> getStringWordCount();
	  $this-> replaceText();
	  $this-> reverseString();
	  $this-> convertToTitleCase();
	  $this-> toLowerCase();
	  $this-> toUpperCase();
	  $this-> repeatString();
	  $this-> subString();
	  $this-> compareString();
	}

	public function __destruct(){
	   print($this->html);
        }

}

class ArrayFunctions{

	public function __constructor(){
	echo 'hello';
	}

	function printArray($grades){
	  $this->getCommandDescription("Print");	
 	  print_r($grades);
	  $this->getHorizontalRule();
	}

	function changeKeyCase($grades){
	  $this->getCommandDescription("change key case");
	  print_r(array_change_key_case($grades,CASE_UPPER));
	  $this->getHorizontalRule();
	}

	function chunkArray($grades){
 	  $this->getCommandDescription("Chunk");
          print_r(array_chunk($grades,3));
  	  $this->getHorizontalRule();
        } 

        function getArrayKeys($grades){
          $this->getCommandDescription("Get Keys");
          print_r(array_keys($grades));
          $this->getHorizontalRule();
        }

        function countArrayValues($grades){
          $this->getCommandDescription("Count Values");
          print_r(array_count_values($grades));
          $this->getHorizontalRule();
        } 

        function arraySize($grades){
          $this->getCommandDescription("Sizeof");
          echo "Size ::". sizeof($grades);
	  $this->getHorizontalRule();
       }

	function mergeArray($grades){
	$this->getCommandDescription("Merge ");
	$grades2 = array("Sean"=>"A");
	print_r(array_merge($grades,$grades2));
	$this->getHorizontalRule();
	}

	function reverseArray($grades){
	  $this->getCommandDescription("Reverse");
	  print_r(array_reverse($grades));
	  $this->getHorizontalRule();
	}

	function sliceArray($grades){
	  $this->getCommandDescription("Slice");
	  print_r(array_slice($grades,1));
	  $this->getHorizontalRule();
	}

	function sum(){
	  $this->getCommandDescription("Sum");
	  $salary = array(1000,1100,1200);
	  print_r(array_sum($salary));
	  $this->getHorizontalRule();
	}
	
	 public function getCommandDescription($commandName){
           echo "<h1> $commandName  Array function demo </h1>";
         }

         public function getHorizontalRule(){
           echo '<hr>';
         
	}


	public function callArrayFunctions($grades){
	$this-> printArray($grades);
	$this-> changeKeyCase($grades);
	$this-> chunkArray($grades);
	$this-> getArrayKeys($grades);
	$this-> countArrayValues($grades);
	$this->arraySize($grades);
	$this->mergeArray($grades);
	$this->reverseArray($grades);
	$this->sliceArray($grades);
	$this->sum();
}

}
$obj2 = new ArrayFunctions();
$grades = array("Jack"=>"A","Mark"=>"B","Joe"=>"C","Peter"=>"D","Rose"=>"E","Lucy"=>"F");
$obj2->callArrayFunctions($grades);


	$obj = new StringFunctions("Learning PHP Programming ");
	$obj-> call();
