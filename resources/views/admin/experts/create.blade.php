@extends('admin.layouts.master')

@push('scripts')
    <link rel="stylesheet" href="{{ asset('assets/js/bootstrap.fd.css') }}">
@endpush
@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-custom card-stretch example example-compact" id="kt_page_stretched_card">
                    <div class="card-header" kt-hidden-height="74" style="">
                        <div class="card-title">
                            <h3 class="card-label">Edit Fitmi Expert
                                <small></small>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title=""
                                    data-original-title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title=""
                                    data-original-title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/expert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="expert-details-tab" data-coreui-toggle="tab"
                                        data-coreui-target="#expert-details" type="button" role="tab"
                                        aria-controls="expert-details" aria-selected="true">Expert Details</button>
                                    <button class="nav-link" id="image-gallery-tab" data-coreui-toggle="tab"
                                        data-coreui-target="#image-gallery" type="button" role="tab"
                                        aria-controls="image-gallery" aria-selected="false">Image Gallery</button>
                                    <button class="nav-link" id="video-gallery-tab" data-coreui-toggle="tab"
                                        data-coreui-target="#video-gallery" type="button" role="tab"
                                        aria-controls="video-gallery" aria-selected="false">Video Gallery</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active p-3 border" id="expert-details" role="tabpanel"
                                    aria-labelledby="expert-details-tab" tabindex="0">
                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label class="">Category</label>
                                            <select name="category_id" id="" class="form-select">
                                                <option selected disabled>select category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
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
                                            <input type="text" name="slug" class="form-control" id="">
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
                                            <label class="">City</label>
                                            <input type="text" name="city" class="form-control" id="">
                                            @error('city')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12"></div>
                                            <label class="">Status</label>
                                            <input type="radio" name="status" id="">
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
                                            <input type="text" name="meta_keyword" class="form-control"
                                                id="">
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
                                </div>
                                <div class="tab-pane fade p-3 border" id="image-gallery" role="tabpanel"
                                    aria-labelledby="image-gallery-tab" tabindex="0">
                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label class="">Upload Fitmi Expert Images</label>
                                            <input type="file" name="images[]" id="" multiple
                                                class="form-control">
                                            @error('images')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                             
                                <div class="tab-pane fade p-3 border" id="video-gallery" role="tabpanel"
                                    aria-labelledby="video-gallery-tab" tabindex="0">
                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label class="">Upload Fitmi Expert videos</label>
                                            <input type="file" name="videos[]" id="" multiple
                                                class="form-control">
                                            @error('videos')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <a class="btn" href="#ex2" rel="modal:open">Open Modal</a>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-disabled" role="tabpanel"
                                    aria-labelledby="nav-disabled-tab" tabindex="0">

                                </div>
                            </div>

                            <div class="  d-flex justify-content-start mt-4">
                                <button class="btn btn-success">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script>
        $('.file-upload').file_upload();
    </script>

    @if ($message = Session::get('message'))
        <script>
            $(function() {
                toastr.success("{{ $message }}");
            })
        </script>
    @endif

    @if ($message = Session::get('error'))
        <script>
            $(function() {
                toastr.error("{{ $message }}");
            })
        </script>
    @endif
@endpush
