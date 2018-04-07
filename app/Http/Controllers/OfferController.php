<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offerList()
    {

        $offers= DB::table('offers')->where('publication_status',1)->get();
        return view('fornt.offer.offers',compact('offers'));
    }

    public function addOffer(){
        $publishedRestaurants = Restaurant::where('publication_status', 1)->get();
        return view('admin.offer.add-offer', ['publishedRestaurents'=>$publishedRestaurants]);
    }
    public function saveOffer(Request $request){
        $this->validate($request, [
            'offer_id'=> 'required|Numeric|min:1'
        ]);
        $offreImg= $request->file('offer_img');
        $offreImage=$offreImg->getClientOriginalName();
        $directory = 'offer-image/';
        $offreImg->move($directory,$offreImage);
        $imageUrl=$directory.$offreImage;

        $offer= new Offer();
        $offer->offer_id= $request->offer_id;
        $offer->offer_name= $request->offer_name;
        $offer->restaurant_name= $request->restau_name;
        $offer->restau_detail= $request->restau_detail;
        $offer->offer_img=$imageUrl;
        $offer->price= $request->price;
        $offer->publication_status= $request->publication_status;
        $offer->save();
        return redirect('/offer/add-offer')->with('message','offer added successfully Uploded');
    }
    public function manageOffer(){
        $offers = Offer::all();
        return view('admin.offer.manage-offer', ['offers'=>$offers]);
    }
    public function unpublishedOffer($data){
        $offerById = Offer::find($data);
        $offerById->publication_status = 0;
        $offerById->save();
        return redirect('/offer/manage-offer')->with('message','Unpublished successfully');
    }
    public function publishedOffer($data){
        $offerById = Offer::find($data);
        $offerById->publication_status = 1;
        $offerById->save();
        return redirect('/offer/manage-offer')->with('message','published successfully');
    }
    public function deleteOffer($id){
        $offerById = Offer::find($id);
        $offerById->delete();
        return redirect('/offer/manage-offer')->with('message','Restaurent Deleded successfully');
    }
}
