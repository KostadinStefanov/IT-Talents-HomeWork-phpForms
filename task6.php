<?php
require_once "functions.php";

$result="";
$firstName = getValue($_POST, 'firstName');
$lastName = getValue($_POST, 'lastName');
$birthday = getValue($_POST, 'birthday');

if(!empty($firstName) && !empty($lastName)&& !empty($birthday)){
    $result = "<div style='background-color: forestgreen'>Form Send Successfully !!</div>";
}else{
    $result = "<div style='background-color: red'>Form Unfilled</div>";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request parameters</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form class="form" method="post" action="">
        <div class="form-group col-xs">
            <label for="firstName">First name</label>
            <input type="text" class="input-sm" id="firstName" name="firstName" value="<?=htmlentities($firstName)?>">
        </div>
        <div class="form-group col-xs">
            <label for="lastName">Last name</label>
            <input type="text" class="input-sm" id="lastName" name="lastName" value="<?=htmlentities($lastName)?>">
        </div>
        <div class="form-group col-xs">
            <label for="birthdayDate">Birthday date</label>
            <input type="date" class=class="input-sm" id="birthdayDate" name="birthday" value="<?=htmlentities($birthday)?>">
        </div>
            <button type="submit" class="btn-default btn-sm">Submit</button>
    </form>
    <br/>
    <?= $result ?>
</body>
</html>