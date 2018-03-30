<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Cart;
use App\OrderProduct;
use Mail;
use OrderPlaced;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ecommerce.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();
        try {
            $charge = Stripe::charges()->create([
                'amount' => $this->getNumbers()->get('newTotal') / 100,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);
        
            $order = $this->addToOrdersTable($request, null);
            //This part here works with the mail FOR SENDING EACHTIME an order is done
            Mail::send(new OrderPlaced($order));

            Cart::instance('default')->destroy();
            session()->forget('coupon');

            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your Payment have been successfully accepted');
        } catch(CardErrorException $e) {
            $this->addToOrdersTable($request, $e->getMessage());
            return back()->withErrors('Error!' . $e->getMessage());
        }
    }

    protected function addToOrdersTable($request, $error){
        //here insert into the order tables
            $order = Order::create([
                'user_id' => auth()->user() ? auth()->user()->id : null,
                'billing_email' => $request->email,
                'billing_name' => $request->name,
                'billing_address' => $request->address,
                'billing_city' => $request->city,
                'billing_province' => $request->province,
                'billing_postalcode' => $request->postalcode,
                'billing_name_on_card' => $request->name_on_card,
                'billing_discount' => $this->getNumbers()->get('discount'),
                'billing_discount_code' => $this->getNumbers()->get('code'),
                'billing_subtotal' => $this->getNumbers()->get('newSubtotal'),
                'billing_tax' => $this->getNumbers()->get('newTax'),
                'billing_total' => $this->getNumbers()->get('newTotal'),
                'error' => $error,
            ]);
        //Here at the pivot table that is order_product
            foreach (Cart::content() as $item)
             {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                ]);
            }
            
            return $order;
    }

    private function getNumbers()
    {
        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal = $tax;
        $newTotal = $newSubtotal * (1 + $tax);

        return collect([
            'tax' => $tax,
            'discount' => $discount,
            'code' => $code,
            'newSubtotal' => $newSubtotal,
            'newTax'   => $newTax,
            'newTotal' => $newTotal,
          ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
