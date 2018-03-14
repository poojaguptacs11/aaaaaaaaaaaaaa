<?php
Class Student 
{
//	private $name,$contact_no, $adds;
	function getDetails($n,$c,$a)
	{
		$this->name=$n; 
		$this->contact_no=$c;
		$this->adds=$a;
	}
	function showDetail()
	{
		echo "<br/>Name : " .$this->name. " <br/>Contact no : " .$this->contact_no. "<br/> Adds :" .$this->adds; 
	}
}
$stu1 = new Student();
//$stu2= new Student();
$stu1->getDetails("pooja gupta", '7754040833',"allahabad");
$stu1-> showDetail();
//$stu2->getDetails("abhija", '7754040833',"allahabad");
//$stu2--> showDetail();
 