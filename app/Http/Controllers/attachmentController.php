<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use App\Models\Branding;
use App\Models\Product;
class attachmentController extends Controller
{ 

    // app methodes start here
    public function addApps(){

        return view('backend.attachment.add_apps');
    }
    public function insertApps(Request $request){

        $imagePath = '';
        if ($request->hasFile('app_image')) {
            
            $imagePath = $request->file('app_image')->store('uploads/apps', 'public');
        }
    
        
        App::create([
            'app_name' => $request->app_name,
            'app_image' => $imagePath, 
        ]);

        return view('backend.attachment.show_apps');
    }

    public function editApps(Request $request,$id){

       $edit_apps = App::findOrfail($id);

             return view('backend.attachment.edit_apps',compact('edit_apps'));
    }

    public function showApps(){

       $show_apps = App::all();

       return view('backend.attachment.show_apps',compact('show_apps'));
    }

    public function updateApps(Request $request,$id){

        $imagePath = '';
        if ($request->hasFile('app_image')) {
            
            $imagePath = $request->file('app_image')->store('uploads/apps', 'public');
        }

        App::where('id',$id)->update([

            'app_name' => $request->app_name,
            'app_image' => $imagePath, 

        ]);
         return redirect()->route('show.apps');
        

    }

    // app methode end here 


    // product methode start here

    public function addProducts(){

        return view('backend.attachment.add_products');
    }
    public function insertProducts(Request $request){
        $imagePath = '';
        if ($request->hasFile('branding_image')) {
            
            $imagePath = $request->file('branding_image')->store('uploads/products', 'public');
        }
        Product::insert([
           
            'product_name' => $request->product_name,
            'product_image' =>$imagePath ,
        ]);

        return redirect()->route('show.products');
    }

    public function showProducts(){

       $products = Product::all();

       return view('backend.attachment.show_products',compact('products'));
    }

    public function updateApp(Request $request,$id){

        App::where('id',$id)->update([



        ]);

    }

    // branding methode end here
    
    // branding methode start here
    public function addBranding(){

        return view('backend.attachment.add_branding');
    }
    public function insertBranding(Request $request){
        $imagePath = '';
        if ($request->hasFile('branding_image')) {
            
            $imagePath = $request->file('branding_image')->store('uploads/branding', 'public');
        }
        Branding::insert([
           
            'branding_name' => $request->branding_name,
            'branding_image' => $imagePath ,
        ]);

        return redirect()->route('show.branding');
    }

    public function editBranding(){
     
        $edit_branding = Branding::findOrfail($id);


        return view('backend.attachment.edit_branding','edit_branding');

    }

    public function showBranding(){

       $branding = Branding::all();

       return view('backend.attachment.show_branding',compact('branding'));
    }

    public function updateBranding(Request $request,$id){

        App::where('id',$id)->update([



        ]);

    }
    // product methode end here
}
