<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Flash;
use App\accounts;
use App\newsletter;
use App\Category;
use App\Subcategory;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
/**
* 
*/
class categoryController extends Controller
{
	
	public function addcategory()
	{
		return view('add-category');
	}

	public function addsubcategory()
	{
		$category = DB::table('categories')
		->where('parent_id','=', '0')
		->orderby('category_name','ASC')->get();
		$subcategory=DB::table('categories')
		->where('parent_id','<>', '0')
		->orderby('category_name','ASC')->get();
		return view('add-subcategory',compact('category','subcategory'));
	}
	public function viewcategory()
	{	
		$category=Category::all();
		return view('view-category',compact('category'));
	}
	public function editcategory($id)
	{
		$category=Category::find($id);
		return view('edit-category',compact('category'));
	}

	public function updatecategory($id)
	{
		if(Input::hasFile('category-image')){
			$rules= array(
				'category-name' =>'required|min:4' ,
				'category-slug' =>'required|min:4',
				'category-image' =>'required|image|mimes:jpeg,jpg,png',
				);

			$validator = Validator::make(Input::all(), $rules);

			if ($validator->fails()) {
				flash('Your Category update has been failed!!', 'danger');
			} else {
				//upload
				$image = Input::file('category-image');
				$filename  = time() . '.' . $image->getClientOriginalExtension();
				Input::file('category-image')->move(base_path() . '/public/category_image', $filename);
				// update
				$category =Category::find($id); 
				$category->category_name=Input::get('category-name');
				$category->category_slug=Input::get('category-slug');
				$category->category_image=$filename;
				// redirect
				if ($category->save()) {
					flash('Your Category update  is successful', 'success');
				}else{
					flash('Your Category update  has been failed!!', 'danger');
				}

			}
		}else{
			$rules= array(
				'category-name' =>'required|min:4' ,
				'category-slug' =>'required|min:4',
				);

			$validator = Validator::make(Input::all(), $rules);

			if ($validator->fails()) {
				flash('Your Category update has been failed!!', 'danger');
			} else {
			// store
				$category =Category::find($id); 
				$category->category_name=Input::get('category-name');
				$category->category_slug=Input::get('category-slug');
			// redirect
				if ($category->save()) {
					flash('Your Category update  is successful', 'success');
				}else{
					flash('Your Category update  has been failed!!', 'danger');
				}

			}
		}


		return back();
	}

	public function storecategory()
	{
		$rules= array(
			'category-name' =>'required|min:4' ,
			'category-slug' =>'required|min:4',
			'category-image' =>'required|image|mimes:jpeg,jpg,png',
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			flash('Your Category entry has been failed!!', 'danger');
		} else {
            //upload
			$image = Input::file('category-image');
			$filename  = time() . '.' . $image->getClientOriginalExtension();
			Input::file('category-image')->move(base_path() . '/public/category_image', $filename);
			// store
			$category = Category:: create([
				'category_name'=>Input::get('category-name'),
				'category_slug'=>Input::get('category-slug'),
				'parent_id'=>0,
				'category_image'=>$filename]);
			// redirect
			if ($category) {
				flash('Your Category entry  is successful', 'success');
			}else{
				flash('Your Category entry  has been failed!!', 'danger');
			}

		}

		return back();

	}

	public function storesubcategory()
	{
		$rules= array(
			'category-name' =>'required|min:4' ,
			'category-slug' =>'required|min:4',
			'parent-id' =>'required|integer',
			);

		$validator = Validator::make(Input::all(), $rules);


		if ($validator->fails()) {
			flash('Your Subcategory entry has been failed!!', 'danger');
		} else {
			// store
			$category = Category:: create([
				'parent_id'=>Input::get('parent-id'),
				'category_name'=>Input::get('category-name'),
				'category_slug'=>Input::get('category-slug')]);
			// redirect
			if ($category) {
				flash('Your Subcategory entry  is successful', 'success');
			}else{
				flash('Your Subcategory entry  has been failed!!', 'danger');
			}

		}

		return back();
	}

	public function deletecategory($id)
	{
		$category =Category::find($id)->delete();
		$subcategory=DB::table('categories')
		->where('parent_id','=', $id)->delete();
		flash('Your category delete  is successful', 'success');
		return back();
	}

	public function editCategoryRelation($id)
	{
		$selected_category=Category::find($id);
		$category = DB::table('categories')
		->where('parent_id','=', '0')
		->orderby('category_name','ASC')->get();
		$subcategory=DB::table('categories')
		->where('parent_id','<>', '0')
		->orderby('category_name','ASC')->get();
		return view('edit-category-relation',compact('category','subcategory','selected_category'));
	}
	
	public function updateCategoryRelation($id)
	{
		$selected_category=Category::find($id);
		$selected_category->parent_id=Input::get('parent-id');
		if($selected_category->save()){
			flash('Your category relation update  is successful', 'success');
		}else{
			flash('Your category relation update  has been failed!!', 'danger');
		}
		return back();

	}
}