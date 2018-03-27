<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class SaveForLaterController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          //removing something from the cart
        Cart::instance('saveForLater')->remove($id);

        return back()->with('success_message' , 'Item was Successfully Remove!');
    }

    /**
     * Switch Items From save for later to cart
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCard($id)
    {
       $item = Cart::instance('saveForLater')->get($id);

        Cart::instance('saveForLater')->remove($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already Save for Later!');
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message' , 'Item has been move to Cart!');
    }
}
