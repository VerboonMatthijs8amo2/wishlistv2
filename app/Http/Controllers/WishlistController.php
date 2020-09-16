<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index (){
        $wishlists = \App\Wishlist::all();
        return view('wishlist', compact('wishlists'));
    }
    public function create (){
        return view('newitem');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'storeurl' => 'required',
            'image'  =>  'required|image|max:2048',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name'       =>   $request->name,
            'description' =>   $request->description,
            'price'        =>   $request->price,
            'storeurl'        =>   $request->storeurl,
            'image'            =>   $new_name
        );

        \App\Wishlist::create($form_data);

        return redirect('wishlist');
    }

    public function show(Wishlist $itemid){

        return view('show',compact('itemid'));
    }
    public function edit(Wishlist $itemid){
        return view('edit',compact('itemid'));
    }
    public function update(Wishlist $itemid){
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'storeurl' => 'required'
        ]);

        $itemid->update($data);
        return redirect('admin');
    }
    public function index1 (){
        $wishlists = \App\Wishlist::all();
        return view('admin', compact('wishlists'));
    }

    public function delete(Wishlist $itemid){
        $itemid->delete();
        return redirect('admin');
    }
}
