@extends('master')

@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-sm-10">
                <div class="tranding-wrapper">
                    <h3>Result of products </h3>
                    <a class="btn btn-success" href="order_now">order now</a><br><br>

                    @foreach ($products as $item)
                        <div class="row searched-item cart-list-divider">
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">

                                    <img class="trending-img" src="{{ $item->gallery }}">
                                    

                                </a>
                            </div><div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">

                                    
                                    <div class="">
                                        <h2>{{ $item->name }}</h2>
                                        <h5>{{ $item->description }}</h5>
                                    </div>

                                </a>
                            </div><div class="col-sm-3">

                                    <a class="btn btn-warning" href="/remove_cart/{{ $item->cart_id }}">Remove from Cart</a>

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>




    </div>

@endsection
