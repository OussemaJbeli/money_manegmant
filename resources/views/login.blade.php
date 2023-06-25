<?php 
$errors=session('user_data');
if(isset($errors)){
    $errors=session('user_data');
    if($errors['user_test'] == 'false'){
        echo 'user or email not found';
    }
    else {
        echo 'user found /';
        if($errors['password_test']=='false')
            echo 'password wrong';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/login.scss'])
    <title>Document</title>
</head>
<body>
    <style>
        body{
            width: 100%;
            height: 100vh;
            background-color: #116531;
        }
    </style>
    <form action="user/login" method="get">
        @csrf
        <input type="text" name='user_name_email' placeholder="Password" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name='login_submit'>
    </form>
</body>
</html>