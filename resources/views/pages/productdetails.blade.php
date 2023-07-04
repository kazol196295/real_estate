@extends('layouts.default')
@section('main-content')
    <style>
        body {
            background-color: #edf1f5;
            margin-top: 20px;
        }

        .card {
            margin-bottom: 30px;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: 0;
        }

        .card .card-subtitle {
            font-weight: 300;
            margin-bottom: 10px;
            color: #8898aa;
        }

        .table-product.table-striped tbody tr:nth-of-type(odd) {
            background-color: #f3f8fa !important
        }

        .table-product td {
            border-top: 0px solid #dee2e6 !important;
            color: #728299 !important;
        }

        .button-container {
            display: flex;
            gap: 10px;
            /* Adjust the gap between the buttons as needed */
        }

        /* Alternatively, you can use grid layout */
        .button-container {
            display: grid;
            grid-template-columns: repeat(2, auto);
            gap: 10px;
            /* Adjust the gap between the buttons as needed */
        }
    </style>


    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0" data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Product Details</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                        Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area mb-90">
        <div class="container-fluid">
            <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ asset('img/img-slide/31.jpg') }} " data-rel="lightcase:myCollection">
                            <img src="{{ asset('img/img-slide/31.jpg') }} " alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ asset('img/img-slide/32.jpg') }}" data-rel="lightcase:myCollection">
                            <img src="{{ asset('img/img-slide/32.jpg') }} " alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ asset('img/img-slide/33.jpg') }}" data-rel="lightcase:myCollection">
                            <img src="{{ asset('img/img-slide/33.jpg') }} " alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ asset('img/img-slide/34.jpg') }} " data-rel="lightcase:myCollection">
                            <img src="{{ asset('img/img-slide/34.jpg') }} " alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ asset('img/img-slide/35.jpg') }} " data-rel="lightcase:myCollection">
                            <img src="{{ asset('img/img-slide/35.jpg') }} " alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    {{--  product list --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $product->name }}</h3>
                <h6 class="card-subtitle">This property is {{ $product->status }}</h6>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center"><img
                                src="{{ asset('includes/products') . '/' . json_decode($product->image) }}"
                                class="img-responsive"></div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6">
                        <h4 class="box-title mt-5">Product description</h4>
                        <p>{{ $product->description }}</p>
                        <h2 class="mt-5">
                            {{ $product->price }} $<small class="text-success">(20%off)</small>
                        </h2>

                        <div class="button-container">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-dark btn-rounded mr-1" title="Add to cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </form>

                            <form action="{{ route('cart.buy') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-primary btn-rounded">Buy Now</button>
                            </form>
                        </div>

                        <h3 class="box-title mt-5">Key Highlights</h3>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
                            <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
                            <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful
                                collectibles</li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title mt-5">General Info</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-product">
                                <tbody>
                                    <tr>
                                        <td width="390">Name:</td>
                                        <td>{{ $product->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Property status</td>
                                        <td>{{ $product->status }}</td>
                                    </tr>
                                    <tr>
                                        <td>Home area</td>
                                        <td>{{ $product->area }}</td>
                                    </tr>
                                    <tr>
                                        <td>Author</td>
                                        <td>Md kawsar ahmed kazol</td>
                                    </tr>
                                    <tr>
                                        <td>Bedrooms</td>
                                        <td>{{ $product->beds }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bathrooms</td>
                                        <td>{{ $product->baths }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total rooms</td>
                                        <td>{{ $product->rooms }}</td>
                                    </tr>
                                    <tr>
                                        <td>LOcation</td>
                                        <td>{{ $product->location }}</td>
                                    </tr>
                                    <tr>
                                        <td>Featured ??</td>
                                        <td>{{ $product->featured }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
