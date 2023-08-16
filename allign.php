<?php
// Load the JSON data from the provided URLs
$sourceJsonUrl = './data.json';
$coordinatesJsonUrl = './slovakia-cities.json';

$sourceJson = file_get_contents($sourceJsonUrl);
$coordinatesJson = file_get_contents($coordinatesJsonUrl);
$coordinatesJson = mb_convert_encoding($coordinatesJson, "utf-8", "windows-1252");

$sourceData = json_decode($sourceJson, true); 
$coordinatesData = json_decode($coordinatesJson, true);
 
$updatedSourceData = [];
// Loop through each element in the source JSON
foreach ($sourceData as $element) {
    $cityName = $element['názov obce']; 
    // print_r($cityName);
    // Search for the corresponding city data in the coordinates JSON
    foreach ($coordinatesData as $city) { 
 
        if ($city['city'] === $cityName) {
            $element['latitude'] = $city['latitude'];
            $element['longitude'] = $city['longitude'];
 
        }
    }
    $updatedSourceData[] = $element;
}
// return;

// Print or save the updated JSON data
$updatedJson = json_encode($updatedSourceData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

$updatedJsonFilePath = './updated_data.json';
file_put_contents($updatedJsonFilePath, $updatedJson);

echo 'Updated JSON data saved to: ' . $updatedJsonFilePath;
?>
