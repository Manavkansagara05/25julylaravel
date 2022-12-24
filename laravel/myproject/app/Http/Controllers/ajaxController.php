<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;  

class ajaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Category $category)
    {
        return $category->get();
        // dd($allcategories);
        // return "somthing";

    }
    public function agemiddleware ()
    {
        dd("call middleware "); 
        // return $category->get();
        // dd($allcategories);
        // return "somthing";

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
    public function store(Request $request ,Category $category)
    {
        // dd($request->category_title);
        // dd($request->category_description);
        $category->category_title =$request->category_title;
        $category->category_description =$request->category_description;
        $data = $category->save();
        return $data ;

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
    public function edit( Request $request ,Category $category )
    {
        return $categorybyid = $category::find($request->id);
        // dd($request->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id ,Category $category)
    {
        $categorybyid = $category::find($request->id);

        $categorybyid->category_title =$request->category_title;
        $categorybyid->category_description =$request->category_description;
        $data = $categorybyid->save();
        return $data ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id ,Category $category)
    {
        $categorybyid = $category::find($id);
        $data = $categorybyid->delete();
        return $data ;
        
    }
}
