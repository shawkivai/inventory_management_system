
@extends('master')
@section('content')

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Send Product</a>
        </li>
    </ul>
</div>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Send Product</h2>
                
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" enctype="multipart/form-data" action="/save_product" method="">
                    <fieldset>
                        <legend></legend>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Select company name  </label>
                            <div class="controls">
                                <select name="company_name">
                                    <option>Select Company Name....</option>
                                    @foreach($company_name as $c_name)
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
                                <select name="category_name">
                                    <option>Select Category Name....</option>
                                    <option>Mobile</option>
                                    <option>TV</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Manufacturer Name  </label>
                            <div class="controls">
                                <select name="manufacturer_name">
                                    <option>Select manufacturer name...</option>
                                    <option>Samsung</option>
                                    <option>OPPO</option>
                                    <option>Helio</option>
                                </select>
                            </div>
                        </div>
                                
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Product Description</label>
                            <div class="controls">
                                <textarea name="product_description" class="cleditor" id="textarea2" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Product Price  </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead"  name="product_price">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Product Quantity  </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead"  name="quantity">
                                
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Prouduct  Image </label>
                            <div class="controls">
                                <input type="file" class="span6"   name="product_image">
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