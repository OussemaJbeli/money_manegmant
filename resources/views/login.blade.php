<?php 
//login
$errors=session('user_data');
$test_user='hidden';
$test_password='hidden';
if(isset($_GET['login_submit'])){
    if(isset($errors)){
        $errors=session('user_data');
        if($errors['user_test'] == 'false'){
            $test_user='visible';
            $test_password='hidden';
        }
        else {
            if($errors['password_test']=='false'){
                $test_user='hidden';
                $test_password='visible';
                $user=$errors['user_name'];
            }
        }
    }
}
//new_user
$errors_new=session('user_data_new');
$new_user_vis='hidden';
$new_email_vis='hidden';
$style_page='';
if(isset($errors_new)){
        $new_email = $errors_new['user_email'];
        $new_user = $errors_new['user_name'];
        if($errors_new['user_test'] == 'true'){
            $new_user_vis='visible';
        }else{
            $new_user_vis='hidden';
        }
        if($errors_new['email_test']=='true'){
            $new_email_vis='visible';
        }else{
            $new_email_vis='hidden';
        }
        if($errors_new['page']=='creat_new'){
            $style_page =' style="transform: translateY(-100%)"';
        }else{
            $style_page =' style="transform: translateY(-100%)"';
        }
}
//search
$errors_searsh=session('errors_searsh');
$user_search_test='hidden';
$user_answer_test='hidden';
$user_name_forget="";
$user_question_forget="";
$user_answer_forget="";
$style_page_forget='';
$user_info_search='';
$search_butt='';
if(isset($errors_searsh)){
    $user_search_test=$errors_searsh['user_found'];
    $user_name_forget=$errors_searsh['name'];
    $style_page_forget =' style="transform: rotateY(180deg) translateX(100%)"';
    $user_info_search="value=$user_name_forget";
    if($errors_searsh['test']){
        $user_answer_test='visible';
        $user_question_forget=$errors_searsh['questions'];
        $user_answer_forget=$errors_searsh['answer'];
        $user_info_search="value=$user_name_forget style='color: green' readonly";
        $search_butt="style='display: none;'";
    }
}
$errors_question=session('errors_question');
$main_answer=session('main_answer');
$check_answer_test='hidden';
$question_info_search='';
$check_butt='';
$password_zone="hidden";
if(isset($errors_question)){
    if($errors_question){
        $check_answer_test='hidden';
        $question_info_search="value=$main_answer style='color: green' readonly";
        $check_butt="style='display: none;'";
        $password_zone='visible';
    }
    else{
        $question_info_search="value=$main_answer";
        $check_answer_test='visible';
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
        'resources/scss/login/login.scss',
        'resources/js/login.js'
    ])
    <title>Document</title>
