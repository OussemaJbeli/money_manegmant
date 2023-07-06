<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Themes;
use Illuminate\Http\Request;
use App\Http\Requests\StoreIconRequest;
use App\Http\Requests\UpdateIconRequest;
use Psy\Output\Theme;
use Carbon\Carbon;

class ThemesController extends Controller
{

    public function index()
    {
        $name_test = Themes::where('id_user', session('user_name'))
            ->first();
        $table = $name_test->toArray();
        session([
            'side_color_cards'=>$table['side_color_cards'],
            'color_side_barre'=>$table['color_side_barre'],
            'color_side_barre_hover'=>$table['color_side_barre_hover'],
            'title_search_bar'=>$table['title_search_bar'],
            'color_search_barre'=>$table['color_search_barre'],
            'color_frame'=>$table['color_frame'],
            'color_popup'=>$table['color_popup'],
            'title_popup'=>$table['title_popup'],
            'color_item_popup'=>$table['color_item_popup'],
            'color_side_popup'=>$table['color_side_popup'],
        ]);
        return redirect()->route('icon.index');
    }
    public function update(Request $request)
    {
        $db_theme_img = $request->input('db_theme_img');
        $db_theme_actions_color = $request->input('db_theme_actions_color');
        $db_theme_color_searsh_bar = $request->input('db_theme_color_searsh_bar');
        $db_theme_color_bg = $request->input('db_theme_color_bg');
        $db_theme_color_popup = $request->input('db_theme_color_popup');
        $color_side_barre_hover = $request->input('color_side_barre_hover');
        $title_search_bar = $request->input('title_search_bar');
        $title_popup = $request->input('title_popup');
        $color_item_popup = $request->input('color_item_popup');
        $color_side_popup = $request->input('color_side_popup');

        //
        $theme = Themes::where('id_user', session('user_name'))
            ->first();
        $theme->color_side_barre = $db_theme_img;
        $theme->side_color_cards = $db_theme_actions_color;
        $theme->color_search_barre = $db_theme_color_searsh_bar;
        $theme->color_frame = $db_theme_color_bg;
        $theme->color_popup = $db_theme_color_popup;
        $theme->color_side_barre_hover = $color_side_barre_hover;
        $theme->title_search_bar = $title_search_bar;
        $theme->title_popup = $title_popup;
        $theme->color_item_popup = $color_item_popup;
        $theme->color_side_popup = $color_side_popup;
        $theme->save(); 

        return redirect()->route('themes.index');
    }
    public function store(Request $request)
    {
        $id_user = session('user_name');
        $theme = new Themes();
        $theme->id_user = $id_user;
        $theme->side_color_cards = '#ffc502';
        $theme->color_side_barre= 'url(../../../../../public/icon/sid_bar/wallpapers/img_1.jpg)';
        $theme->color_search_barre = '#2a3347';
        $theme->color_frame = '#1a2035';
        $theme->color_popup = '#1a2035';
        $theme->color_side_barre_hover = '#9393c051';
        $theme->title_search_bar = '#fff';
        $theme->title_popup = '#fff';
        $theme->color_item_popup = '#2a3347';
        $theme->color_side_popup = '#3c455a';
        $theme->save(); 

        return redirect()->route('themes.index');
    }
}