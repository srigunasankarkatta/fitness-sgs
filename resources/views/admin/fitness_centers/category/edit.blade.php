@extends('admin.layouts.master')
@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Expert Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/fitness-center-category/'.$category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label class="">Name</label>
                                <input type="text" name="name" class="form-control" id="" value="{{$category->name}}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="">Slug</label>
                                <input type="text" name="slug" class="form-control" id="" value="{{$category->slug}}">
                                @error('slug')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-12">Description</label>
                            <div class="col-md-12">
                                <textarea name="description" id="" class="form-control">{{$category->description}}</textarea>
                            </div>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label class="">Image</label>
                                <input type="file" name="image" class="form-control" id="">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12"></div>
                                <label class="">Status</label>
                                <input type="radio" name="status" id="" {{($category == '1') ? 'checked' : ''}}>
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label class="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" id="" value="{{$category->meta_title}}">
                                @error('meta_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="">Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control" id="" value="{{$category->meta_keyword}}">
                                @error('meta_keyword')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="">Meta Description</label>
                            <div class="col-md-12">
                                <textarea name="meta_description" id="" class="form-control">{{$category->meta_description}}</textarea>
                            </div>
                            @error('meta_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-start">
                            <button class="btn btn-success">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