</head>
<body>
    {{-- loading _page --}}
    @include('layouts/pages/loading_page')
    {{--  --}}
    <div class="login">
        <img class="bg1 bgs" id="bg1" src="{{asset('icon\login\1.png')}}" alt="">
        <img class="left_tree bgs" id="left_tree" src="{{asset('icon\login\tree_left.png')}}" alt="">
        <img class="right_tree bgs" id="right_tree" src="{{asset('icon\login\tree_rigth.png')}}" alt="">
        <img class="bg2 bgs" id="bg2" src="{{asset('icon\login\2.png')}}" alt="">
        <img class="bg3 bgs" id="bg3" src="{{asset('icon\login\3.png')}}" alt="">
        <div class="bg4 bgs" id="bg4">
            <div class="sun" id="bg4_sun"></div>
        </div>
        <img class="bg5 bgs" id="bg5" src="{{asset('icon\login\5.jpg')}}" alt="">
        <div class="flip_card_tow_face" id="login" <?php echo $style_page_forget ?>>
            {{-- login form --}}
            <form action="user/login" method="get" class="flip_card_front">
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
                    <input type="text" required placeholder="username or email" name="user_name_email" maxlength="40" id="user" value=<?php if(isset($user)) echo $user;?>>
                    <p style= "color:red; visibility: 
                        <?php 
                            echo $test_user;
                        ?>
                    ;">user not found</p>
                </div>
                <div class="field">
                    <input type="password" required placeholder="password" name="password" maxlength="20" id="password">
                    {{-- <img src="login/icon login/2.png" alt="" id="login_panel_show"> --}}
                    <p style= "color:red; visibility: 
                        <?php 
                            echo $test_password;
                        ?>
                    ">password wrong</p>
                </div>
                <div id="forget">Forget Password?</div>
                <div class="buttons">
                    <input type="submit" name="login_submit" value="Login" id="login">
                </div>
                <div class="disc">
                    <p>Don't have an account?</p>
                    <div class="register" id='register'>Register</div>
                </div>
            </form>
            {{-- forget password --}}
            <div class="flip_card_back">
                <div id="return_panel">
                    <div id="return_user"></div>
                </div>
                <form  class="search_part" id="search-form">
                    <div class="field">
                        <input type="text" required placeholder="username" name="name_email" id="name_email" >
                        <p id="user_not_found">user note found</p>
                    </div>
                    <label for="search_butt" id="user_found_check">
                        <input type="submit" value="searsh" id="search_butt" name="search_butt">
                    </label>
                </form>
                <div class="answer_part" id="search_results">
                    <p id="question"></p>
                    <div class="field">
                        <div>
                            <input type="text" required placeholder="answer" name="answer_forget_pass" id="answer">
                            <p id="answer_wrang">answer wrong</p>
                        </div>
                        <label for="check">
                            <input type="button" id="check" name="check_answer">
                        </label>
                    </div>
                </div>
                <form action="{{ route('user.update_password') }}" method="get" class="password_part" id="password_part">
                    @csrf
                    <p>Change Password</p>
                    <input type="text" id="name_hidden" name="name_hidden" style="display:none">
                    <input type="password" placeholder="New Password" name='new_password_reset' id="new_password_reset" required minlength="8">
                    <input type="submit" value="save" id="new_password" name="check_new_password">
                </form>
            </div>
        </div>
    </div> 
    <div class="new" id="new"<?php echo $style_page; ?>>
        <div class="up" id="up"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
        <form action="user/login/store" method="get">
            @csrf
            <div class="create_info">
                <div class="fildes">
                    <p>create new</p>
                    <div class="inputs">
                        <div class="field">
                            <input type="text" required placeholder="username" name="user_name" maxlength="20" id="user" value=<?php if(isset($new_user)) echo $new_user;?>>
                            <p style= "color:red; visibility: 
                                <?php 
                                    echo $new_user_vis;
                                ?>
                            ;">username is already used</p>
                        </div>
                        <div class="field">
                            <input type="email" required placeholder="email" name="email" maxlength="40" id="user" value=<?php if(isset($new_email)) echo $new_email;?>>
                            <p style= "color:red; visibility: 
                                <?php 
                                    echo $new_email_vis;
                                ?>
                            ;">username is already used</p>
                        </div>
                        <input type="password" required placeholder="password" name="password" minlength="8" maxlength="20" id="user">
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
                            <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                            <option value="What is your favorite color?">What is your favorite color?</option>
                            <option value="What city were you born in?">What city were you born in?</option>
                            <option value="What is your favorite movie?">What is your favorite movie?</option>
                            <option value="What is your favorite food?">What is your favorite food?</option>
                            <option value="What is your favorite car?">What is your favorite car?</option>
                        </select>
                        <input type="text" required name="answer" placeholder="answer" class="input">
                    </div>
                    <div class="avatars">
                        <p>chose an avatar</p>
                        <div class="avatars_panel">
                            <label for="ava1" class="avatar_img ava1" id='avatar1'>
                                <input type="radio" value='avatar1' class='radio_avatar' id="ava1" name="radio_avatar" required>
                            </label>
                            <label for="ava2" class="avatar_img ava2" id='avatar2'>
                                <input type="radio" value='avatar2' class='radio_avatar' id="ava2" name="radio_avatar" required>
                            </label>
                            <label for="ava3" class="avatar_img ava3" id='avatar3'>
                                <input type="radio" value='avatar3' class='radio_avatar' id="ava3" name="radio_avatar" required>
                            </label>
                            <label for="ava4" class="avatar_img ava4" id='avatar4'>
                                <input type="radio" value='avatar4' class='radio_avatar' id="ava4" name="radio_avatar" required>
                            </label>
                            <label for="ava5" class="avatar_img ava5" id='avatar5'>
                                <input type="radio" value='avatar5' class='radio_avatar' id="ava5" name="radio_avatar" required>
                            </label>
                            <label for="ava6" class="avatar_img ava6" id='avatar6'>
                                <input type="radio" value='avatar6' class='radio_avatar' id="ava6" name="radio_avatar" required>
                            </label>
                            <label for="ava7" class="avatar_img ava7" id='avatar7'>
                                <input type="radio" value='avatar7' class='radio_avatar' id="ava7" name="radio_avatar" required>
                            </label>
                            <label for="ava8" class="avatar_img ava8" id='avatar8'>
                                <input type="radio" value='avatar8' class='radio_avatar' id="ava8" name="radio_avatar" required>
                            </label>
                            <label for="ava9" class="avatar_img ava9" id='avatar9'>
                                <input type="radio" value='avatar9' class='radio_avatar' id="ava9" name="radio_avatar" required>
                            </label>
                            <label for="ava10" class="avatar_img ava10" id='avatar10'>
                                <input type="radio" value='avatar10' class='radio_avatar' id="ava10" name="radio_avatar" required>
                            </label>
                            <label for="ava11" class="avatar_img ava11" id='avatar11'>
                                <input type="radio" value='avatar11' class='radio_avatar' id="ava11" name="radio_avatar" required>
                            </label>
                            <label for="ava12" class="avatar_img ava12" id='avatar12'>
                                <input type="radio" value='avatar12' class='radio_avatar' id="ava12" name="radio_avatar" required>
                            </label>
                            <label for="ava13" class="avatar_img ava13" id='avatar13'>
                                <input type="radio" value='avatar13' class='radio_avatar' id="ava13" name="radio_avatar" required>
                            </label>
                            <label for="ava14" class="avatar_img ava14" id='avatar14'>
                                <input type="radio" value='avatar14' class='radio_avatar' id="ava14" name="radio_avatar" required>
                            </label>
                            <label for="ava15" class="avatar_img ava15" id='avatar15'>
                                <input type="radio" value='avatar15' class='radio_avatar' id="ava15" name="radio_avatar" required>
                            </label>
                            <input type="text" id="selected_avatar_input" name="selected_avatar_input" value="tets">
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