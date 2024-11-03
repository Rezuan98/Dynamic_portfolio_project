<?php

namespace App\Http\Controllers;
use App\Models\UserInfo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\About;
use App\Models\Overview;
use App\Models\Skill;
use App\Models\Message;
use App\Models\Testimonial;
use App\Models\Summery;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Services;



class BackendController extends Controller
{
    public function Dashboard(){
       
        
        return view('backend.home.index');
    }

   public function addInfo(){

    return view('backend.features.add_info');
   }

   public function showInfo(){
    $user = UserInfo::all();
    
    return view('backend.features.show_info',compact('user'));
   }

   public function insertProfileInfo(Request  $request){
    
    $request->validate([
        'name' => 'required|string|max:255',
        'bannerImage' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'profileImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|',
    ]);
    $bannerImage = null;
        $profileImage = null;

        if ($request->hasFile('bannerImage')) {
            $bannerImage = $request->file('bannerImage')->store('banner_images', 'public');
        }


        if ($request->hasFile('profileImage')) {
            $profileImage = $request->file('profileImage')->store('profile_images', 'public');
        }

        $userinfo = new UserInfo();
        $userinfo->name = $request->name;
        $userinfo->banner_image = $bannerImage;
        $userinfo->profile_image = $profileImage;


        
        // Save the profile data to the database
        $userinfo->save();

        $notification = array(
            'message' => 'User Info Added Successfully',
             'alert-type' => 'success');
        return redirect()->route('show.info')->with($notification);


   }

   public function editProfileInfo($id){
   

    $userinfo = UserInfo::findOrfail($id);

    
   return view('backend.features.edit_profile_data',compact('userinfo'));


   }

   public function deleteProfileInfo($id){
                  
    UserInfo::where('id',$id)->delete();

    return response()->json(['success' => 'Item deleted successfully!']);
   }


   public function updateProfileInfo(Request $request)
   {
       $userId = $request->input('userid');
       
       // Fetch the existing user information from the database
       $userInfo = UserInfo::findOrFail($userId);
   
       // Initialize variables to store new image paths
       $bannerImage = $userInfo->banner_image;
       $profileImage = $userInfo->profile_image;
   
       // Handle banner image upload
       if ($request->hasFile('bannerImage')) {
           // Store the new banner image
           $bannerImage = $request->file('bannerImage')->store('banner_images', 'public');
   
           // Unlink (delete) the old banner image if it exists
           if ($userInfo->banner_image) {
               Storage::disk('public')->delete($userInfo->banner_image);
           }
       }
   
       // Handle profile image upload
       if ($request->hasFile('profileImage')) {
           // Store the new profile image
           $profileImage = $request->file('profileImage')->store('profile_images', 'public');
   
           // Unlink (delete) the old profile image if it exists
           if ($userInfo->profile_image) {
               Storage::disk('public')->delete($userInfo->profile_image);
           }
       }
   
       // Update user information with new image paths and other data
       $userInfo->update([
           'name' => $request->input('name'),
           'profile_image' => $profileImage,
           'banner_image' => $bannerImage,
       ]);
       $notification = array(
        'message' => 'User Info Updated Successfully',
         'alert-type' => 'success');
       return redirect()->route('show.info')->with($notification);

   }
// about section methodes start here
   public function InsertAbout(){
    

    return view('backend.features.insert_about');

   }


   public function insertAboutData(Request $request){

   
        // Validate the incoming request data
        $request->validate([
            'profession' => 'required|string|max:255',
            'birthday' => 'required|date',
            'age' => 'required|integer|min:1',
            'website' => 'nullable|url|max:255',
            'degree' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:abouts,email|max:255',
            'city' => 'required|string|max:255',
            'freelance' => 'required|in:available,not available',
        ]);

        // Create and save the new profile info
        $profileInfo = new About();
        $profileInfo->profession = $request->input('profession');
        $profileInfo->birthday = $request->input('birthday');
        $profileInfo->age = $request->input('age');
        $profileInfo->website = $request->input('website');
        $profileInfo->degree = $request->input('degree');
        $profileInfo->phone = $request->input('phone');
        $profileInfo->email = $request->input('email');
        $profileInfo->city = $request->input('city');
        $profileInfo->freelance = $request->input('freelance');

        $profileInfo->save();
        $notification = array(
            'message' => 'About Data Inseted Successfully',
             'alert-type' => 'success');
        // Redirect back with a success message
        return redirect()->route('show.about')->with($notification);
   }

