<?php
if(count($_POST) == 3) {
    $result = "";
    foreach ($_REQUEST as $name => $request) {
        $result .= '<div>Parameter name => ' . $name . "</div>";
        $result .= '<div>Type of parameter => ' . gettype($request) . "</div>";
        $result .= '<div>Value of parameter  => ' . $request . "</div>";
        $result .= '<div>Request method => ' . $_SERVER['REQUEST_METHOD'] . "</div><br>";
    }
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
            <label for="username">User name </label>
            <input type="text" class="input-sm" id="username" name="userName">
        </div>
        <div class="form-group col-xs">
            <label for="pwd">Password: </label>
            <input type="password" class="input-sm" id="pwd" name="passFirstTime">
        </div>
        <div class="form-group col-xs">
            <label for="pwd2">Confirm Password</label>
            <input type="password" class="input-sm" id="pwd2" name="passConform">
        </div>
        <button type="submit" class="btn-sm btn-default">Submit</button>
    </form>
    <br/>
    <?= isset($result) ? $result : "not properly filled form !" ?>
</body>
</html>