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

    public function product_request(){
        $supplier_name = DB::table('tbl_company')
                        ->where('user_status', 'supplier')
                        ->get();
        $content = view('company.product_request_form')
                    ->with('supplier_name', $supplier_name);
        return view('master')
                ->with('content', $content);

    }

    public function requested_product(Request $request){
        $data = array();
        $data['request_from'] = Session::get('organization_name');
        $data['request_to'] = $request->supplier_name;
        $data['product_name'] = $request->product_name;
        $data['product_category'] = $request->product_category;
        $data['product_manufacturer'] = $request->product_manufacturer;
        $data['product_quantity'] = $request->product_quantity;
        
        DB::table('tbl_product_req')->insert($data);
        Session::put('request', 'Send Product Request Successfully !');
        return Redirect::to('product_request');
    }

}
