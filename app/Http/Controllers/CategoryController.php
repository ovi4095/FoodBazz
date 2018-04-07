<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }

    public function saveCategoryInfo(Request $request){
        //return $request->all();

        //$category= new Category();
        //$category->category_nsme = $request->category_name;
        //$category->category_description = $request->category_description;
        //$category->publication_status = $request->publication_status;
        //$category->save();

        DB::table('categories')->insert([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'publication_status' => $request->publication_status
        ]);

        return redirect('/category/add-category')->with('message','Category info added successfully');
    }

    public function manageCategoryInfo(){


        $categories = Category::all();
        return view('admin.category.manage-category', ['categories'=>$categories]);
    }

    public function unpublishedCategoryInfo($data){
        $categoryById = Category::find($data);
        $categoryById->publication_status = 0;
        $categoryById->save();
        return redirect('/category/manage-category')->with('message','Category info unpublished successfully');
    }
    public function publishedCategoryInfo($data){
        $categoryById = Category::find($data);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('/category/manage-category')->with('message','Category info published successfully');
    }

    public function editCategoryInfo($id){
        $category = Category::find($id);

        return view('admin.category.edit-category',['category'=>$category]);
    }

    public function updateCategoryInfo(Request $request){

        $categoryById = Category::find($request->category_id);

        $categoryById->category_name= $request->category_name;
        $categoryById->category_description= $request->category_description;
        $categoryById->publication_status= $request->publication_status;
        $categoryById->save();
        return redirect('/category/manage-category')->with('message','Category info Updated successfully');

    }
    public function deleteCategoryInfo($id){
        $categoryById = Category::find($id);
        $categoryById->delete();
        return redirect('/category/manage-category')->with('message','Category info Deleted  successfully');
    }












}
