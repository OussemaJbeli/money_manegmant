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
    <link rel="icon" type="icon" href="{{ asset('icon/logo.png') }}"> 
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/all.min.css') }}">
    @vite([
        'resources/scss/login.scss',
        'resources/js/login.js'
    ])
    <title>Document</title>
</head>
<body>
    {{-- loading _page --}}
    @include('layouts/pages/loading_page')
    {{--  --}}
    <div class="login" >
        <img class="bg1 bgs" id="bg1" src="{{asset('icon\login\1.png')}}" alt="">
        <img class="left_tree bgs" id="left_tree" src="{{asset('icon\login\tree_left.png')}}" alt="">
        <img class="right_tree bgs" id="right_tree" src="{{asset('icon\login\tree_rigth.png')}}" alt="">
        <img class="bg2 bgs" id="bg2" src="{{asset('icon\login\2.png')}}" alt="">
        <img class="bg3 bgs" id="bg3" src="{{asset('icon\login\3.png')}}" alt="">
        <div class="bg4 bgs" id="bg4">
            <div class="sun" id="bg4_sun"></div>
        </div>
        <img class="bg5 bgs" id="bg5" src="{{asset('icon\login\5.jpg')}}" alt="">
        <form action="user/login" method="get" id='login'>
            @csrf
            <div class="bear_avatar">
                <div class="eye_frame">
                    <div class="eyes" id="eyes">
                        <div class="eye_left eye" id="eye_left">
                            <div class="pupil" id="left_pupil"></div>
                            <div class="test"></div>
                        </div>
                        <div class="eye_right eye" id="eye_right">
                            <div class="pupil" id="right_pupil"></div>
                        </div>
                        <div class="roumouch" id="roumouch"></div>
                    </div>
                </div>
                <div class="mouth_frame">
                    <div class="mouth" id="mouth"></div>
                </div>
                <div class="left_hand" id="left_hand"></div>
                <div class="right_hand" id="right_hand"></div>
            </div>
            <div class="field">
                <input type="text" required placeholder="user name" name="user_name_email" maxlength="20" id="user">
            </div>
            <div class="field">
                <input type="password" required placeholder="password" name="password" minlength="8" maxlength="20" id="password">
                {{-- <img src="login/icon login/2.png" alt="" id="login_panel_show"> --}}
            </div>
            <a href="" id="forget">Forget Password?</a>
            <div class="buttons">
                <input type="submit" name="login_submit" value="Login" id="login">
            </div>
            <div class="disc">
                <p>Don't have an account?</p>
                <div class="register" id='register'>Register</div>
            </div>
        </form>
    </div> 
    <div class="new" id="new">
        <div class="up" id="up"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
        <form action="{{ route('user.store')}}" method="POST">
            @csrf
            <div class="create_info">
                <div class="fildes">
                    <p>create new</p>
                    <div class="inputs">
                        <input type="text" required placeholder="user name" name="user_name" maxlength="20" id="new_user" class="input">
                        <input type="email" required placeholder="email" name="email" maxlength="30" id="new_email" class="input">
                        <input type="password" required placeholder="password" name="password" maxlength="20" id="new_password" class="input">
                    </div>
                    <div class="sub_user">
                        <input type="submit" name="new_user_submit" value="save" id="new_user_submit">
                    </div>
                </div>
            </div>
            <div class="avatars_selector">
                <div class="panel">
                    <div class="security_question">
                        <p>security question</p>
                        <select name="questions" id="questions" class="input" placeholder="select">
                            <option value="pet">What was the name of your first pet?</option>
                            <option value="color">What is your favorite color?</option>
                            <option value="born">What city were you born in?</option>
                            <option value="movie">What is your favorite movie?</option>
                            <option value="food">What is your favorite food?</option>
                            <option value="car">What is your favorite car?</option>
                        </select>
                        <input type="text" required name="answer" placeholder="answer" class="input">
                    </div>
                    <div class="avatars">
                        <p>chose an avatar</p>
                        <div class="avatars_panel">
                            <label for="avatar1" class="avatar_img ava1" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar1" class="radio_avatar">
                            </label>
                            <label for="avatar2" class="avatar_img ava2" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar2" class="radio_avatar">
                            </label>
                            <label for="avatar3" class="avatar_img ava3" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar3" class="radio_avatar">
                            </label>
                            <label for="avatar4" class="avatar_img ava4" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar4" class="radio_avatar">
                            </label>
                            <label for="avatar5" class="avatar_img ava5" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar5" class="radio_avatar">
                            </label>
                            <label for="avatar6" class="avatar_img ava6" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar6" class="radio_avatar">
                            </label>
                            <label for="avatar7" class="avatar_img ava7" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar7" class="radio_avatar">
                            </label>
                            <label for="avatar8" class="avatar_img ava8" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar8" class="radio_avatar">
                            </label>
                            <label for="avatar9" class="avatar_img ava9" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar9" class="radio_avatar">
                            </label>
                            <label for="avatar10" class="avatar_img ava10" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar10" class="radio_avatar">
                            </label>
                            <label for="avatar11" class="avatar_img ava11" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar11" class="radio_avatar">
                            </label>
                            <label for="avatar12" class="avatar_img ava12" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar12" class="radio_avatar">
                            </label>
                            <label for="avatar13" class="avatar_img ava13" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar13" class="radio_avatar">
                            </label>
                            <label for="avatar14" class="avatar_img ava14" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar14" class="radio_avatar">
                            </label>
                            <label for="avatar15" class="avatar_img ava15" id='lable_avatar1'>
                                <input type="radio" name='avatar' id="avatar15" class="radio_avatar">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
{{--  --}}
<script>
    const eye1_red = document.getElementById('eye_left');
    const container1 = document.getElementById('left_pupil');
    const eye2_red = document.getElementById('eye_right');
    const container2 = document.getElementById('right_pupil');
    const containerRect1 = container1.getBoundingClientRect();
    const containerRect2 = container2.getBoundingClientRect();
    const centerX = containerRect1.left + containerRect1.width/2;
    const centerY = containerRect2.top + containerRect2.height/2;

    document.addEventListener('mousemove', (e) => {
        const x = e.clientX;
        const y = e.clientY;
        const dx = x - centerX;
        const dy = y - centerY;
        const angle = Math.atan2(dy, dx) * 360 / Math.PI;
        eye1_red.style.transform = `rotate(${angle}deg)`;
        eye2_red.style.transform = `rotate(${angle}deg)`;
    });
</script>

</html>