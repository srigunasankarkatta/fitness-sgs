@extends('admin.layouts.master')
@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Fitness Center Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/fitness-center-category') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label class="">Name</label>
                                <input type="text" name="name" class="form-control" id="">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="">Slug</label>
                                <input type="text" name="slug" class="form-control slugify" id="">
                                @error('slug')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-12">Description</label>
                            <div class="col-md-12">
                                <textarea name="description" id="" class="form-control"></textarea>
                            </div>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label class="">Category Icon</label>
                                <input type="text" name="category_icon" class="form-control " id="">
                                @error('category_icon')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                           
                            <div class="col-md-6">
                              
                                  <label for=""></label>
                                  <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="status" checked>
                                    <label class="form-check-label" for="mySwitch">Status</label>
                                  </div>
                             
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label class="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" id="">
                                @error('meta_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="">Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control" id="">
                                @error('meta_keyword')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="">Meta Description</label>
                            <div class="col-md-12">
                                <textarea name="meta_description" id="" class="form-control"></textarea>
                            </div>
                            @error('meta_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="  d-flex justify-content-center">
                            <button class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
