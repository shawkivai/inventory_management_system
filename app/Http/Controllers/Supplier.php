<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Redirect;

class Supplier extends Controller
{
    public function index(){
        return view('supplier.supplier_login');
    }

	public function dashboard(){
        $content=  view('supplier.supplier_dashboard');
        return view('master')
                ->with('content',$content);
    }

    public function send_products_to_company(){
        $company_name = DB::table('tbl_company')
                        ->where('user_status', 'company')
                        ->get();
        $content = view('supplier.send_product')
                    ->with('company_name', $company_name);
        return view('master')
                ->with('content', $content);

    }

    public function save_product(Request $request){
        $data = array();
        $data['company_name'] = $request->company_name;
        $data['product_owner'] = Session::get('organization_name');
        $data['product_name'] = $request->product_name;
        $data['category_name'] = $request->category_name;
        $data['manufacturer_name'] = $request->manufacturer_name;
        $data['product_description'] = $request->product_description;
        $data['product_price'] = $request->product_price;
        $data['quantity'] = $request->quantity;
        
        $image = $request->file('product_image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'product_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path . $image_full_name);
            if ($success) {
                $data['product_image'] = $image_url;
                DB::table('tbl_products')->insert($data);
                Session::put('notification', 'Send Products to Company Successfully !');
                return Redirect::to('send_products');
            }
        } else {
            DB::table('tbl_products')->insert($data);
            Session::put('notification','Send Products to Company Successfully !');
            return Redirect::to('send_products');
        }
    }

    public function sold_products() {
        $supplier_name = Session::get('organization_name');
        $product_info = DB::table('tbl_products')
                        ->where('product_owner',$supplier_name)
                        ->get();
        $sold_product = view('supplier.sold_products')->with('product_info', $product_info);
        return view('master')
                ->with('content', $sold_product);
    }

    public function company_request() {
        $supplier_name = Session::get('organization_name');
        $product_info = DB::table('tbl_product_req')
                        ->where('request_to',$supplier_name)
                        ->get();
        $product_req = view('supplier.company_req_list')->with('product_info', $product_info);
        return view('master')
                ->with('content', $product_req);
    }

}
