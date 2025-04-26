<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testmonial;
use Illuminate\Support\Str;

class TestmonialController extends Controller
{
 
    public function index()
    {
        $category=Testmonial::all();
        return view('backend.testmonial.index')->with('categories',$category);
    }

    public function create()
    {
        // $parent_cats=Testmonial::where('is_parent',1)->orderBy('title','ASC')->get();
        return view('backend.testmonial.create');
    }

    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'string|required',
            'description'=>'string|nullable',
            'image'=>'nullable',
        ]);
        $data= $request->all();
        $status=Testmonial::create($data);
        if($status){
            request()->session()->flash('success','Testmonial Us successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('about.index');


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category=Testmonial::findOrFail($id);
        return view('backend.testmonial.edit')->with('category',$category);
    }

    
    public function update(Request $request, $id)
    {
        $category=Testmonial::findOrFail($id);
        $this->validate($request,[
             'name'=>'string|required',
            'description'=>'string|nullable',
            'image'=>'nullable',
        ]);
        $data= $request->all();
        $status=$category->fill($data)->save();
        if($status){
            request()->session()->flash('success','Testmonial successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('about.index');
    }

    public function destroy($id)
    {
        $category = About::findOrFail($id);
        $status   = $category->delete();

        if($status){
            request()->session()->flash('success','Testmonial successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting Testmonial');
        }
        return redirect()->route('about.index');
    }

}
