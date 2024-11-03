<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

use App\Models\Product;

class PortfolioController extends Controller
{
    public function addProduct(){
         
        return view('backend.features.image_upload');}
    

    public function insertProduct(Request $request)
    {
        
            // Validation for files
           
            // Retrieve multiple files
            $images = $request->file('product_image');
            if($images)
                foreach ($images as $img) {
                    // Save each image to 'public/product_images' folder
                    $imagePath = $img->store('/product_images', 'public');
                    
                    // Store each image path in database
                    Product::create([
                        'product_image' => $imagePath,
                    ]);
            }
    
            return redirect()->back();
    
    }
    
public function editProduct($id){

 $product= Product::findOrfail($id);

 
 return view('backend.features.edit_product',compact('product'));
}
public function updateProduct(Request $request,$id){

    

    $images = $request->file('product_image');
    if($images)
        foreach ($images as $img) {
            // Save each image to 'public/product_images' folder
            $imagePath = $img->store('/product_images', 'public');
            
            // Store each image path in database
            Product::where('id',$id)->update([
                'product_image' => $imagePath,
            ]);
            toastr()->success('Data has been saved successfully!');
    }
    $notification = array(
        'message' => 'Data inserted Successfully',
         'alert-type' => 'success');

    return redirect()->route('add.product')->with($notification);

}

    }
