<?php
// Get input data
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];

// Load the XML file
$xml = simplexml_load_file('data.xml');

// Find the record to edit
$record = $xml->xpath("//record[id='$id']")[0];
$record->name = $name;
$record->age = $age;

// Save the updated XML file
$xml->asXML('data.xml');
?>
