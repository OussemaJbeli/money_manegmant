//imput bd
let db_theme_img = document.getElementById('db_theme_img');
let db_theme_actions_color = document.getElementById('db_theme_actions_color');
let db_theme_color_searsh_bar = document.getElementById('db_theme_color_searsh_bar');
let db_theme_color_bg = document.getElementById('db_theme_color_bg');
let db_theme_color_popup = document.getElementById('db_theme_color_popup');

let color_side_barre_hover = document.getElementById('color_side_barre_hover');
let title_search_bar = document.getElementById('title_search_bar');
let title_popup = document.getElementById('title_popup');
let color_item_popup = document.getElementById('color_item_popup');
let color_side_popup = document.getElementById('color_side_popup');
//submite + restor
let filter_submit = document.getElementById('filter_submit');
let restor_defult = document.getElementById('restor_defult');
/*****************open close */
let theme_frame = document.getElementById('theme_popup');
let theme_button = document.getElementById('theme_changer_but');
//open close
theme_button.addEventListener('change',open_theme);
function open_theme(){
    if (this.checked) {
        theme_frame.style.display='flex';
    }
    else {
        theme_frame.style.display='none';
    }
}
//test_theme
let form_color = document.getElementById('form_color');
let theme_name = document.getElementById('selected_theme');
///////////////////////////////
//////custom 
//buttons

let option_button = document.getElementsByClassName('actif_option');
let option_button_id= document.getElementById(option_button[0].getAttribute('id'));
const color_button = document.querySelectorAll('.color_button');
color_button.forEach(radioButton => {
    radioButton.addEventListener('change', () => {
        const selectedColor = radioButton.value;
        switch (selectedColor){
            case 'yellow':color_button_changer('#ffc502');break;
            case 'green':color_button_changer('#15b500');break;
            case 'blue':color_button_changer('#1a72e6');break;
            case 'red':color_button_changer('#e62e1a');break;
            case 'purple':color_button_changer('#9d11de');break;
        }
    });
});
function color_button_changer(color){
    db_theme_actions_color.setAttribute('value',color);
    document.documentElement.style.setProperty('--side_color_cards',color);
    option_button_id.style.backgroundColor=color;
    filter_submit.style.display='block';
    restor_defult.style.display='block';
}
//////custom 
//side_bar
const color_side_bar = document.querySelectorAll('.pictur_shoser_pict');
color_side_bar.forEach(radioButton => {
    radioButton.addEventListener('change', () => {
        const selectedColor = radioButton.value;
        switch (selectedColor){
            case 'image_1':color_side_bar_changer('img_1.jpg','#c0aa9351');break;
            case 'image_2':color_side_bar_changer('img_2.jpg','#bd93c051');break;
            case 'image_3':color_side_bar_changer('img_3.jpg','#c0aa9351');break;
            case 'image_4':color_side_bar_changer('img_4.jpg','#9593c051');break;
            case 'image_5':color_side_bar_changer('img_5.jpg','#9593c051');break;
            case 'image_6':color_side_bar_changer('img_6.jpg','#9593c051');break;
            case 'image_7':color_side_bar_changer('img_7.jpg','#93c0bc51');break;
            case 'image_8':color_side_bar_changer('img_8.jpg','#9393c051');break;
            case 'image_9':color_side_bar_changer('img_9.png','#9393c051');break;
        }
    });
});
function color_side_bar_changer(color,color_side){
    db_theme_img.setAttribute('value','url(../../../../../public/icon/sid_bar/wallpapers/'+color+')');
    document.documentElement.style.setProperty('--color_side_barre','url(../../../../../public/icon/sid_bar/wallpapers/'+color+')');
    document.documentElement.style.setProperty('--color_side_barre_hover',color_side);
    color_side_barre_hover.setAttribute('value',color_side);
    filter_submit.style.display='block';
    restor_defult.style.display='block';
}
//nav_bar
const color_nav_bar = document.querySelectorAll('.color_nav_bar');
color_nav_bar.forEach(radioButton => {
    radioButton.addEventListener('change', () => {
        const selectedColor = radioButton.value;
        switch (selectedColor){
            case 'ligth':color_nav_bar_changer('#fff','#000');break;
            case 'dark':color_nav_bar_changer('#2a3347','#fff');break;
            case 'yellow':color_nav_bar_changer('#5e5f31','#fff');break;
            case 'green':color_nav_bar_changer('#365f31','#fff');break;
            case 'blue':color_nav_bar_changer('#315f5f','#fff');break;
            case 'red':color_nav_bar_changer('#5f3131','#fff');break;
            case 'purple':color_nav_bar_changer('#5f315b','#fff');break;
        }
    });
});
function color_nav_bar_changer(color,font_color){
    db_theme_color_searsh_bar.setAttribute('value',color);
    document.documentElement.style.setProperty('--color_search_barre',color);
    document.documentElement.style.setProperty('--title_search_bar',font_color);
    title_search_bar.setAttribute('value',font_color);
    filter_submit.style.display='block';
    restor_defult.style.display='block';
}
//color_bg
const color_bg = document.querySelectorAll('.color_bg');
color_bg.forEach(radioButton => {
    radioButton.addEventListener('change', () => {
        const selectedColor = radioButton.value;
        switch (selectedColor){
            case 'ligth':color_bg_changer('#eeeeee');break;
            case 'dark':color_bg_changer('#1a2035');break;
        }
    });
});
function color_bg_changer(color){
    db_theme_color_bg.setAttribute('value',color);
    document.documentElement.style.setProperty('--color_frame',color);
    filter_submit.style.display='block';
    restor_defult.style.display='block';
}
//color_bg
const color_popup = document.querySelectorAll('.color_popup');
color_popup.forEach(radioButton => {
    radioButton.addEventListener('change', () => {
        const selectedColor = radioButton.value;
        switch (selectedColor){
            case 'ligth':color_popup_changer('#eeeeee','#000','#fff','#e1e0e0');break;
            case 'dark':color_popup_changer('#1a2035','#fff','#2a3347','#3c455a');break;
        }
    });
});
function color_popup_changer(color,font_color,color_item,color_side){
    db_theme_color_popup.setAttribute('value',color);
    document.documentElement.style.setProperty('--color_popup',color);
    document.documentElement.style.setProperty('--title_popup',font_color);
    document.documentElement.style.setProperty('--color_item_popup',color_item);
    document.documentElement.style.setProperty('--color_side_popup',color_side);
    title_popup.setAttribute('value',font_color);
    color_item_popup.setAttribute('value',color_item);
    color_side_popup.setAttribute('value',color_side);
    filter_submit.style.display='block';
    restor_defult.style.display='block';
}
///////////////////////////////

const themeColorFromDB = '#FF0000';
document.documentElement.style.setProperty('--test', themeColorFromDB);

