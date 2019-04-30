
@extends('master')
@section('content')

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Request Product to Supplier</a>
        </li>
    </ul>
</div>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Request Product</h2>
                
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <h3>
                <?php
                    $msg=Session::has('request') ? Session::get('request') : '';
                    if($msg){
                        echo $msg;
                    }
                ?>
            </h3>
            <div class="box-content">
                <form class="form-horizontal" action="/requested_product" method="">
                    <fieldset>
                        <legend></legend>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Select Supplier name  </label>
                            <div class="controls">
                                <select name="supplier_name">
                                    <option>Select Supplier </option>
                                    @foreach($supplier_name as $c_name)
                                        <option value="{{$c_name->company_name}}">{{$c_name->company_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Product Name  </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead"  name="product_name">
                                
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Name  </label>
                            <div class="controls">
                                <select name="product_category">
                                    <option>Select Category</option>
                                    <option>Mobile</option>
                                    <option>TV</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Manufacturer Name  </label>
                            <div class="controls">
                                <select name="product_manufacturer">
                                    <option>Select manufacturer</option>
                                    <option>Samsung</option>
                                    <option>OPPO</option>
                                    <option>Helio</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Product Quantity  </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead"  name="product_quantity">
                                
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save </button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->

    @endsection