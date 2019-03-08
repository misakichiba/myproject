<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function add()
    {
        return view('admin.restaurant');
    }

    public function create(Request $request)
    {
        $this->validate($request, Restaurant::$rules);
        $restaurants = new Restaurant;
        $form = $request->all();

        if (isset($form['image'])) {
            $path =$request->file('image')->store('public/image');
            $restaurants->image_path = basename($path);
        } else {
            $restaurants->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $restaurants->fill($form);
        $restaurants->save();

        return redirect('admin/contribution');
    }

    public function index(Request $request)
    {
	$cond_restaurant_name = $request->cond_restaurant_name;
	if ($cond_restaurant_name != '') {
        	$restaurants = Restaurant::where('restaurant_name', $cond_restaurant_name)->get();
	} else {
         	$restaurants = Restaurant::all();
	}

        return view('admin.index', ['restaurants' => $restaurants, 'cond_restaurant_name' => $cond_restaurant_name]);       
   
    }

    public function diner(Request $request)
    {
	
        $restaurants = Restaurant::find($request->id);
	
	return view('admin.diner', ['restaurants' => $restaurants]);
    }

}

