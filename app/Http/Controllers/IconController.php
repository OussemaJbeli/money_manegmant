<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Illuminate\Http\Request;
use App\Http\Requests\StoreIconRequest;
use App\Http\Requests\UpdateIconRequest;

class IconController extends Controller
{

    public function index()
    {
        //categoris
        $results_cat = icon::select('categories')->distinct()->get();
        $table_categoris = $results_cat->toArray();
        session(['categories'=>$table_categoris]);
        //item
        for($i=0;$i<count($table_categoris);$i++){
            $results_item = Icon::where('categories',$table_categoris[$i])->get();
            $tab_items = $results_item->toArray();
            session([$table_categoris[$i]['categories']=>$tab_items]);
        }
        return redirect()->route('home.index');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIconRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Icon $icon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Icon $icon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIconRequest $request, Icon $icon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Icon $icon)
    {
        //
    }
}
