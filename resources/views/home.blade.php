@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

          <div class="col-md-10 ">

              @foreach($product as $product)
                  <div class="col-md-4 col-md-offset-2 well " style="">
                    <a href="{{route('products.show',$product->id)}}" >
                      <div >Name: {{$product->product_name}}</div>
                      <div >Price: {{$product->price}}</div>
                    </a>
                  </div>
              @endforeach


        </div>
    </div>
</div>
@endsection
