<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    //
    
    public function Service(){
         $services = Service::all();
         return view('pages.services',compact('services'));
     }

      // all service function 

    public function AllService(){
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }

    // Add service function 

    public function Addservice(Request $request){
        $validated = $request->validate([
        'service_name' => 'required|unique:services|min:4',
        'service_text' => 'required',
        'service_image' => 'required|mimes:png,jpg,jpeg,svg',
        'service_icon' => 'required',
    ]);
    $service_image = $request->file('service_image');
    $name_gen = hexdec(uniqid());
    $img_ext = strtolower($service_image->getClientOriginalExtension());
    $upload_location = 'image/service/';
    $image_name = $name_gen.'.'.$img_ext;
    $last_img = $upload_location.$image_name;
    $service_image->move($upload_location,$image_name);



    Service::insert([
        'service_name' =>$request->service_name,
        'service_text' => $request->service_text,
        'service_image' => $last_img,
        'service_icon' => $request->service_icon,
        'created_at' => Carbon::now()
    ]);
$notification = array(
                        'message' => 'service inserted successfully',
                        'alert-type' => 'success'
                    );
    return Redirect()->back()->with($notification);

    }

    //edit service 

    public function Edit($id){
        $services = Service::find($id);
        return view('admin.service.edit',compact('services'));
    }

    // update service function

    public function Update(Request $request , $id){
        $validated = $request->validate([
        'service_name' => 'required|min:4',
        'service_text' => 'required',
        
    ]);
    $service_image = $request->file('service_image');
    $old_image = $request->old_image;
    if($service_image){


    $name_gen = hexdec(uniqid());
    $img_ext = strtolower($service_image->getClientOriginalExtension());
    $upload_location = 'image/service/';
    $image_name = $name_gen.'.'.$img_ext;
    $last_img = $upload_location.$image_name;
    $service_image->move($upload_location,$image_name);
    unlink($old_image);

    Service::find($id)->update([
        
        'service_image' => $last_img,
        'updated_at' => Carbon::now()
    ]);

    return Redirect()->route('all.service')->with('success','service image image updated  successfully');

    }else{
Service::find($id)->update([
        'service_name' =>$request->service_name,
        'service_text' =>$request->service_text,
        'service_icon' => $request->service_icon,
        'updated_at' => Carbon::now()
    ]);

    return Redirect()->route('all.service')->with('success','service name updated successfully');
    }

    }
}
