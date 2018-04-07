<?php

namespace App\Http\Controllers;

use App\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homecontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home.home');
    }


    public function master()
    {
        $homepages= DB::table('homepages')->get();
        return view('fornt.homepage',compact('homeimages'));
    }
    public function addHomePageInfo(){
        return view('admin.homePage.add-homepageinfo');
    }
    public function saveHomePageInfo(Request $request){

        $this->validate($request, [
            'home_title'=> 'required|alpha|max:30|min:5'
        ]);

        $homeImage1= $request->file('homeslide1_img');
        $homeImage2= $request->file('homeslide2_img');
        $homeImage3= $request->file('homeslide3_img');
        $homeImage4= $request->file('rest_img');
        $homeImage5= $request->file('offer_img');
        $homeImage6= $request->file('review_img');
        $homeslide1= $homeImage1->getClientOriginalName();
        $homeslide2= $homeImage2->getClientOriginalName();
        $homeslide3= $homeImage3->getClientOriginalName();
        $restaurant= $homeImage4->getClientOriginalName();
        $offer= $homeImage5->getClientOriginalName();
        $review= $homeImage6->getClientOriginalName();
        $directory = 'home-image/';

        $homeImage1->move($directory,$homeslide1);
        $homeImage2->move($directory,$homeslide2);
        $homeImage3->move($directory,$homeslide3);
        $homeImage4->move($directory,$restaurant);
        $homeImage5->move($directory,$offer);
        $homeImage6->move($directory,$review);

        $imageUrl1=$directory.$homeslide1;
        $imageUrl2=$directory.$homeslide2;
        $imageUrl3=$directory.$homeslide3;
        $imageUrl4=$directory.$restaurant;
        $imageUrl5=$directory.$offer;
        $imageUrl6=$directory.$review;

        $homepage = new Homepage();
        $homepage->home_title = $request->home_title;
        $homepage->homeslide1_img =$imageUrl1;
        $homepage->homeslide2_img=$imageUrl2;
        $homepage->homeslide3_img=$imageUrl3;
        $homepage->rest_img=$imageUrl4;
        $homepage->offer_img=$imageUrl5;
        $homepage->review_img=$imageUrl6;
        $homepage->publication_status= $request->publication_status;
        $homepage->save();

        return redirect('/homepage/add-homePageInfo')->with('message','Home information successfully Uploded');

    }
    public function manageHomePageInfo(){
        $homepages = Homepage::all();
        return view('admin.homePage.manage-homepageinfo', ['homepages'=>$homepages]);
    }
   /* public function unpublishedHomePageInfo($data){
        $homepageById = Homepage::find($data);
        $homepageById->publication_status = 0;
        $homepageById->save();
        return redirect('/homepage/manage-homePageInfo')->with('message','home info unpublished successfully');
    }
    public function publishedHomePageInfo($data){
        $homepageById = Homepage::find($data);
        $homepageById->publication_status = 1;
        $homepageById->save();
        return redirect('/homepage/manage-homePageInfo')->with('message','Home info published successfully');
    }*/
    public function deleteHomePageInfo($id){
        $homepageById = Homepage::find($id);
        $homepageById->delete();
        return redirect('/homepage/manage-homePageInfo')->with('message','home info Deleted  successfully');
    }
    public function editHomePageInfo($id){
        $homepage = Homepage::find($id);

        return view('admin.homePage.edit-homePageInfo',['homepage'=>$homepage]);
    }
    /*public function updateHomePageInfo(Request $request){

        $homeImage1= $request->file('homeslide1_img');
        $homeImage2= $request->file('homeslide2_img');
        $homeImage3= $request->file('homeslide3_img');
        $homeImage4= $request->file('rest_img');
        $homeImage5= $request->file('offer_img');
        $homeImage6= $request->file('review_img');
        $homeslide1= $homeImage1->getClientOriginalName();
        $homeslide2= $homeImage2->getClientOriginalName();
        $homeslide3= $homeImage3->getClientOriginalName();
        $restaurant= $homeImage4->getClientOriginalName();
        $offer= $homeImage5->getClientOriginalName();
        $review= $homeImage6->getClientOriginalName();
        $directory = 'home-image/';

        $homeImage1->move($directory,$homeslide1);
        $homeImage2->move($directory,$homeslide2);
        $homeImage3->move($directory,$homeslide3);
        $homeImage4->move($directory,$restaurant);
        $homeImage5->move($directory,$offer);
        $homeImage6->move($directory,$review);

        $imageUrl1=$directory.$homeslide1;
        $imageUrl2=$directory.$homeslide2;
        $imageUrl3=$directory.$homeslide3;
        $imageUrl4=$directory.$restaurant;
        $imageUrl5=$directory.$offer;
        $imageUrl6=$directory.$review;


        $homepage = Homepage::find($request->homepage_id);
        $homepage->home_title = $request->home_title;
        $homepage->homeslide1_img =$imageUrl1;
        $homepage->homeslide2_img=$imageUrl2;
        $homepage->homeslide3_img=$imageUrl3;
        $homepage->rest_img=$imageUrl4;
        $homepage->offer_img=$imageUrl5;
        $homepage->review_img=$imageUrl6;
        $homepage->publication_status= $request->publication_status;
        $homepage->save();

        return redirect('/homepage/manage-homePageInfo')->with('message','home Updated Deleted  successfully');
    }*/
}
