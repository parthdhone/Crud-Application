<?php
// Get input data
$id = $_POST['id'];

// Load the XML file
$xml = simplexml_load_file('data.xml');

// Find the record to delete
$record = $xml->xpath("//record[id='$id']")[0];
unset($record[0]);

// Save the updated XML file
$xml->asXML('data.xml');
?>
