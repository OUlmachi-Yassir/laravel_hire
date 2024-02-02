<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\Category;
use Illuminate\Http\Request;

class servController extends Controller
{
    
    public function welcome()
    {
        $categories = Category::all();
        $services = service::all();
        return view('welcome', compact('categories'));
    }


    public function create()
    {
        $categories = Category::all();
        $services = service::all();
        return view('welcome', compact('categories','services'));
    }
    public function service(Request $request){
        $data = $request->validate([
            'title'=> 'required',
            'discreption'=>'required',
            'categoryId' =>'required |exists:categories,id',
            'contacte' =>'required'
        ]);

        $newService = service::create($data);
        return redirect(route('service'));
    }

    
}
