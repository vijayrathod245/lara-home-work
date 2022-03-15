<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;

class BrandController extends Controller
{
    public function BrandView(){
        $brands = Brand::latest()->get();
        return view('backend.brand.brand-view', compact('brands'));
    }
    public function BrandAdd(){
        return view('backend.brand.brand-add');
    }
    public function BrandStore(Request $request){
        $request->validate([
            'brand_name_en' => 'required',
            'brand_name_hin' => 'required',
            'brand_slug_en' => 'required',
            'brand_slug_hin' => 'required',
            'brand_image' => 'required',
        ]
        /*, Custom Error Message
        [
            'brand_name_en.required' => 'The input not valid',
            'brand_name_hin.required' => 'The input not valid',
            'brand_slug_en.required' => 'The input not valid',
            'brand_slug_hin.required' => 'The input not valid',
            'brand_image.required' => 'The input not valid',
        ]*/
        );
        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(100,100)->save('upload/brand/'.$name_gen);
        $save_url = 'upload/brand/'.$name_gen;

        Brand::insert([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_hin' => $request->brand_name_hin,
            'brand_slug_en' => strtolower(str_replace(' ', '_',$request->brand_name_en)),
            'brand_slug_hin' => str_replace(' ', '_',$request->brand_name_hin),
            'brand_image' => $save_url,
        ]);
        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function BrandEdit($id){
        $brand = Brand::findOrFail($id);
        return view('backend.brand.brand-edit', compact('brand'));
    }
    public function BrandUpdate(Request $request){
        $brand_id = $request->id;
        $old_img = $request->old_image;
        if ($request->file('brand_image')) {
        unlink($old_img);
        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(100,100)->save('upload/brand/'.$name_gen);
        $save_url = 'upload/brand/'.$name_gen;

        Brand::findOrFail($brand_id)->update([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_hin' => $request->brand_name_hin,
            'brand_slug_en' => strtolower(str_replace(' ', '_',$request->brand_name_en)),
            'brand_slug_hin' => str_replace(' ', '_',$request->brand_name_hin),
            'brand_image' => $save_url,
        ]);
        $notification = array(
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('all.brand')->with($notification);
        }else{
        Brand::findOrFail($brand_id)->update([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_hin' => $request->brand_name_hin,
            'brand_slug_en' => strtolower(str_replace(' ', '_',$request->brand_name_en)),
            'brand_slug_hin' => str_replace(' ', '_',$request->brand_name_hin),
        ]);
        $notification = array(
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('all.brand')->with($notification);
        }
    }
    public function BrandDelete($id){
        $brand = Brand::findOrFail($id);
        $img = $brand->brand_image;
        unlink($img);
        Brand::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Brand Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
