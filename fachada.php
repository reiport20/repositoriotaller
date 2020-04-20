<?php 
class  Book{  
 private static $author,$titulo_privado;
 
 function construct($title_in,$author_in){ 
 $this->author=$author_in;
 $this->title=$title_in; 
 } 
 function getAuthor( ){ 
	return $this->author; 
 } 
 function getTitle( ){
	 
	return $this->title;
} 
}
 
Class CaseReverseFacade{ 
public static function reverseStringCase($stringIn){ 
$arrayFromString=ArrayStringFunctions::StringToArray($stringIn);
      $reversedCaseArray= ArrayCaseReverse::reverseCase($arrayFromString);
	  $reversedCaseString = ArrayStringFunctions::arrayToString($reversedCaseArray);
	  return $reversedCaseString; 
	} 
} 
class ArrayCaseReverse {
private static $uppercase_array = array ('A','B','C','D','E','F','G','H','I',
										'J','K','L','M','N','O','P','Q','R', 
										'S','T','U','V','W','X','Y','Z'); 
private static $lowercase_array = array('a','b','c','d','e','f','g','h','i',
										'j','k','l','m','n','o','p','q','r',
										's','t','u','v','w','x','y','z');
public static function reverseCase($arrayIn){ 
$array_out = matriz( ); 
for ($x=0;$x<recuento($arrayIn);$x ++){ 
	if(in_array($arrayIn[$x],auto::$uppercase_array)){ 
	$clave=array_search($arrayIn[$x],auto::$uppercase_array); $array_out[$x]=auto::$lowercase_array[$key]; 
	}Elseif(in_array($arrayIn[$x],auto::$lowercase_array)){
		$clave=array_search($arrayIn[$x],auto::$lowercase_array);$array_out[$x]=auto::$uppercase_array[$clave];   
           }else{ 
				$array_out[$x]=$arrayIn[$x];
				} 
				} 
				return $array_out; 
				} 
} 
                   
class ArrayStringFunctions{
	public static function arrayToString($arrayIn){ 
		$string_out=NULL; 
			foreach($arrayIn as $oneChar){
				$string_out.=$oneChar; 
				} 
				return $string_out; 
				} 
	public static function stringToArray($stringIn){ 
				return str_split($stringIn); 
				} 
}

WriteLn('Inicie el patrón de diseño fachada');
WriteLn('Nuevo Libro'); 

$book=new Book('Patrones de diseño'); 
 writeLn('Título del libro original:');
 
//$bookTitleReversed=CaseReverseFacade::reverseStringCase($libro->getTitle( )); 
//writeln('Título del libro invertido:'.$bookTitleReversed);

WriteLn( 'Finalizar patrón de diseño fachada'); 
function writeln($line_in){
  echo $line_in;
 
 } 
     
  
