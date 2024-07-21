<?php
// Get input data
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];

// Load the XML file
$xml = simplexml_load_file('data.xml');

// Add a new record
$record = $xml->addChild('record');
$record->addChild('id', $id);
$record->addChild('name', $name);
$record->addChild('age', $age);

// Save the updated XML file
$xml->asXML('data.xml');
?>
