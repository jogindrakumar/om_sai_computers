<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
class ProductCategoryController extends Controller
{
    //
       //
    public function CategoryView(){
        $category = ProductCategory::latest()->get();
        return view('admin.category.category_view',compact('category'));
    }

     public function CategoryStore(Request $request){
        $request->validate([
            'category_name_en' => 'required',
        ]);

        ProductCategory::insert([
            'category_name_en' => $request->category_name_en,
            'category_slug_en' => strtolower(str_replace(' ','-',$request->category_name_en)),
            
        ]);
         $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->back()->with($notification);
    }

      public function CategoryEdit($id){

        // $Categorys = Category::find($id);
        $category = ProductCategory::findOrFail($id);
        return view('backend.category.category_edit',compact('category'));

    }

    public function CategoryUpdate(Request $request){

        $category_id = $request->id;
          ProductCategory::FindOrFail($category_id)->update([
                        'category_name_en' => $request->category_name_en,
                        'category_name_hin' => $request->category_name_hin,
                        'category_slug_en' => strtolower(str_replace(' ','-',$request->category_name_en)),
                        'category_slug_hin' => strtolower(str_replace(' ','-',$request->category_name_hin)),
                        'category_icon' => $request->category_icon,
                        
                    ]);
                    $notification = array(
                        'message' => 'Category Updated Successfully',
                        'alert-type' => 'success'
                            );
                    return redirect()->route('all.category')->with($notification);

        

    }

                public function CategoryDelete($id){

                ProductCategory::FindOrFail($id)->delete();

                    $notification = array(
                                    'message' => 'Category Delete Successfully',
                                    'alert-type' => 'info'
                                        );
                                return redirect()->back()->with($notification);
                }
}
