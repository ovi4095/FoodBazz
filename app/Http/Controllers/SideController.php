<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SideController extends Controller
{
    public function home()
    {
    $homepages= DB::table('homepages')->get();
    $customers= DB::table('customers')->get();
    return view('fornt.homepage',compact('homepages','customers'));
    }
    public function Bindex()
    {
        $homeimages= DB::table('homeimages')->get();
        return view('fornt.banglahomepage')->with('homeimages',$homeimages);
    }
    public function ImageGallery(){
        return view('fornt.imagegallery');
    }
    public function Map()
    {
        return view('fornt.map');
    }
    public function adminlogin()
    {
        return view('admin.login.login');
    }
    public function registerNow(){
        $homepages= DB::table('homepages')->get();
        $customers= DB::table('customers')->get();
        return view('fornt.register.register',compact('homepages','customers'));
    }
    public function loginNow(){
        $homepages= DB::table('homepages')->get();
        $customers= DB::table('customers')->get();
        return view('fornt.register.login',compact('homepages','customers'));
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

        return redirect('/login-now');
    }
    public function customerLoginCheck(Request $request){
        $customer = Customer::where('email', $request->email)->first();
        if ($customer){
            if (password_verify($request->password,$customer->password)){
                Session::put('cutomerId', $customer->id);
                Session::put('cutomerName', $customer->first_name.' '.$customer->last_name);
                return redirect('/welcome');
            } else {
                return redirect('/welcome')->with('message','Invalid Password');
            }
        } else{
            return redirect('/welcome')->with('message','Invalid Email');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
