@extends('master')
@section('content')

<div class="box-content">
    <?php
        foreach($product_info as $v_product){ ?>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr><th>Sold To: <?php echo $v_product->company_name?></th></tr>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Category</th>
                        <th>Product Manufacturer</th>
                        <th>Pdoruct Quantity</th>
                    </tr>
                </thead>   
                <tbody>
                    <tr>
                        <td><?php echo $v_product->product_name?></td>
                        <td class="center"><?php echo $v_product->product_price?></td>
                        <td class="center"><?php echo $v_product->category_name?></td>
                        <td class="center"><?php echo $v_product->manufacturer_name?></td>
                        <td class="center"><?php echo $v_product->quantity?></td>
                    </tr>
                </tbody>
            </table>
    <?php } ?>
</div>

@endsection