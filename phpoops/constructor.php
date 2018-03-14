<?php
	class Table 
	{
		public function __construct()
		 {
		 	echo "hello world!<br/>";
		 }
	}
	$obj1 = new Table();
	//$obj2 = new Table();
	//$obj3 = new Table();
?>
<?php
	class Data 
	{
		private $name;
		public function __construct($value)
		 {
		 $this->name=$value;
		}
		 public function showdata()
		 {
		 	echo "<br/>Name : ".$this->name;
		 }
	}
	$obj1 = new Data("pooja gupta");
	$obj1->showdata();
	//$obj2 = new Data("gudiya");
	//$obj2->showdata();
	?>