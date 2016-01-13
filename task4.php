<?php

require_once "functions.php";

$result ='';

if($_GET){
    $numberArr = array_filter ($_GET['number']);
    asort($numberArr);
    $strArray = implode(',',$numberArr);
    $result = "$strArray =>  Max number is ".max($numberArr)." Min number is ".min($numberArr);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sort Numbers</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <p>Please insert 10 numbers to sort</p>
    <form role="form" method="get" action="">
        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>

        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>

        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>

        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>

        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>

        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>

        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>

        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>

        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>
        <div class="form-group col-xs">
            <input type="number" class="input-sm"  name="number[]" value="<?=htmlentities($numberArr)?>">
        </div>

        <div class="form-group col-xs">
            <button class="btn-sm btn-default">Sort Numbers</button>
        </div>
    </form>
    <?=htmlentities($result)?>
</body>
</html>