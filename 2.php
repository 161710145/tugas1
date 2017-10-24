<?php
require_once '1.php';
$baju = new baju ('adidas','L');
echo"<h3>baju</h3>";
echo "merek :".$baju->get_merek().'<br>';
echo "ukuran :".$baju->get_ukuran().'<br>';
?>