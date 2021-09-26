@extends('master')

@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-sm-10">
                <div class="tranding-wrapper">
                    <h3>Result of products </h3>

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

                                    <button class="btn btn-warning">Remove from Cart</button>

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>




    </div>

@endsection
