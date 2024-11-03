<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use App\Models\About;
use App\Models\Book;
use App\Models\Branding;
use App\Models\Skill;
use App\Models\Overview;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Summery;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Services;
use App\Models\App;

class HomeController extends Controller
{
    public function Home(){

      $userinfo = UserInfo::first();
      $about = About::first();
      $book = Book::all();
      $branding = Branding::all();
      $products = Product::all();
      $apps = App::all();
      $overview = Overview::all();
      $skill = Skill::all();
      $testimonial = Testimonial::all();
      $summery = Summery::first();
      $education = Education::all();
      $experiance = Experience::all();
      $services = Services::all();


        return view('frontend.home.master',compact('userinfo','about','book','branding','products',
        'overview','skill','testimonial','summery',
        'education','education','experiance','services','apps'));
    }


    
}
