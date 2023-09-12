<?php

namespace App\Http\Controllers; 
use App\Models\category;
use Illuminate\Support\Facades\DB;
use App\Models\product;


use App\Models\dashbord;
use Illuminate\Http\Request;
use App\Models\supplier;
use Cart;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    public function index(Request $request) {
        // $cats = category::get(); 
        // $prods = product::orderBy('created_at', 'desc')->limit(9)->get(); 
        // return view('homee', compact('cats', 'prods'));



        if (request('search')) {
            $cats=category::where('name',request('search'))->first();
            $supplier=supplier::where('name',request('search'))->first();
            if($cats){
                $prods = Product::
                where('categories_id', $cats->id)
                ->orderBy('created_at', 'desc')->limit(9)
                ->get();  
            }
            else if($supplier){
                $cats=supplier::where('id',$supplier->id)->first();
                $prods = Product::
                where('categories_id', $cats->id)
                ->orderBy('created_at', 'desc')->limit(9)
                ->get();  
            }
            
            else  {
                $prods = Product::
                where('name', 'LIKE', "%".request('search')."%")
                ->orderBy('created_at', 'desc')->limit(9)
                ->get();

            }

            
        } 
        else {
            $prods=Product::orderBy('created_at', 'desc')->limit(9)->get();
        }
        $cats=category::get();
        return view('homee',compact('prods','cats'));
        
    
    }
    // public function showcats($id) {
    //     $cats = category::get();
    //     return view('insert', compact('cats'));
    // }
    public function showw($id) {
        $cats = category::get(); 
        $prods = product::orderBy('created_at', 'desc')->get()->where('categories_id', $id); 
        return view('homee', compact('cats', 'prods'));
    }
    public function search(Request $request){
        

    }
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

        product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'image'=>$request->image,
            'count'=>$request->count,
            'made_in'=>$request->made_in,
            // 'offer'=>$request->offer,
            'categories_id'=>$request->categories_id,
        ]);
        return redirect()->route('dashbord');

        // return response('success store') ;

    }

    public function edit($id)
    {
        //$post=Post::findorFail($id);
        $prods=product::where('id',$id)->first();
        // if($post){
        //     return $post;
        // }
        // else{
        //     return response('not found');
        // }
        $cats = category::get(); 
        return view('update',compact('prods','cats'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prods=product::findorFail($id);
       
        // $post->title=$request->title;
        // $post->body=$request->body;
        // $post->save();
        $cats = category::get(); 
        //another way
        $prods->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'image'=>$request->image,
            'count'=>$request->count,
            'made_in'=>$request->made_in,
            // 'offer'=>$request->offer,
            'categories_id'=>$request->categories_id,

        ]);

        return redirect()->route('dashbord','cats');

        // return response('success update') ;
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy($id)
    {
        // Post::findorFail($id)->delete();
        product::destroy($id);
        return redirect()->route('dashbord');
        // return response('success delete') ;


    }
    public function move1() {
        $cats = category::get(); 
        return view('update',compact("cats"));
        // return view('update');
    }
    public function move2() {
        $cats = category::get(); 
        return view('insert',compact("cats"));
    }
    public function move3() {
        $user=Auth::user();
        $userID=$user->id;
        $cart = Cart::session($userID)->getContent();
        $prods = product::all(); 

        $gettotal = Cart::session($userID)->getTotal();

        return view('card', compact('cart','gettotal','prods'));
    }
    

    function addtocard($id)
    {
        // $user=User::first();
        // Auth::setUser($user);
    
    
        $user=Auth::user();
        $userID=$user->id;
       
        // $prods = product::findOrFail($id); 
        // $prods = product::all(); 
        // $summedPrice = Cart::get($id)->getPriceSum();
        $gettotal = Cart::session($userID)->getTotal();


        $prod=product::where('id',$id)->first();
        Cart::session($userID)->add(array(
            'id' => $prod->id,
            'name' => $prod->name,
            'price' => $prod->price,
            'count'=> $prod->count,
            'quantity' => 1,
            // 'sum' =>$summedPrice,
    //         'attributes' => array(),
    //        'associatedModel' => $prod
        ));
        return back();
        // $cart = Cart::session($userID)->getContent();
        // return $gettotal;
        // return view("card",compact('cart','gettotal'));

        // foreach($prods as $key=> $prod)
        // {
        //     $add_to_card=[]=[
        //         'id' => $prod,
        //         'name' => $prod->name,
        //         'price' => $prod->price,
        //         'quantity' => $key+1,
        //     //     'attributes' => array(),
        //     //    'associatedModel' => $prod,
        //     ]
            
        // }
    
            //     Cart::session($user->id)->add(array(
            //         'id' => $prod,
            //         'name' => $prod->name,
            //         'price' => $prod->price,
            //         'quantity' => $key+1,
            // //         'attributes' => array(),
            // //        'associatedModel' => $prod
            //     ));
        
        // $cart = Cart::session($user->id)->getContent();
    }
    function deleteone($id){
        $user=Auth::user();
        $userID=$user->id;

        Cart::session($userID)->update($id,[
            'quantity' => -1,
        ]
            
        );
        $gettotal = Cart::session($userID)->getTotal();

        $cart = Cart::session($userID)->getContent();
        return view("card",compact('cart','gettotal'));
    }
    function addone($id){
        $user=Auth::user();
        $userID=$user->id;
        Cart::session($userID)->update($id,[
            'quantity' => +1,
        ]
            
        );
        $gettotal = Cart::session($userID)->getTotal();

        $cart = Cart::session($userID)->getContent();
        return view("card",compact('cart','gettotal'));
    }
    function removeitem($id){
        $user=Auth::user();
        $userID=$user->id;
        Cart::session($userID)->remove($id);
        $cart = Cart::session($userID)->getContent();
        $gettotal = Cart::session($userID)->getTotal();

        return view("card",compact('cart','gettotal'));
    }
    
    // function updatecount(Request $request){
    //     $user=Auth::user();
    //     $userID=$user->id;
    //     Cart::session($user_id)->update($request->cart_id,[
    //         'quantity' => [
    //         'relative'=>false,
    //         'value'=>$request->quantity],
    //     ]);

    //     return back();
    // }


}
 