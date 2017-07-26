@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="col-md-12">

              @foreach($product as $product)
                  <tr>
                      <td>{{$product->product_name}}</td>
                      <td>{{$product->product_details}}</td>
                      <td>{{$product->product_code}}</td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->company_name}}</td>
                  </tr>
              @endforeach
          
      </div>
        </div>
    </div>
</div>
@endsection