   public function showAbout()
    {
        
        $aboutInfo = About::all();

        
        return view('backend.features.show_about_info', compact('aboutInfo'));
    }

    public function editAboutInfo($id)
{
    // Find the about record by ID
    $aboutInfo = About::findOrFail($id);

    // Pass the record to the edit view
    return view('backend.features.edit_about_info', compact('aboutInfo'));
}

public function updateAboutInfo(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'profession' => 'required|string|max:255',
        'birthday' => 'required|date',
        'age' => 'required|integer|min:1',
        'website' => 'nullable|url|max:255',
        'degree' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255|unique:abouts,email,' . $id, // Ignore unique rule for current record
        'city' => 'required|string|max:255',
        'freelance' => 'required|in:available,not available',
    ]);

    // Find the about record by ID
    $aboutInfo = About::findOrFail($id);

    // Update the record with new data
    $aboutInfo->profession = $request->input('profession');
    $aboutInfo->birthday = $request->input('birthday');
    $aboutInfo->age = $request->input('age');
    $aboutInfo->website = $request->input('website');
    $aboutInfo->degree = $request->input('degree');
    $aboutInfo->phone = $request->input('phone');
    $aboutInfo->email = $request->input('email');
    $aboutInfo->city = $request->input('city');
    $aboutInfo->freelance = $request->input('freelance');

    // Save the updated record
    $aboutInfo->save();
    $notification = array(
        'message' => 'About Updated Successfully',
         'alert-type' => 'success');
    // Redirect back with a success message
    return redirect()->route('show.about')->with($notification);
}


public function deleteAboutInfo($id){

 About::where('id',$id)->delete();
 
  return response()->json(['success' => 'Item deleted successfully!']);
}

// about section methodes end here



// overview section methodes start here


public function InsertOverview(){

    return view('backend.features.insert_overview');
}


public function ShowOverview(){
       
    $overviewdata = Overview::all();
    return view('backend.features.show_overview',compact('overviewdata'));
}



public function InsertOverviewData(Request $request){

    
    // Validate the incoming request data
    $request->validate([
        'emoji' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate emoji as image
        'number' => 'required|integer',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ]);
   
    // Handle the image file upload
    if ($request->hasFile('emoji')) {
        // Store the image in the 'public' directory
        $imogiPath = $request->file('emoji')->store('imogi_images', 'public');
    } else {
        $imogiPath = null;
    }

    

    // Create a new Overview record and assign the data
    $overview = new Overview();
    $overview->imogi = $imogiPath; // Store the image path in the database
    $overview->number = $request->input('number');
    $overview->title = $request->input('title');
    $overview->desc = $request->input('description');
     

    // Save the new Overview record in the database
    $overview->save();
    $notification = array(
        'message' => 'Data Inserted Successfully',
         'alert-type' => 'success');
    // Redirect back with a success message
    return redirect()->route('show.overview')->with($notification);
}

public function editOverviewInfo($id){


  $data = Overview::findOrfail($id);



    return view('backend.features.edit_overview_data',compact('data'));

}

public function updateOverviewInfo(Request $request,$id){


   
 // Validate the incoming request data




if ($request->hasFile('emoji')) {
    $imogiPath = $request->file('emoji')->store('imogi_images', 'public');
} else {
    $imogiPath = null;
}


Overview::where('id',$id)->update([
         
    'imogi'=> $imogiPath,
    'number' => $request-> number,
    'title' => $request->title,
    'desc' => $request->description,
]);
$notification = array(
    'message' => 'Data Updated Successfully',
     'alert-type' => 'success');


return redirect()->route('show.overview')->with($notification);

}

