<?php
class baju{

	public $merek;
	public $ukuran;
//konstraktor
public function __construct($merek,$ukuran){
	$this->merek = $merek;
	$this->ukuran = $ukuran;
}
public function get_merek()
	{
	return	$this->merek;
	}
public function get_ukuran()
	{
	return	$this->ukuran;
}
 }
?>