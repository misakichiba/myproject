<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;

class SearchController extends Controller
{
    public function search()
    {
        return view('admin.index');
    }


    public function create(Request $request)
    {
        $this->validate($request, Restaurant::$rules);
        $restaurant = new Restaurant;
        $form = $request->all();

        if (isset($form['image'])) {
            $path =$request->file('image')->store('public/image');
            $restaurant->image_path = basename($path);
        } else {
            $restaurant->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $restaurant->fill($form);
        $restaurant->save();

        return redirect('admin/contribution');
    }


    public function index(Request $request)
  {
          
          $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // ???????????????
          $posts = Restaurant::where('restaurant_name', $cond_title)->get();
      } else {
          // ??????????????????
          $posts = Resutaurant::all();
      }
      return view('admin.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

}