public function deleteOverviewInfo($id){

    Overview::where('id',$id)->delete();
    $notification = array(
        'message' => 'Data Deleted Successfully',
         'alert-type' => 'success');

    return redirect()->route('show.overview')->with($notification);

}








// skill methode start
public function addSkill(){

    return view('backend.features.add_skill');
}

public function insertSkill(Request $request){

  DB::table('skills')->insert([

    'skill_name' => $request->skill_name,
    'skill_capacity' => $request->skill_capacity,


  ]);

  $notification = array(
    'message' => 'Data Inserted Successfully',
     'alert-type' => 'success');

  return redirect()->back()->with($notification);
 
}

public function showSkill(){

   $skills = Skill::all();

   return view('backend.features.show_skill', compact('skills'));
}

public function editSkill($id){

$skills = Skill::findOrfail($id);

return view('backend.features.edit_skill',compact('skills'));
}

public function updateSkill(Request $request,$id){
    
    Skill::where('id',$id)->update([
                
        'skill_name' => $request->skill_name,
        'skill_capacity' => $request->skill_capacity,

    ]);

    return redirect()->route('show.skill');

}

public function deleteSkill($id){


Skill::where('id',$id)->delete();
$notification = array(
    'message' => 'Data Deleted Successfully',
     'alert-type' => 'success');

return redirect()->back()->with($notification);


}

// the skill methode is end here

public function showUnreadMessage(){

    $message_count = Message::where('is_read','0')->count();
    $message = Message::where('is_read','0')->get();

    Message::where('is_read','0')->update([

        'is_read' => '1',

    ]);

    return view('backend.features.show_unread_message',compact('message','message_count'));
    
}

public function showAllMessage(){

    $all_message = Message::all();

    return view('backend.features.show_all_message',compact('all_message'));
}



// delete Read Message methode start
public function deleteReadMessage($id){
   
    Message::where('id',$id)->delete();

    return response()->json(['success' => 'Item deleted successfully!']);
}
// delete Read Message methode end

public function deleteUnreadMessage($id){

    Message::where('id',$id)->delete();

    return response()->json(['success' => 'Item deleted successfully!']);
}





// testimonial methodes start here
public function testimonial(){

    return view('backend.features.testimonial');
}
public function insertTestimonial(Request $request){

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('testimonial_images', 'public');
    } else {
        $imagePath = null;
    }
    Testimonial::insert([

        'name' => $request->name,
        'title' => $request->title,
        'quote' => $request->quote,
        'image' => $imagePath,
    ]);

    $notification = array(
        'message' => 'Data Inserted Successfully',
         'alert-type' => 'success');
    return redirect()->route('show.testimonial')->with($notification);


}


public function showTestimonial(){


    $testimonial =  Testimonial::all();

    return view('backend.features.show_testimonial',compact('testimonial'));
}

public function editTestimonial($id){

        $edit_testimonial = Testimonial::where('id',$id)->first();


        return view('backend.features.edit_testimonial',compact('edit_testimonial'));
}

public function updateTestimonial(Request $request, $id){

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('testimonial_images', 'public');
    } else {
        $imagePath = null;
    }
    Testimonial::where('id',$id)->update([

        'name' => $request->name,
        'title' => $request->title,
        'quote' => $request->quote,
        'image' => $imagePath,
    ]);

    $notification = array(
        'message' => 'Data Inserted Successfully',
         'alert-type' => 'success');
    return redirect()->route('show.testimonial')->with($notification);


}

public function deletetestimonial($id){

    Testimonial::where('id',$id)->delete();

    return response()->json(['success' => 'Item deleted successfully!']);

}

// testimonial methodes ends here

// summery methodes start here

public function addSummery(){

    return view('backend.features.add_summery');
}

public function insertSummery(Request $request){


    Summery::insert([

        'name' => $request->name,
        'description' => $request->description,
        'address'=> $request->address,
        'phone'  => $request->phone,
        'email' => $request->email,
    ]);

    return redirect()->back();


}
public function showSummery(){

    $summery = Summery::all();

    return view('backend.features.show_summery',compact('summery'));
}

