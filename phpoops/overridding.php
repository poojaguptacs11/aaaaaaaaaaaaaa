<?php
class Addition
 {
 	public function add()
 	{
 		echo "this is addition<br/> ";

 	}
 	public function invokeGupta()
 	{
 		self:: add();
 	}
 }

class Subtraction extends Addition
 {
 	public function add()
  {
 	echo "this is subtraction<br/>";
  }
  public function invokeAbhi()
  {
  	parent:: invokeGupta();
  }

}
$sub =new Subtraction();
$sub->add();
$sub->invokeAbhi();
?>