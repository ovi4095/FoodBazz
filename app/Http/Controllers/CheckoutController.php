<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('fornt.checkout.checkout');

    }
   public function saveCustomerInfo(Request $request){
       /* $this->validate($request,[
            'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            //'email' => 'required|email|unique:customers,email',
            'Password' => 'required',
            'phone_number' => 'required',
            'address' => 'required'
            ]);*/

            $customer = new Customer();
            $customer->first_name= $request->first_name;
            $customer->last_name= $request->last_name;
            $customer->email= $request->email;
            $customer->password= bcrypt( $request->password);
            $customer->phone_number= $request->phone_number;
            $customer->address= $request->address;
            $customer->save();



            Session::put('cutomerId', $customer->id);
            Session::put('cutomerName', $customer->first_name.' '.$customer->last_name);

            $data=$customer->toArray();

            Mail::send('fornt.email.congratulation-mail', $data, function ($message) use ($data){
                $message->to($data['email']);
                $message->subject('Congratulation Mail');

            });

            return redirect('/shipping-info');
    }
    public function showShippingInfo(){
        return view('fornt.checkout.shipping-info');
    }

}
