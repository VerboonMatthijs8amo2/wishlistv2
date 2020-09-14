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

    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'storeurl' => 'required'
        ]);

    \App\Wishlist::create($data);
    return redirect('wishlist');
    }

    public function show(\App\Wishlist $itemid){

        return view('show',compact('itemid'));
    }
    public function edit(\App\Wishlist $itemid){
        return view('edit',compact('itemid'));
    }
    public function update(\App\Wishlist $itemid){
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

    public function delete(\App\Wishlist $itemid){
        $itemid->delete();
        return redirect('admin');
    }
}
