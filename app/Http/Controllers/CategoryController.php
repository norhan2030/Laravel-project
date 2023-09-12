<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    // public function categoriestable()
    // {
    //     //$posts=Post::get();   حل اخر
    //     $cats=category::all();
    //     return view('dashbord',compact('cats'));
    // }
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

        category::create([
            'name'=>$request->name,
        ]);
        return redirect()->route('dashbord');

        // return response('success store') ;

    }

    public function edit($id)
    {
        //$post=Post::findorFail($id);
        $cats=category::where('id',$id)->first();
        // if($post){
        //     return $post;
        // }
        // else{
        //     return response('not found');
        // }
        return view('updatecat',compact('cats'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cats=category::findorFail($id);
       
        // $post->title=$request->title;
        // $post->body=$request->body;
        // $post->save();

        //another way
        $cats->update([
            'name'=>$request->name,

        ]);

        return redirect()->route('dashbord');

        // return response('success update') ;
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy($id)
    {
        // Post::findorFail($id)->delete();
        category::destroy($id);
        return redirect()->route('dashbord');
        // return response('success delete') ;


    }
    public function move1() {
        return view('updatecat');
    }
    public function move2() {
        return view('insertcat');
    }
}
