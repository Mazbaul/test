@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="col-md-12">

              @foreach($product as $product)
                  <div class="col-md-4 col-md-offset-2 well ">
                    <a href="{{ url('/home')}}" > <td>{{$product->product_name}}</td>
                      <td>{{$product->product_code}}</td>
                      <td>{{$product->price}}</td>
                    </a>
                  </div>
              @endforeach

      </div>
        </div>
    </div>
</div>
@endsection
