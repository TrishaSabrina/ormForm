<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $data['categories']=Category::all();
      //dd($data);

    //   return view('back.category.index', $data); 

    //evabeo likha jay
    $categories=Category::all();
    return view('back.category.index', compact('categories')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.category.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'details' => 'required',
        ]);
        //dd($request->all());
        // $data['name'] = $request->name;
        // $data['details'] = $request->details;  //evabeo likha jay abar arekvabeo likha jay
        // Category::create($data);

        Category::create([          //abar evabeo likha jay

          'name'=> $request->name,
          'details'=>$request->details, 

        ]);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //option 1
        //$data['category']= $category;
        // return view('back.category.show', $data);


        //option 2
        //$data['category']= $category;
        // return view('back.category.show', 'category'=>$category);
         

        //option 3
        $data['category']= $category;
        return view('back.category.show', compact('category')); 


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //option 1
        //$data['category']= $category;
        // return view('back.category.edit', $data);


        //option 2
        $data['category']= $category;
        return view('back.category.edit', ['category'=>$category]);
         

        //option 3
        // $data['category']= $category;
        // return view('back.category.edit', compact('category')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        //option 1
        // $data['name'] = $request->name;
        // $data['details'] = $request->details;  //evabeo likha jay abar arekvabeo likha jay
        // $category->update($data);

        //option 2

        // Category::where('id', $category->id)->update([          //abar evabeo likha jay

        //     'name'=> $request->name,
        //     'details'=>$request->details, 
  
        //   ]);

        //option 3

        $category->update($request->all());
          return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');

    }
}
