<?php

namespace App\Http\Controllers;

use App\Cart;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client(['base_uri' => 'https://jsonblob.com/api/jsonBlob/']);
        $response = $client->request('GET', 'dc64aa7c-4510-11eb-a6f4-13f5a43f0e16');  
        $items = json_decode($response->getBody());
        return View('welcome')->with('items', $items->menu_items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_cart()
    {
        $id = $_POST['item_id'];
        $name = $_POST['item_name'];
        $cart = Cart::where('product_id', '=', $id)->first();

        // echo json_encode($cart->id);
        if($cart == null){
            $insert_cart = new Cart;
            $insert_cart->name=$name;
            $insert_cart->qty=1;
            $insert_cart->product_id=$id;
            $insert_cart->save();
        }else{
            $cart->qty=($cart->qty+1);
            $cart->save();
        }
        
        echo json_encode(array('status'=>true));
    }

    public function remove_cart()
    {
        $id = $_POST['item_id'];
        // $name = $_POST['item_name'];
        $cart = Cart::where('product_id', '=', $id)->first();
        if($cart == null){
            echo json_encode(array('status'=>false));
        }else{
            $cart->delete();
            echo json_encode(array('status'=>true));
        }
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