public function editSummery($id){

    $edit_summery = Summery::where('id',$id)->first();
       
    return view('backend.features.edit_summery',compact('edit_summery'));


}

public function updateSummery(Request $request,$id){
      
    Summery::where('id',$id)->update([

        'name' => $request->name,
        'description' => $request->description,
        'address'=> $request->address,
        'phone'  => $request->phone,
        'email' => $request->email,
    ]);

    return redirect()->route('show.summery');



}

// summery methodes end here


// education routes start here
public function addEducation(){


    return view('backend.features.add_education');

}
public function insertEducation(Request $request){

    Education::insert([
       
        'subject' => $request->subject,
        'session' => $request->session,
        'institute_name' => $request->institute,
        'description' => $request->description,
        ]);
        $notification = array(
            'message' => 'Data Inserted Successfully',
             'alert-type' => 'success');
        return redirect()->route('show.education')->with($notification);
    
}
public function showEducation(){

   $education = Education::all();

   return view('backend.features.show_education',compact('education'));
    
}

public function editEducation($id){

    $edit_education = Education::where('id',$id)->first();
 
    return view('backend.features.edit_education',compact('edit_education'));
     
 }

 public function updateEducation(Request $request,$id){
    Education::where('id',$id)->update([
       
        'subject' => $request->subject,
        'session' => $request->session,
        'institute_name' => $request->institute,
        'description' => $request->description,
        ]);
        $notification = array(
            'message' => 'Data updated Successfully',
             'alert-type' => 'success');
        return redirect()->route('show.education')->with($notification);

 }

// education route ends here



// experience methodes start here 

public function addExperience(){

    return view('backend.features.add_experience');
}
public function insertExperience(Request $request){

    Experience::insert([
       
        'job_title' => $request->job_title,
        'job_time_range' => $request->job_time_range,
        'office_address' => $request->office_address,
        'prominant_tasks' => $request->tasks,
        ]);
        $notification = array(
            'message' => 'Data Inserted Successfully',
             'alert-type' => 'success');
        return redirect()->route('show.education')->with($notification);
    

    return redirect()->route('show.experience');
}


public function showExperience(){

   $experience = Experience::all();

   return view('backend.features.show_experience',compact('experience'));
}

public function editExperience($id){
          
$edit_experience = Experience::where('id',$id)->first();


return view('backend.features.edit_experience',compact('edit_experience'));

}


public function updateExperience(Request $request,$id){
                 
  
    Experience::where('id',$id)->update([
       
        'job_title' => $request->job_title,
        'job_time_range' => $request->job_time_range,
        'office_address' => $request->office_address,
        'prominant_tasks' => $request->tasks,
        ]);
        $notification = array(
            'message' => 'Data updated Successfully',
             'alert-type' => 'success');
        return redirect()->route('show.experience')->with($notification);
    

    


}

public function deleteExperience($id){

    Experience::where('id',$id)->delete();
    
    return response()->json(['success' => 'Item deleted successfully!']);
}
// experience methodes ends here










// services methode start here

public function addServices(){

    return view('backend.features.add_services');
}

public function insertServices(Request $request){

    Services::insert([

        'service_title' => $request->service_title,
        'service_description' => $request->service_description

    ]);


    $notification = array(
        'message' => 'Data Inserted Successfully',
         'alert-type' => 'success');
    return redirect()->route('show.services')->with($notification);

}


public function showServices(){

    $services = Services::all();

    return view('backend.features.show_services',compact('services'));
}


public function editServices(Request $request,$id){

$edit_services = Services::where('id',$id)->first();

return view('backend.features.edit_services',compact('edit_services'));

}



public function updateServices(Request $request,$id){

    Services::where('id',$id)->update([

        'service_title' => $request->service_title,
        'service_description' => $request->service_description

    ]); 

    $notification = array(
        'message' => 'Data updated Successfully',
         'alert-type' => 'success');
    return redirect()->route('show.services')->with($notification);

}

public function deleteServices($id){

 

    Services::where('id',$id)->delete();

    return response()->json(['success' => 'Item deleted successfully!']);
}

// services methode end  here



}