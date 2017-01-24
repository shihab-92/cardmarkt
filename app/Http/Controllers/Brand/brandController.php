<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Flash;
use App\accounts;
use App\newsletter;
use App\Brands;
use App\Brand_category;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Category;
/**
* 
*/
class brandController extends Controller
{
	public function addbrand()
	{
		$category=Category::all();
		return view('add-brand',compact('category'));
	}

	public function storebrand(Request $request)
	{
		$rules= array(
			'brand-name' =>'required|min:4' ,
			'brand-slug' =>'required|min:4',
			'brand-image' =>'required|image|mimes:jpeg,jpg,png',
			'brand-category-subcategory' =>'required',
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			flash('Your Brand entry has been failed!!', 'danger');
		} else {

            //upload
			$image = Input::file('brand-image');
			$filename  = time() . '.' . $image->getClientOriginalExtension();
			Input::file('brand-image')->move(base_path() . '/public/brand_image', $filename);
			// store
			$brands = Brands:: create([
				'brand_name'=>Input::get('brand-name'),
				'brand_slug'=>Input::get('brand-slug'),
				'brand_image'=>$filename]);
			$categories=Input::get('brand-category-subcategory');
			foreach ($categories as $key => $category) {
				$brand_category = Brand_category:: create([
					'brand_id'=>$brands->id,
					'category_id'=>$category]);
			}

			//redirect
			if ($brands && $brand_category) {
				flash('Your Brand entry  is successful', 'success');
			}else{
				flash('Your Brand entry  has been failed!!', 'danger');
			}

		}

		return back();
	}

	public function viewbrand()
	{
		$brands=Brands::all();
		$brand_categories=Brand_category::all();
		$count=count($brand_categories);
		return view('view-brands',compact('brands','brand_categories','count'));
	}

	public function updatebrand($id)
	{
		$brands=Brands::find($id);
		$category=Category::all();
		$brand_categories=Brand_category::where('brand_id','=', $id)
		->orderby('category_id','ASC')->get();
		return view('update-brands',compact('brands','brand_categories','category'));
	}



	public function refreshbrand($id, Request $request)
	{
		$brands=Brands::find($id);
		$brand_categories=Brand_category::where('brand_id','=', $id)
		->orderby('category_id','ASC')->delete();

		$rules= array(
			'brand-name' =>'required|min:4' ,
			'brand-slug' =>'required|min:4',
			'brand-image' =>'image|mimes:jpeg,jpg,png',
			'brand-category-subcategory' =>'required',
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			flash('Your Brand update has been failed!!', 'danger');
		} else {
			if(Input::hasFile('brand-image')){
            	//upload
				$image = Input::file('brand-image');
				$filename  = time() . '.' . $image->getClientOriginalExtension();
				Input::file('brand-image')->move(base_path() . '/public/brand_image', $filename);
			}else{
				$filename=$brands->brand_image;
			}
			// update
			$brands->brand_name=Input::get('brand-name');
			$brands->brand_slug=Input::get('brand-slug');
			$brands->brand_image=$filename;
			$brands->save();
			$categories=Input::get('brand-category-subcategory');

			foreach ($categories as $key => $category) {
				$brand_category = Brand_category:: create([
					'brand_id'=>$brands->id,
					'category_id'=>$category]);
			}

			//redirect
			if ($brand_category) {
				flash('Your Brand update  is successful', 'success');
			}else{
				flash('Your Brand update  has been failed!!', 'danger');
			}

		}

		return back();
	}

	public function deletebrand($id)
	{
		$brands=Brands::find($id)->delete();
		$brand_categories=Brand_category::where('brand_id','=', $id)
		->orderby('category_id','ASC')->delete();

		return back();
	}
}