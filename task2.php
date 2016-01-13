<?php
$result ='Output hash';
$username = "Username ";
if(count($_POST) == 3){
    $username = empty($_POST['userName']) ? '' : trim(htmlspecialchars($_POST['userName']));
    $password = empty($_POST['passFirstTime']) ? '' :trim(htmlspecialchars($_POST['passFirstTime']));
    $passwordConfirm =  empty($_POST['passConform']) ? '': trim(htmlspecialchars($_POST['passConform']));
    if($password == $passwordConfirm && strlen($password)>=5){
        $result =  password_hash($password,PASSWORD_DEFAULT);
    }else{
        $result = 'password validation error';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <form class="form" method="post" action="">
                <div class="form-group">
                    <label for="username">User name </label>
                    <input type="text" class="form-control" id="username" name="userName" value="<?=htmlentities($username)?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Password: </label>
                    <input type="password" class="form-control" id="pwd" name="passFirstTime">
                </div>
                <div class="form-group">
                    <label for="pwd2">Password again: </label>
                    <input type="password" class="form-control" id="pwd2" name="passConform">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?= $username.'=>'.$result?></textarea>
</div>

</body>
</html>