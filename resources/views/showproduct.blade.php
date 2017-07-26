@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

          <div class="col-md-10 ">
            <table class="table">
                             <thead>

                             <th>Product Name</th>
                             <th>Product Details</th>
                             <th>Product Code</th>
                             <th>Company Name</th>
                             <th>price</th>
                             </thead>
                             <tbody>


              <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_details}}</td>
                    <td>{{$product->product_code}}</td>
                    <td>{{$product->company_name}}</td>
                    <td>{{$product->price}}</td>



                </tr>
              
            </tbody>

          </table>


        </div>
    </div>
</div>
@endsection
