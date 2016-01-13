<?php
require_once "functions.php";
$operation = "";
$result = "";
$tempOne = 0;
if($_GET){
    $tempOne = getValue($_GET, 'tempOne');
    if (!is_numeric($tempOne))  $result = 'Invalid operation!!!';
    $operation =  getValue($_GET, 'operation');
    switch($operation){
        case 'CtoF':
            $result = (5/9)*($tempOne-32);
            break;
        case 'FtoC':
            $result = 9/5*$tempOne+32;
            break;
        default:
            $result = 'Invalid operation!!!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temperature calculator</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form role="form" method="get" action="">
    <input type="number" step="any" class="input-sm" name="tempOne">
    <select class= "input-sm" name="operation">
        <option value="CtoF">Celsius to Farenheit</option>
        <option value="FtoC">Farenheit to Celsius</option>
    </select>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<div>
    <?= $result ?>
</div>
</body>
</html>