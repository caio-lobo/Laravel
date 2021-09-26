@extends('master')

@section('content')
    <div class="custom-product">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $count = 0; ?>
                @foreach ($products as $item)
                    <?php $count += 1; ?>
                    <a href="detail/{{ $item['id'] }}">
                    <div class="carousel-item {{ $count == 1 ? 'active' : '' }}">
                        <img class="slider-img" src="{{ $item['gallery'] }}">
                        <div class="carrousel-caption slider-text">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="tranding-wrapper">
            <h3>Trending products </h3>
            
            @foreach ($products as $item)
               
                <a href="detail/{{ $item['id'] }}">
                    <div class="trending-item">
                        <img class="trending-img" src="{{ $item['gallery'] }}">
                        <div class="">
                            <h3>{{ $item['name'] }}</h3>
                        </div>
                    </div>
                </a>

            @endforeach
        </div>

    </div>

@endsection
