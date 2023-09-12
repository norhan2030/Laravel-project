<?php

namespace App\Http\Controllers;
use App\Models\order;
use Illuminate\Http\Request;
use Cart;
use App\Models\product;

use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // DB::table('products')->insert([
        //     'name'=>$request->name,
        //     'price'=>$request->price,
        //     'image'=>$request->image,
        //     'count'=>$request->count,
        //     'made_in'=>$request->made_in,
        //  'offer'=>$request->offer,
        //  'categories_id'=>$request->categories_id,
        // ]);
    
        //first way

        // $prods=new product();
        // $prods->name=$request->name;
        // $prods->price=$request->price;
        // $prods->image=$request->image;
        // $prods->count=$request->count;
        // $prods->made_in=$request->made_in;
        // $prods->offer=$request->offer;
        // $prods->categories_id=$request->categories_id;


        // $prods->save();
        // return response('success store') ;



        //second way------> fillable الطريقة دي لازم معاها 
        $user=Auth::user()->id;
       
        order::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'cart_id'=>$request->cart_id,
        ]);
        $items = Cart::session($user)->getContent();
        foreach($items as $item){
            $product=product::find($item->id);
            $product->update([
                'count'=>$product->count -$item->quantity,
            ]);
        }
        Cart::session($user)->clear();
        // toastr()->success('thank for you');
        return back();
        // return view('payment',compact('user'));
        //return redirect()->route('home');

        // return response('success store') ;
    }
    public function move4() {
        $orders = order::get(); 
        $user=Auth::user()->id;
        return view('payment',compact('orders','user'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
