<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Redirect;

class Customer extends Controller
{
    public function index(){
        return view('login');
    }

    public function customer_login_check(Request $request){
        $username = $request->username;
        $password= $request->password;
        
        $result = DB::table('tbl_company')
               ->where('username',$username)
               ->where('password',$password)
               ->first();
        
        
        if($result)
        {
            Session::put('organization_name',$result->company_name);
            Session::put('organization_id',$result->id);
            Session::put('user_status', $result->user_status);
            
            return Redirect::to('/company_dashboard');
            
        } 
        else{
            Session::put('message','User Id or Password Invaild');
            return Redirect::to('/');
        }
    }  

	public function dashboard(){
        $content=  view('company.company_dashboard');
        return view('master')
                ->with('content',$content);
    }

    public function logout() {
        Session::put('company_name', null);
        Session::put('company_id', null);
        Session::put('message', 'You are Successfully Logout !');
        return Redirect::to('/');
    }

    public function manage_product() {
        $company_name = Session::get('organization_name');
        $product_info = DB::table('tbl_products')
                        ->where('company_name',$company_name)
                        ->get();
        $manage_product = view('company.company_products')->with('product_info', $product_info);
        return view('master')
                ->with('content', $manage_product);
    }

}
