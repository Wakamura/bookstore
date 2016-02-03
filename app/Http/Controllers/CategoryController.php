<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\BookCategory;
use App\Http\Requests\CheckCategoryRequest;

class CategoryController extends Controller
{
    public function index(){
    	$categories = BookCategory::all();
    	return view("pages.categories")->with("categories", $categories);
    }

    public function create(){
    	return view("pages.createCategory");
    }

	public function store(CheckCategoryRequest $request){

		BookCategory::create($request->all());
		return redirect('category');
	}

	public function edit($id){
		$categories = BookCategory::where('book_category_id',$id)->first();
		return view('pages.editCategory', compact('categories'));
	}
	public function update($id, Request $request){
		$categories = BookCategory::where('book_category_id',$id)->first();
		$categories->update($request->all());
		return redirect('category');

		// $categories = $request;
		// DB::table('book_categories')->where('book_category_id',$id)->update([
		// 		'book_category_name'=> $categories->book_category_name,
		// 		'book_category_description'=> $categories->book_category_description
		// 	]);
	}
}
