<?php

namespace App\Http\Controllers;
use App\Models\supplier;
use App\Models\category;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
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

        supplier::create([
            'name'=>$request->name,
            'categories_id'=>$request->categories_id,
        ]);
        return redirect()->route('dashbord');

        // return response('success store') ;

    }

    public function edit($id)
    {
        //$post=Post::findorFail($id);
        $supps=supplier::where('id',$id)->first();
        // if($post){
        //     return $post;
        // }
        // else{
        //     return response('not found');
        // }
        $cats = category::get(); 

        return view('updatesupp',compact('supps','cats'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $supps=supplier::findorFail($id);
       
        // $post->title=$request->title;
        // $post->body=$request->body;
        // $post->save();

        //another way
        $cats = category::get(); 
        
        $supps->update([
            'name'=>$request->name,
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
        supplier::destroy($id);
        return redirect()->route('dashbord');
        // return response('success delete') ;


    }
    public function move1() {
        $cats = category::get(); 
        return view('updatesupp',compact('cats'));
    }
    public function move2() {
        $cats = category::get(); 

        return view('insertsupp',compact('cats'));
    }
}
