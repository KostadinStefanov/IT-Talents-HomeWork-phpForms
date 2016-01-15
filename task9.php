<?php
if(isset($_GET['form'])){
    header("Location: task9a.php");
    exit;
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
<p>Please insert 5 parameters</p>
<form role="form" name="form" method="get" action="task9a.php">
    <div class="form-group col-xs">
        <input type="text" class="input-sm"  name="par1">
    </div>

    <div class="form-group col-xs">
        <input type="text" class="input-sm"  name="par2">
    </div>

    <div class="form-group col-xs">
        <input type="text" class="input-sm"  name="par3">
    </div>

    <div class="form-group col-xs">
        <input type="text" class="input-sm"  name="par4">
    </div>

    <div class="form-group col-xs">
        <input type="text" class="input-sm"  name="par5">
    </div>

    <div class="form-group col-xs">
        <button class="btn-sm btn-default">Send Parameters</button>
    </div>
</form>
</body>
</html>