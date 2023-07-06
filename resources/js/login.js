/****************** */
let bg1 = document.getElementById('bg1');
let bg2 = document.getElementById('bg2');
let bg3 = document.getElementById('bg3');
let bg4 = document.getElementById('bg4');
let bg4_sun = document.getElementById('bg4_sun');
let bg5 = document.getElementById('bg5');
let right_tree = document.getElementById('right_tree');
let left_tree = document.getElementById('left_tree');
//
let login_panel = document.getElementById('login');
let new_login = document.getElementById('new');
//
let bottom = document.getElementById('register');
let up = document.getElementById('up');

bottom.addEventListener('click',down_fun);
function down_fun(){
    bg5.style.animation='bg_back 2s ease forwards';
    bg4.style.animation='bg_back 2s ease forwards';
    bg4_sun.style.animation='sun_set 1s ease forwards';
    bg3.style.animation='bg_back 2s ease forwards';
    bg2.style.animation='bg_midel 2s ease forwards';
    bg1.style.animation='bg_frant 2s ease forwards';
    // login_panel.style.animation='log_anime 2s ease forwards';
    new_login.style.animation='bg_frant 2s ease forwards';
    right_tree.style.animation='right_tree_anime 2s ease forwards';
    left_tree.style.animation='left_tree_anime 2s ease forwards';
}
up.addEventListener('click',up_fun);
function up_fun(){
    bg5.style.animation='all_up 2s ease forwards';
    bg4.style.animation='all_up 2s ease forwards';
    bg4_sun.style.animation='sun_rise 2s ease forwards';
    bg3.style.animation='all_up 2s ease forwards';
    bg2.style.animation='all_up 2s ease forwards';
    bg1.style.animation='all_up 2s ease forwards';
    // login_panel.style.animation='all_up 2s ease forwards';
    new_login.style.animation='all_up 2s ease forwards';
    right_tree.style.animation='right_tree_anime_back 2s ease forwards';
    left_tree.style.animation='left_tree_anime_back 2s ease forwards';
}
//avatar bear
let login = document.getElementById('login');
let user = document.getElementById('user');
let password = document.getElementById('password');
let mouth = document.getElementById('mouth');
let eyes = document.getElementById('eyes');
let left_hand = document.getElementById('left_hand');
let right_hand = document.getElementById('right_hand');
login.addEventListener('mouseenter',mouse_login_enter);
login.addEventListener('mouseleave',mouse_login_sort);
user.addEventListener('mouseenter',mouse_user_enter);
user.addEventListener('mouseleave',mouse_user_sort);
password.addEventListener('mouseenter',left_mouse_password_enter);
password.addEventListener('mouseleave',left_mouse_password_sort);
password.addEventListener('mouseenter',right_mouse_password_enter);
password.addEventListener('mouseleave',right_mouse_password_sort);
//mouth
function mouse_login_enter(){
    mouth.style.animation='mouse_login_enter .5s ease forwards';
}
function mouse_login_sort(){
    mouth.style.animation='mouse_login_sort .5s ease forwards';
}

function mouse_user_enter(){
    mouth.style.animation='mouse_user_enter .2s ease forwards';
}
function mouse_user_sort(){
    mouth.style.animation='mouse_user_sort .2s ease forwards';
}

//hands_up
function left_mouse_password_enter(){
    left_hand.style.animation='hand_up_left .5s ease forwards';
}
function left_mouse_password_sort(){
    left_hand.style.animation='hand_down_left 2s ease forwards';
}

function right_mouse_password_enter(){
    right_hand.style.animation='hand_up_right .5s ease forwards';
}
function right_mouse_password_sort(){
    right_hand.style.animation='hand_down_right 2s ease forwards';
}
//select avatar
let select_input = document.getElementById('selected_avatar_input');
let select_avatar = document.querySelectorAll('.radio_avatar');
select_avatar.forEach(function(avatar) {
    avatar.addEventListener('change', function() {
        select_input.setAttribute('value',this.value);
    });
});

/////////////////////////test no reload
//user_ found//
let user_not_found = document.getElementById('user_not_found');
let user_found_check = document.getElementById('user_found_check');
let name_email = document.getElementById('name_email');
let search_results = document.getElementById('search_results');
let question = document.getElementById('question');
let answer_wrang = document.getElementById('answer_wrang');
let answer = document.getElementById('answer');
let answer_var;
function user_found(questions){
    name_email.style.color='green';
    user_not_found.style.visibility='hidden';
    search_results.style.visibility='visible';
    question.textContent=questions;
    answer.value="";
    answer.style.color='#fff';
    password_part.style.visibility='hidden';
}
function user_notfound(){
    name_email.style.color='#fff';
    user_not_found.style.visibility='visible';
    search_results.style.visibility='hidden';
    question.textContent="";
    answer.value="";
    answer_wrang.style.visibility='hidden';
    password_part.style.visibility='hidden';
}

//form
const searchForm = document.getElementById('search-form');
const searchResults = document.getElementById('search-results');
                
searchForm.addEventListener('submit', (event) => {
    event.preventDefault();
        searchUsers();
});
function searchUsers() {
    const formData = new URLSearchParams(new FormData(searchForm));
    fetch(`/search?${formData}`).then(response => response.json())
    .then(users => {
        let html = '';       
        if (users.length === 0) {
            user_notfound();
        } else {
            users.forEach(user => {
                user_found(user.questions);
                answer_var=user.answer;
            });
        }
    })
    .catch(error => {
        console.error('Error fetching search results:', error);
    });
}
//test question
let password_part = document.getElementById('password_part');
let name_hidden = document.getElementById('name_hidden');
let check = document.getElementById('check');
check.addEventListener('click',answer_test)
function answer_test(){
    if(answer.value==answer_var){
        answer_true();
    }
    else{
        answer_false();
    }
}

function answer_false(){
    password_part.style.visibility='hidden';
    answer_wrang.style.visibility='visible';
    answer.style.color='#fff';
    name_hidden.value="";
}
function answer_true(){
    password_part.style.visibility='visible';
    answer_wrang.style.visibility='hidden';
    answer.style.color='green';
    name_hidden.value=name_email.value;
}
//forget pass
let forget = document.getElementById('forget');
forget.addEventListener('click',forget_function);
function forget_function(){
    login_panel.style.transform = 'rotateY(180deg) translateX(100%)';
}
let return_user = document.getElementById('return_user');
return_user.addEventListener('click',return_user_function);
function return_user_function(){
    login_panel.style.transform = 'rotateY(0deg) translateX(0%)';
    name_email.style.color='#fff';
    name_email.value="";
    search_results.style.visibility='hidden';
    question.textContent="";
    answer.value="";
    password_part.style.visibility='hidden';
    answer_wrang.style.visibility='hidden';
    answer.style.color='#fff';
}