<html>

<h1>Hi</h1>
<?php
ini_set("allow_url_fopen", 1);
// Get weather data
echo 'hi';
$json = file_get_contents('api.openweathermap.org/data/2.5/weather?q=London,uk');
echo $json;
$obj = json_decode($json);
echo $obj['name'];
echo 'hii';

?>

</html>