<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo phpinfo();

echo "<hr>";

define('WEBSITE_NAME','Hello in MSA ');
echo "<h1>" . WEBSITE_NAME . "</h1>";

echo "<hr>";

echo "<h2>Server Details</h2>";
echo "<p>Server Name: " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p>Server Address: " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "<p>Server Port: " . $_SERVER['SERVER_PORT'] . "</p>";
echo "<p>Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "</p>";
////////////////Another Method to show file name
// echo "<p>E Script Filename: " . __FILE__ . "</p>";
echo "<p>Script Path: " . $_SERVER['PHP_SELF'] . "</p>";

echo "<hr>";

echo "<h2>Determine Child grade</h2>";
$age=10;
switch($age){
    case $age<5:
        echo 'Stay at home';
        break;
    case $age===5:
        echo 'Go to Kindergarden';
        break;
    case $age>=6:
    case $age<=12:
        $grade=$age-6;
        echo "Go to grade: $grade";
    break;
}



?>
</body>
</html>