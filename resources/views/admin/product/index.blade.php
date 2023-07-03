@extends('layouts.admin')

@section('admin-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Area</th>
                            <th>Rooms</th>
                            <th>Beds</th>
                            <th>Bath</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->location }}</td>
                                <td>{{ $product->area }}</td>
                                <td>{{ $product->rooms }}</td>
                                <td>{{ $product->beds }}</td>
                                <td>{{ $product->bath }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->status }}</td>
                                <td><img src="{{ asset('includes/products') . '/' . json_decode($product->image) }}"
                                        alt=""></td>
                                <td><a href="{{ route('product.edit', $product->id) }}"
                                        class="btn btn-primary btn-sm">EDIT</a></td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
