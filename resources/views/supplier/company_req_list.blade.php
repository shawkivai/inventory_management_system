@extends('master')
@section('content')

<div class="box-content">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Request from</th>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Manufacturer</th>
                <th>Pdoruct Quantity</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($product_info as $v_product){ ?>
                    <tr>
                        <td class="center"><?php echo $v_product->request_from?></td>
                        <td><?php echo $v_product->product_name?></td>
                        <td class="center"><?php echo $v_product->product_category?></td>
                        <td class="center"><?php echo $v_product->product_manufacturer?></td>
                        <td class="center"><?php echo $v_product->product_quantity?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>            
</div>

@endsection