<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Restinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class RestaurantController extends Controller
{
    public function RestaoList()

    {
        $restaurants= DB::table('restaurants')
                    ->join('restinfos', 'restaurants.restau_id', '=', 'restinfos.id')
                    ->select('restaurants.id','restaurants.restau_id','restaurants.restau_img','restaurants.restau_name','restaurants.restau_detail', 'restaurants.rating','restaurants.publication_status','restinfos.id')
                    ->get();


        return view('fornt.restaurantList.restaurent')->with('restaurants',$restaurants );
    }
    public function RestInfo($id){
        $restinfos= DB::table('restinfos')->where('id',$id)->get();
        return view('fornt.restaurantinfo.restinfo')->with('restinfos',$restinfos);
    }

    public function addRestaurant(){
        return view('admin.restaurant.add-restaurant');
    }
    public function saveRestaurant(Request $request){
        $this->validate($request, [
            'restau_id'=> 'required|Numeric|min:1'
        ]);
        $restauImg= $request->file('restau_img');
        $restaurantImage=$restauImg->getClientOriginalName();
        $directory = 'rest-image/';
        $restauImg->move($directory,$restaurantImage);
        $imageUrl=$directory.$restaurantImage;

        $restaurant= new Restaurant();
        $restaurant->restau_id= $request->restau_id;
        $restaurant->restau_name= $request->restau_name;
        $restaurant->restau_detail= $request->restau_detail;
        $restaurant->restau_img=$imageUrl;
        $restaurant->rating= $request->rating;
        $restaurant->rest_link= $request->rest_link;
        $restaurant->publication_status= $request->publication_status;
        $restaurant->save();

        return redirect('/restaurant/add-restaurant')->with('message','Restaurant added successfully Uploded');

    }
    public function manageRestaurant(){
        $restaurants = Restaurant::all();
        return view('admin.restaurant.manage-restaurant', ['restaurants'=>$restaurants]);
    }

    public function unpublishedRestaurant($data){
        $restaurantyById = Restaurant::find($data);
        $restaurantyById->publication_status = 0;
        $restaurantyById->save();
        return redirect('/restaurant/manage-restaurant')->with('message','Unpublished successfully');
    }

    public function publishedRestaurant($data){
        $categoryById = Restaurant::find($data);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('/restaurant/manage-restaurant/')->with('message','Published successfully');
    }
    public function deleteRestaurant($id){
        $restaurantyById = Restaurant::find($id);
        $restaurantyById->delete();
        return redirect('/restaurant/manage-restaurant/')->with('message','Restaurent Deleded successfully');
    }

    public function infoRestaurant(){
        $restinfos= DB::table('restinfos')->get();
        $publishedRestaurants = Restaurant::where('publication_status', 1)->get();
        return view('admin.restaurant.info-restaurant',['restinfos'=>$restinfos,'publishedRestaurents'=>$publishedRestaurants]);
    }
    public function addinfoRestaurant(Request $request){

        $slideImage1 = $request->file('slide1_img');
        $imageslide1 = $slideImage1->getClientOriginalName();
        $dirctory = 'infopage-image/';
        $slideImage1->move($dirctory,$imageslide1);
        $imageUrl1=$dirctory.$imageslide1;

        $slideImage2 = $request->file('slide2_img');
        $imageslide2 = $slideImage2->getClientOriginalName();
        $dirctory = 'infopage-image/';
        $slideImage2->move($dirctory,$imageslide2);
        $imageUrl2=$dirctory.$imageslide2;

        $slideImage3 = $request->file('slide3_img');
        $imageslide3 = $slideImage3->getClientOriginalName();
        $dirctory = 'infopage-image/';
        $slideImage3->move($dirctory,$imageslide3);
        $imageUrl3=$dirctory.$imageslide3;

        $menuImage = $request->file('manu_img');
        $menu = $menuImage->getClientOriginalName();
        $dirctory = 'infopage-image/';
        $menuImage->move($dirctory,$menu);
        $imageUrl4=$dirctory.$menu;

        $reviewImages1 = $request->file('review1_img');
        $reviewImageName1 = $reviewImages1->getClientOriginalName();
        $dirctory = 'infopage-image/';
        $reviewImages1->move($dirctory,$reviewImageName1);
        $imageUrl5=$dirctory.$reviewImageName1;

        $reviewImages2 = $request->file('review2_img');
        $reviewImageName2 = $reviewImages2->getClientOriginalName();
        $dirctory = 'infopage-image/';
        $reviewImages2->move($dirctory,$reviewImageName2);
        $imageUrl6=$dirctory.$reviewImageName2;

        $reviewImages3 = $request->file('review3_img');
        $reviewImageName3 = $reviewImages3->getClientOriginalName();
        $dirctory = 'infopage-image/';
        $reviewImages3->move($dirctory,$reviewImageName3);
        $imageUrl7=$dirctory.$reviewImageName3;

        $reviewImages4 = $request->file('review4_img');
        $reviewImageName4 = $reviewImages4->getClientOriginalName();
        $dirctory = 'infopage-image/';
        $reviewImages4->move($dirctory,$reviewImageName4);
        $imageUrl8=$dirctory.$reviewImageName4;

        $mapImage = $request->file('map_img');
        $map = $mapImage->getClientOriginalName();
        $dirctory = 'infopage-image/';
        $mapImage->move($dirctory,$map);
        $imageUrl9=$dirctory.$map;

        DB::table('restinfos')->insert([
            'restaurent_name' => $request->restaurent_name,
            'slide1_img' =>$imageUrl1,
            'slide2_img' =>$imageUrl2,
            'slide3_img' =>$imageUrl3,
            'manu_img' =>$imageUrl4,
            'review1_img' =>$imageUrl5,
            'review2_img' =>$imageUrl6,
            'review3_img' =>$imageUrl7,
            'review4_img' =>$imageUrl8,
            'map_img' =>$imageUrl9,
            'address' => $request->address,
            'map_url' => $request->map_url,
            'contact_number' => $request->contact_number,
            'fb_link' => $request->fb_link,
            'publication_status' => $request->publication_status
        ]);

        return redirect('/restaurant/info-restaurant')->with('message','Page info added successfully');
    }




}
