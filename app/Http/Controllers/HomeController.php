<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\supplier;
use App\Models\User;
use Cart;
use App\Models\update;

use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\dashbord;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cats = category::get(); 
        $prods = product::orderBy('created_at', 'desc')->limit(9)->get(); 
        return view('homee', compact('cats', 'prods'));
    }
    public function show($id) {
        $cats = category::get(); 
        $prods = product::orderBy('created_at', 'desc')->get()->where('categories_id', $id)->limit(9); 
        return view('homee', compact('cats', 'prods'));
    }
    public function productstable()
    {
        //$posts=Post::get();   حل اخر
        $cats=category::all();
        $prods=product::all();
        $supps=supplier::all();
        return view('dashbord',compact('prods','cats','supps'));
    }
    
    

}
