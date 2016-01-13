<?php
$operation = "";
$operation = "";
$result = 0;
if($_GET){
    $firstNum = !is_numeric($_GET['firstNum']) && empty($_GET['firstNum']) ? '' : $_GET['firstNum'];
    $secondNum = !is_numeric($_GET['secondNum'])&& empty($_GET['secondNum']) ? '' : $_GET['secondNum'];
    $operation =  empty($_GET['operation']) ? '': $_GET['operation'];
    switch($operation){
        case '+':
            $result = $firstNum + $secondNum;
            break;
        case '-':
            $result = $firstNum - $secondNum;
            break;
        case '*':
            $result = $firstNum * $secondNum;
            break;
        case '/':
            $result = $firstNum / $secondNum;
            break;
        default: die('No Way !');
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <form role="form" method="get" action="">
            <input type="number" class="input-sm" name="firstNum">
            <select class= "input-sm" name="operation">
            <option value="+"> +</option>
            <option value="-" >-</option>
            <option value="*" >*</option>
            <option value="/" >/</option>
            </select>
            <input type="number" class="input-sm" name="secondNum">
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <div>
           <?= htmlentities($result, ENT_QUOTES, 'UTF-8'); ?>
        </div>
</body>
</html>