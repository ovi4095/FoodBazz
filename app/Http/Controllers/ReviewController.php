<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Reviewpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReviewController extends Controller
{
    public function addReview(){
        $publishedRestaurants = Restaurant::where('publication_status', 1)->get();
        $reviewposts= DB::table('reviewposts')->get();
        return view('fornt.review.review', [
            'publishedRestaurents'=>$publishedRestaurants,
            'reviewposts'=>$reviewposts

        ]);

    }
    public function saveReview(Request $request){
        $reviewImg= $request->file('food_img');
        $reviewImage=$reviewImg->getClientOriginalName();
        $directory = 'reviewpost-image/';
        $reviewImg->move($directory,$reviewImage);
        $imageUrl=$directory.$reviewImage;

        $reviewpost= new Reviewpost();
        $reviewpost->restaurent_name=$request->restaurent_name;
        $reviewpost->food_name=$request->food_name;
        $reviewpost->description=$request->description;
        $reviewpost->food_rating=$request->food_rating;
        $reviewpost->food_img=$imageUrl;
        $reviewpost->save();

        return redirect('/post-review');

    }
    public function manageReview(){
        $reviewposts=  Reviewpost::all();
        return view('admin.reviewpost.manage-reviewpost', ['reviewposts'=>$reviewposts]);
    }
    public function deleteReview($id){
        $reviewById= Reviewpost::find($id);
        $reviewById->delete();
        return redirect('/rewiewpost/manage-reviewpost')->with('message','Post Deleded successfully');

    }

}
