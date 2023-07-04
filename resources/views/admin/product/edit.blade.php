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
                    <h2><i class="fas fa-edit"></i> EDit Product #ID {{ $edit_info->id }}</h2>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('product.update') }}" method="post"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label for="BlogTittle">Tittle</label>
                            <input type="text" class="form-control" id="productName" value="{{ $edit_info->name }}"
                                name="name" required>
                            <input type="hidden" value="{{$edit_info->id}}" name="edit_id" >
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" id="productDescription" value="{{ $edit_info->description }}" name="description"
                                rows="5" required>{{ $edit_info->description }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Description">Location</label>
                                    <input name="location" placeholder="Location" type="text"
                                        value="{{ $edit_info->location }}"class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Description">Home Area</label>
                                    <input name="home_area" placeholder="Home Area" type="number"
                                        value="{{ $edit_info->area }}"class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Description">Bath</label>
                                    <input name="bath" placeholder="Bath" type="number" value="{{ $edit_info->bath }}"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Description">Beds</label>
                                    <input name="beds" placeholder="Beds" type="number" class="form-control"
                                        value="{{ $edit_info->beds }}" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Description">Rooms</label>
                                    <input name="rooms" placeholder="Rooms" type="number"
                                        value="{{ $edit_info->rooms }}"class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Description">Price</label>
                                    <input name="price" placeholder="Price" type="number" value="{{ $edit_info->price }}"
                                        class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Description">Property status</label>
                                    <input name="property_status" placeholder="Property Status"
                                        value="{{ $edit_info->status }}" type="text" class="form-control" required />
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
                            <div class="col-12 ">
                                <div class="form-group ">

                                    <button type="submit" class="btn btn-info">Update Product</button>

                                    <a href="{{route('product.delete',$edit_info->id)}}" class="btn btn-primary" > Delete Product</a>
                                </div>

                            </div>
                            </div>
                        </div>


                    </form>


                </div>
            </div>


            </form>
        </div>
    </div>
@endsection
