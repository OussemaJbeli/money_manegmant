//rload chek options
const rootStyles1 = getComputedStyle(document.documentElement);
const primaryColor = rootStyles1.getPropertyValue('--side_color_cards');
let path_page = document.getElementById('path_page');
let page_name=path_page.getAttribute('class');
let option_butt = document.getElementsByClassName('option');
for (var i = 0; i < option_butt.length; i++) {
    let option_name=option_butt[i].getAttribute('id');
    if(option_name==page_name){
        option_butt[i].style.backgroundColor=primaryColor;
        option_butt[i].style.color='#fff';
        option_butt[i].setAttribute('class','option actif_option')
    }
}
//minimise
let side_barre = document.getElementById('side_barre');
let frame_app = document.getElementById('frame_app');
let minimise = document.getElementById('minimise');
//component
let logo_profile = document.getElementById('logo_profile');
let name_profile = document.getElementById('name_profile');
let option = document.getElementsByClassName('option');
let fa_solid = document.getElementsByClassName('fa-solid');
let title_option = document.getElementsByClassName('title_option');
let add_button = document.getElementById('add_button');
//style
frame_app.style.transition="0.4s ease";
side_barre.style.transition="0.4s ease";
side_barre.addEventListener('mouseenter',mouse_enter);
side_barre.addEventListener('mouseleave',mouse_leave);
let test_close = false;
function mouse_leave(){
    if(test_close){
        //frames
        side_barre.style.width="80px";
        frame_app.style.width="100%";
        //component
        name_profile.style.visibility="hidden";
        for (var i = 1; i <= option.length; i++) {
            fa_solid[i].style.fontSize="30px";
        }
        for (var i = 0; i < option.length; i++) {
            title_option[i].style.display="none";
        }
        add_button.style.width="50px";
        add_button.style.height="50px";
        add_button.style.fontSize="40px";
        logo_profile.style.width="60px";
        logo_profile.style.height="60px";
        logo_profile.style.fontSize="30px";
    }
}
function mouse_enter(){
    if(test_close){
        //frames
        side_barre.style.width="280px";
        frame_app.style.width="100%";
        //component
        name_profile.style.visibility="visible";
        for (var i = 1; i <= option.length; i++) {
            fa_solid[i].style.fontSize="20px";
        }
        for (var i = 0; i < option.length; i++) {
            title_option[i].style.display="block";
        }
        add_button.style.width="100px";
        add_button.style.height="100px";
        add_button.style.fontSize="70px";
        logo_profile.style.width="100px";
        logo_profile.style.height="100px";
        logo_profile.style.fontSize="70px";
    }
}

minimise.addEventListener('click',minimise_fun);
function minimise_fun(){
    if (minimise.checked) {
        test_close = true;
        //frames
        side_barre.style.width="80px";
        frame_app.style.width="100%";
        //component
        name_profile.style.visibility="hidden";
        for (var i = 1; i <= option.length; i++) {
            fa_solid[i].style.fontSize="30px";
        }
        for (var i = 0; i < option.length; i++) {
            title_option[i].style.display="none";
        }
        add_button.style.width="50px";
        add_button.style.height="50px";
        add_button.style.fontSize="40px";
        logo_profile.style.width="60px";
        logo_profile.style.height="60px";
        logo_profile.style.fontSize="30px";
    }
    else {
        test_close = false;
        //frames
        side_barre.style.width="280px";
        frame_app.style.width="100%";
        //component
        name_profile.style.visibility="visible";
        for (var i = 1; i <= option.length; i++) {
            fa_solid[i].style.fontSize="20px";
        }
        for (var i = 0; i < option.length; i++) {
            title_option[i].style.display="block";
        }
        add_button.style.width="100px";
        add_button.style.height="100px";
        add_button.style.fontSize="70px";
        logo_profile.style.width="100px";
        logo_profile.style.height="100px";
        logo_profile.style.fontSize="70px";
    }
}
