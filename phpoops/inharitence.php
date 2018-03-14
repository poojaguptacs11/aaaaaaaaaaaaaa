<?php
class Parents
{
		private $ability, $eye;
 function myparents()
 {
 	echo "this is the function (myparents) of Parents!";
 	 }
}

class Childs extends Parents
{
		 private $ability, $eye, $fair;
  function mychild()
  {
  	echo "this is the function (mychild) of Childs!<br/>";
  }
}
  $child1=new Childs();
  $child1->mychild();
  $child1->myparents();
?>
<?
// parents class ko again likhna na pade child class me esiliye extends kr dete hai hm or fir child ke hi object se use call kr sktey hai. ?>