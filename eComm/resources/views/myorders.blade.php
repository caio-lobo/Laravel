@extends('master')

@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-sm-10">
                <div class="tranding-wrapper">
                    <h3>My orders </h3>
                    <a class="btn btn-success" href="order_now">order now</a><br><br>

                    @foreach ($orders as $item)
                        <div class="row searched-item cart-list-divider">
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">

                                    
                                    

                                </a>
                            </div><div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">

                                    
                                    <div class="">
                                        <h2>Name : {{ $item->name }}</h2>
                                        <h5>Delivery status : {{ $item->status }}</h5>
                                        <h5>PAYMENT METHOD : {{ $item->payment_method }}</h5>
                                        <h5>PAYMENT STATUS : {{ $item->payment_status }}</h5>
                                        <h5>ADDRESS : {{ $item->address }}</h5>
                                    </div>

                                </a>
                            </div>
                            {{-- <div class="col-sm-3">

                                    <a class="btn btn-warning" href="/remove_cart/{{ $item->cart_id }}">Remove from Cart</a>

                            </div> --}}

                        </div>
                    @endforeach
                </div>
            </div>
        </div>




    </div>

@endsection
