<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\helpers\UtilityHelpers;
use App\NewsletterSubscription;
use App\Video;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view('welcome');
    }
    //
    public function speakers(){
        return view('speakers');
    }

    public function watchVideo($video_id){
        $video = Video::findOrFail($video_id);
        return view('watch-video',compact('video'));
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    public function subscribeToNewsletter(Request $request){
        $this->validate($request,[
           'email' => 'required|email',
        ]);

        $subscriber = NewsletterSubscription::where('email',$request->email)->first();
        if ($subscriber){
            return response(UtilityHelpers::jsonReport('Duplicate','You are already Subscribed. No further action needed','warning'));
        }

        $subscriber = new NewsletterSubscription();
        $subscriber->email = $request->email;
        $subscriber->name = $request->has('name') ? $request->name : '' ;
        $subscriber->phone = $request->has('phone') ? $request->phone : '' ;
        $subscriber->save();
        return response(UtilityHelpers::jsonReport('Newsletter',"Thank you for subscribing to our newsletter",'success'),201);
    }

    public function viewAllCategories(){
//        ORGANIZES CATEGORIES IN ALPHABETICAL ORDER
//        $categories = array();
//        foreach(Range('A',"Z") as $category){
//            array_push($categories,array($category => Category::where('category','like', $category."%")->get()));
//        }

        $categories = Category::orderBy('category')->paginate(100);

        return view('categories',compact('categories'));
    }

    public function videosByCategory($category_id){
        $category = Category::findOrFail($category_id);
        return view('category-videos',compact('category'));
    }
}
