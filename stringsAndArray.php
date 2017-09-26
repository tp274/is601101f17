<?php

class StringFunctions{

	public function __constructor(){
	
	}	

	public function getStringLength($inputString){
          $commandName = "String Length";
	  $this -> getCommandDescription($commandName);
	  echo 'The length of String is :' . Strlen($inputString);
	  $this -> getHorizontalRule();
	}

	
	public function getStringWordCount($inputString){
	  $commandName = "String word count";
	  $this -> getCommandDescription($commandName);
	  echo 'Word count :' . Str_word_count($inputString);
	  $this -> getHorizontalRule();
	}

	public function replaceText($inputString){
	  $commandName = "Replace Text";
	  $this -> getCommandDescription($commandName);
          echo "Input String :  $inputString <br>";
          echo 'New String : ' . str_replace("PHP","Java",$inputString);
          $this -> getHorizontalRule();
        }

	public function reverseString($inputString){
          $commandName = "Reverse String";
	  $this -> getCommandDescription($commandName);
	  echo "Input String :  $inputString <br>";
	  echo 'Reverse String : ' . strrev($inputString);
	  $this -> getHorizontalRule();
        }

	public function convertToTitleCase(){
          $commandName = "Lower to title case";
	  $this -> getCommandDescription($commandName);
	  $inputString = "learn php programming";
	  echo "Input String :  $inputString <br>";
	  echo 'Output String : ' . ucwords($inputString);
	  $this -> getHorizontalRule();
	}

	public function toLowerCase(){
	  $commandName = "Lowercase";
	  $this -> getCommandDescription($commandName);
	  $inputString = "LEARN PROGRAMMING";
	  echo "Input String : $inputString <br>";
	  echo 'New String :' . strtolower($inputString);
	  $this -> getHorizontalRule();
	}

	public function toUpperCase(){
          $commandName = "Upper case";
	  $this -> getCommandDescription($commandName);
	  $inputString = "i am learning php";
	  echo "Input String : $inputString<br>";
	  echo 'New String is:' . strtoupper($inputString);
	  $this -> getHorizontalRule();
	}
	
	public function repeatString($inputString){
	  $commandName = "Repeat String";
	  $this -> getCommandDescription($commandName);
	  echo 'Output :' . str_repeat($inputString,5);
	  $this -> getHorizontalRule();
	}

	public function subString($inputString){
	  $commandName = "Sub String";
	  $this -> getCommandDescription($commandName);
	  echo 'Output :' . substr($inputString,0,8);
	  $this -> getHorizontalRule();
	}
	
	public function compareString($inputString){
	  $commandName = "Compare String";
	  $this -> getCommandDescription($commandName);
	  echo "String compared are String 1 : $inputString<br>";
	  echo "Strng 2 : $inputString<br>";
	  echo 'Output :' . strcmp($inputString,$inputString);
	  $this -> getHorizontalRule();
	}

	public function getCommandDescription($commandName){
	  echo "<h1> $commandName  function demo </h1>";
	}

	public function getHorizontalRule(){
	  echo '<hr>';
	}

	public function call($inputString){
	  $this-> getStringLength($inputString);
	  $this-> getStringWordCount($inputString);
	  $this-> replaceText($inputString);
	  $this-> reverseString($inputString);
	  $this-> convertToTitleCase();
	  $this-> toLowerCase();
	  $this-> toUpperCase();
	  $this-> repeatString($inputString);
	  $this-> subString($inputString);
	  $this-> compareString($inputString);
	}
}

	$obj = new StringFunctions();
	$inputString = "Learning PHP Programming ";
	$obj-> call($inputString);
