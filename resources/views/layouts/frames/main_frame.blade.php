<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="icon" href="{{ asset('icon/logo.png') }}"> 
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- font awsom --}}
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    @vite([
    'resources\scss\layouts\frames\main_frame.scss',
    'resources/js/frames/main_frame.js'])
    {{-- root --}}
    <?php
    initial_theme();
        function initial_theme(){
            echo '<style>
                    :root{
                        --side_color_cards :'.session('side_color_cards').';
                        --color_side_barre:'.session('color_side_barre').';
                        --color_side_barre_hover: '.session('color_side_barre_hover').';
                        --color_search_barre: '.session('color_search_barre').';
                        --color_popup: '.session('color_popup').';
                        --color_frame: '.session('color_frame').';
                        --title_search_bar :'.session('title_search_bar').';
                        --title_popup:'.session('title_popup').';
                        --color_item_popup: '.session('color_item_popup').';
                        --color_side_popup: '.session('color_side_popup').';
                    }
                </style>
            ';
        }
    ?>
    <title></title>
</head>
<body id="body">
    {{-- popup add --}}
    @extends('layouts.frames.add_item.add_item')
    {{-- side_barre --}}
    <div class="side_barre" id="side_barre">
        <div class="back_block_transparent"></div>
        <div class="side_color_picture" id="side_color_picture"></div>
        <div class="user_info">
            <div class="logo" id="logo_profile"><i class="fa-solid fa-user-secret"></i></div>
            <p class="name" id="name_profile"><?php echo session('user_name')?></p>
        </div>
        <div class="options">
            <a  href="{{ route('home.page')}}" class="option" id="dashboard">
                <i class="fa-solid fa-chart-line"></i>
                <p class="title_option" id="title_option">Dashboard</p>
            </a>
            <a  href="{{ route('profile.page')}}" class="option" id="profile">
                <i class="fa-solid fa-user"></i>
                <p class="title_option" id="title_option">User Profile</p>
            </a>
            <a  href="{{ route('ticket.page')}}" class="option" id="ticket">
                <i class="fa-solid fa-ticket"></i>
                <p class="title_option" id="title_option">Tickets</p>
            </a>
            <a  href="{{ route('items.page')}}" class="option" id="items">
                <i class="fa-solid fa-sitemap"></i>
                <p class="title_option" id="title_option">Items</p>
            </a>
            <a  href="{{ route('carrency.page')}}" class="option" id="carrency">
                <i class="fa-solid fa-coins"></i>
                <p class="title_option" id="title_option">Carrency</p>
            </a>
            <a  href="{{ route('region.page')}}" class="option" id="region">
                <i class="fa-solid fa-globe"></i>
                <p class="title_option" id="title_option">Region</p>
            </a>
            <i></i>
        </div>
        <div class="add_item">
            <div class="add_button" id="add_button">
                <i class="fa-solid fa-plus"></i>
            </div>
        </div>
    </div>
    {{-- frame --}}
    <div class="frame_app" id="frame_app">
        <div class="searsh_barre">
            <div class="minimise_side_barre" id="minimise_side_barre">
                <label for="minimise"><i class="fa-solid fa-bars"></i></label>
                <input class="minimise" type="checkbox" id="minimise" aria-checked="true">
                <div class="logo_page">
                    <i class="fa-solid fa-{{$logo_page}}"></i>
                </div>
                <div class="path_page">
                    <p class={{ $path_page }} id="path_page">/ {{ $path_page }}</p>
                </div>
            </div>
            <div class="logo_profile">
            </div>
        </div>
        <div class="container_app">
            @section('container')
                <div class="theme">
                    {{-- frame --}}
                    <div class="theme_popup" id="theme_popup">
                        <form action='Themes/update' method="get" id="form_color">
                            @csrf
                            <div class="pictur_shoser">
                                <p>images</p>
                                <div>
                                    <label class="picture_theme image1" for="image_1">
                                        <input id="image_1" class="pictur_shoser_pict" type="radio" name="pictur_shoser" value="image_1">
                                    </label>
                                    <label class="picture_theme image2" for="image_2">
                                        <input id="image_2" class="pictur_shoser_pict" type="radio" name="pictur_shoser" value="image_2">
                                    </label>
                                    <label class="picture_theme image3" for="image_3">
                                        <input id="image_3" class="pictur_shoser_pict" type="radio" name="pictur_shoser" value="image_3">
                                    </label>
                                    <label class="picture_theme image4" for="image_4">
                                        <input id="image_4" class="pictur_shoser_pict" type="radio" name="pictur_shoser" value="image_4">
                                    </label>
                                    <label class="picture_theme image5" for="image_5">
                                        <input id="image_5" class="pictur_shoser_pict" type="radio" name="pictur_shoser" value="image_5">
                                    </label>
                                    <label class="picture_theme image6" for="image_6">
                                        <input id="image_6" class="pictur_shoser_pict" type="radio" name="pictur_shoser" value="image_6">
                                    </label>
                                    <label class="picture_theme image7" for="image_7">
                                        <input id="image_7" class="pictur_shoser_pict" type="radio" name="pictur_shoser" value="image_7">
                                    </label>
                                    <label class="picture_theme image8" for="image_8">
                                        <input id="image_8" class="pictur_shoser_pict" type="radio" name="pictur_shoser" value="image_8">
                                    </label>
                                    <label class="picture_theme image9" for="image_9">
                                        <input id="image_9" class="pictur_shoser_pict" type="radio" name="pictur_shoser" value="image_9">
                                    </label>
                                </div>
                            </div>
                            <div class="theme_shoser">
                                <p class="title_custom">filters</p>
                                    <div class="custem_theme_option">
                                        <div class="actions_color theme_custom">
                                            <p>actions_color</p>
                                            <div>
                                                <label class="theme_option_color" id="actions_color_yellow">
                                                    <input id="theme_option_color_yellow" class="color_button color_radion" type="radio" name="color_button" value="yellow">
                                                </label>
                                                <label class="theme_option_color"id="actions_color_green">
                                                    <input id="theme_option_color_green" class="color_button color_radion" type="radio" name="color_button" value="green">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="actions_color_blue">
                                                    <input id="theme_option_color_blue" class="color_button color_radion" type="radio" name="color_button" value="blue">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="actions_color_red">
                                                    <input id="theme_option_color_red" class="color_button color_radion" type="radio" name="color_button" value="red">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="actions_color_purple">
                                                    <input id="theme_option_color_purple" class="color_button color_radion" type="radio" name="color_button" value="purple">
                                                    
                                                </label>
                                            </div>
                                        </div>
                                        <div class="actions_color theme_custom">
                                            <p>color_searsh_bar</p>
                                            <div>
                                                <label class="theme_option_color" id="color_searsh_barligthe">
                                                    <input id="ligth" class="color_nav_bar color_radion" type="radio" name="color_nav_bar" value="ligth">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="color_searsh_bardark">
                                                    <input id="dark" class="color_nav_bar color_radion" type="radio" name="color_nav_bar" value="dark">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="color_searsh_baryellow">
                                                    <input id="yellow" class="color_nav_bar color_radion" type="radio" name="color_nav_bar" value="yellow">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="color_searsh_bargreen">
                                                    <input id="green" class="color_nav_bar color_radion" type="radio" name="color_nav_bar" value="green">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="color_searsh_barblue">
                                                    <input id="blue" class="color_nav_bar color_radion" type="radio" name="color_nav_bar" value="blue">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="color_searsh_barred">
                                                    <input id="red" class="color_nav_bar color_radion" type="radio" name="color_nav_bar" value="red">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="color_searsh_barpurple">
                                                    <input id="purple" class="color_nav_bar color_radion" type="radio" name="color_nav_bar" value="purple">
                                                    
                                                </label>
                                            </div>
                                        </div>
                                        <div class="actions_color theme_custom">
                                            <p>color_bg</p>
                                            <div>
                                                <label class="theme_option_color" id="color_bg_ligth">
                                                    <input id="ligth" class="color_bg color_radion" type="radio" name="color_bg" value="ligth">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="color_bg_dark">
                                                    <input id="dark" class="color_bg color_radion" type="radio" name="color_bg" value="dark">
                                                    
                                                </label>
                                            </div>
                                        </div>
                                        <div class="actions_color theme_custom">
                                            <p>color_popup</p>
                                            <div>
                                                <label class="theme_option_color" id="color_popup_ligth">
                                                    <input id="ligth" class="color_popup color_radion" type="radio" name="color_popup" value="ligth">
                                                    
                                                </label>
                                                <label class="theme_option_color" id="color_popup_dark">
                                                    <input id="dark" class="color_popup color_radion" type="radio" name="color_popup" value="dark">
                                                    
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="inputs">
                                <input type="text" name="db_theme_img" id="db_theme_img" value=<?php echo session('color_side_barre') ?>>
                                <input type="text" name="db_theme_actions_color" id="db_theme_actions_color" value=<?php echo session('side_color_cards') ?>>
                                <input type="text" name="db_theme_color_searsh_bar" id="db_theme_color_searsh_bar" value=<?php echo session('color_search_barre') ?> >
                                <input type="text" name="db_theme_color_bg" id="db_theme_color_bg" value=<?php echo session('color_frame') ?> >
                                <input type="text" name="db_theme_color_popup" id="db_theme_color_popup" value=<?php echo session('color_popup') ?> >
                                <input type="text" name="color_side_barre_hover" id="color_side_barre_hover" value=<?php echo session('color_side_barre_hover') ?>>
                                <input type="text" name="title_search_bar" id="title_search_bar" value=<?php echo session('title_search_bar') ?>>
                                <input type="text" name="title_popup" id="title_popup" value=<?php echo session('title_popup') ?> >
                                <input type="text" name="color_item_popup" id="color_item_popup" value=<?php echo session('color_item_popup') ?> >
                                <input type="text" name="color_side_popup" id="color_side_popup" value=<?php echo session('color_side_popup') ?> >
                            </div>
                            <label for="theme_submit" class="submit" id="filter_submit">
                                <input type="submit" name='theme_submit' id="theme_submit">
                            </label>
                            <a href="{{route('home.index')}}" class="restor_defult" id="restor_defult"></a>
                        </form>
                    </div>
                    {{-- //button --}}
                    <div ></div>
                    <label for="theme_changer_but" class="theme_changer_button">
                        <i class="fa-solid fa-gear"></i>
                        <input class="theme_changer" id="theme_changer_but" type="checkbox">
                    </label>
                </div>
            @show
        </div>
    </div>
</body>
</html>
