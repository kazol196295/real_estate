@extends('layouts.admin')

@section('admin-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h2><i class="fas fa-edit"></i> Create Post</h2>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('product.store') }}" method="post"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label for="productName">Title</label>
                            <input type="text" class="form-control" id="productName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Description</label>
                            <textarea class="form-control" id="productDescription" name="description" rows="5" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="productLocation">Location</label>
                                    <input name="location" placeholder="Location" type="text" class="form-control"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="productHomeArea">Home Area</label>
                                    <input name="home_area" placeholder="Home Area" type="number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="productBath">Bath</label>
                                    <input name="bath" placeholder="Bath" type="number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="productBeds">Beds</label>
                                    <input name="beds" placeholder="Beds" type="number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="productRooms">Rooms</label>
                                    <input name="rooms" placeholder="Rooms" type="number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="productPrice">Price</label>
                                    <input name="price" placeholder="Price" type="number" class="form-control"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="productStatus">Property Status</label>
                                    <input name="property_status" placeholder="Property Status" type="text"
                                        class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input name="featured" id="featured" type="checkbox" class="form-check-input"
                                        value="1" />
                                    <label for="featured" class="form-check-label">Featured</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input name="rent" id="rent" type="checkbox" class="form-check-input"
                                        value="1" />
                                    <label for="rent" class="form-check-label">For Rent</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="imageUpload">File Upload</label>
                                    <input type="file" class="form-control-file" id="imageUpload" name="image"
                                        multiple>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Create Product</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
