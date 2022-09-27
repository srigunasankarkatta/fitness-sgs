@extends('admin.layouts.master')
@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card card-custom card-stretch example example-compact" id="kt_page_stretched_card">
                    <div class="card-header" kt-hidden-height="74" style="">
                        <div class="card-title">
                            <h3 class="card-label">Fitmi Expert
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
                        <form action="{{ url('admin/expert/' . $expert->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

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
                            <div class="tab-content border " id="nav-tabContent">
                                <div class="tab-pane fade show active p-3" id="expert-details" role="tabpanel"
                                    aria-labelledby="expert-details-tab" tabindex="0">
                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label class="">Category</label>
                                            <select name="category_id" id="" class="form-select">
                                                {{-- <option selected disabled>select category</option> --}}
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $expert->category_id == $category->id ? __('selected') : __('') }}>
                                                        {{ $category->name }}</option>
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
                                            <input type="text" name="name" class="form-control" id=""
                                                value="{{ $expert->name }}">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="">Slug</label>
                                            <input type="text" name="slug" class="form-control slugify" id=""
                                                value="{{ $expert->slug }}">
                                            @error('slug')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea name="description" id="" class="form-control">{{ $expert->description }}</textarea>
                                        </div>
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label class="">City</label>
                                            <input type="text" name="city" class="form-control" id=""
                                                value="{{ $expert->city }}">
                                            @error('city')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12"></div>
                                            <label class="">Status</label>
                                            <input type="radio" name="status" id=""
                                                value="{{ $expert->status }}">
                                            @error('status')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label class="">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control" id=""
                                                value="{{ $expert->meta_title }}">
                                            @error('meta_title')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="">Meta Keyword</label>
                                            <input type="text" name="meta_keyword" class="form-control"
                                                id="" value="{{ $expert->meta_keyword }}">
                                            @error('meta_keyword')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label class="">Meta Description</label>
                                        <div class="col-md-12">
                                            <textarea name="meta_description" id="" class="form-control">{{ $expert->meta_description }}</textarea>
                                        </div>
                                        @error('meta_description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>
                                <div class="tab-pane fade p-3" id="image-gallery" role="tabpanel"
                                    aria-labelledby="image-gallery-tab" tabindex="0">

                                    <div class="form-group row mb-3">
                                        <div class="col-md-12">

                                            <div class="row">
                                                @forelse ($expert->expertImages as $expertImage)
                                                    <div class="col-md-4">
                                                        <div class="card mb-3">
                                                            <img style="object-fit: cover;padding: 1px;border-radius:6px;"
                                                                src="{{ url('') }}/{{ $expertImage->image }}"
                                                                height="200px" alt="">
                                                            <div class="card-footer">
                                                                <a href="{{ url('admin/expert-image/' . $expertImage->id . '/delete') }}"
                                                                    class="btn btn-secondary">remove</a>
                                                                <a href="{{ url('admin/expert-image/' . $expertImage->id . '/update') }}"
                                                                    class="btn btn-secondary">update</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @empty
                                                    no images found
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            {{-- <label class="">Upload Fitmi Expert Images</label> --}}
                                            <input type="file" name="images[]" id="" multiple
                                                class="form-control">
                                            @error('images')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade p-3" id="video-gallery" role="tabpanel"
                                    aria-labelledby="video-gallery-tab" tabindex="0">
                                    <div class="form-group row mb-3">
                                        <div class="col-md-12 m-3">

                                            <div class="row">
                                                @forelse ($expert->expertVideos as $expertVideo)
                                                    <div class="col-md-4">
                                                        <div class="card mb-3">
                                                            <video height="100%" style="padding: 1px;" controls>
                                                                <source
                                                                    src="{{ url('') }}/{{ $expertVideo->video }}"
                                                                    type="video/mp4">
                                                                <source
                                                                    src="{{ url('') }}/{{ $expertVideo->video }}"
                                                                    type="video/ogg">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                            <div class="card-footer">
                                                                <a href="{{ url('admin/expert-video/' . $expertVideo->id . '/delete') }}"
                                                                    class="btn btn-secondary">remove</a>
                                                                <a href="{{ url('admin/expert-video/' . $expertVideo->id . '/update') }}"
                                                                    class="btn btn-secondary">update</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    no videos found
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">

                                        <div class="docs-example">
                                            <button type="button" class="btn btn-primary" data-coreui-toggle="modal"
                                                data-coreui-target="#exampleModalScrollable">
                                                upload videos
                                            </button>
                                        </div>
                                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1"
                                            aria-labelledby="exampleModalScrollableTitle" style="display: none;"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal
                                                            title</h5>
                                                        <button type="button" class="btn-close"
                                                            data-coreui-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="col-md-12 mb-5">
                                                            {{-- <label class="">Upload Fitmi Expert Images</label> --}}
                                                            <input type="file" name="videos[]" id="" multiple
                                                                class="form-control">
                                                            @error('videos')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror

                                                        </div>
                                                        <label>Add Video URL</label>

                                                        <div class="row targetDiv " id="div1">
                                                            <div class="col-md-12">
                                                                <div id="group2" class="fvrduplicate">
                                                                    <div class="row entry mb-2">
                                                                        <!-- Field Start -->
                                                                        <div class="col-md-12 col-md-5">
                                                                            <div class="form-group row">
                                                                                
                                                                                <div class="col-md-10">
                                                                                    <input class="form-control " name="video_url[]" type="text">
                                                                                </div>
                                                                                <div class="col-md-2  d-flex">
                                                                                    <button type="button" class="btn btn-success btn-sm btn-add">
                                                                                        <i class="fa fa-plus" aria-hidden="true">+</i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                          
                                                                        </div>
                                                                        {{-- <div class="col-xs-12 col-md-2">
                                                                            <div class="form-group">
                                                                                <label>&nbsp;</label>
                                                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                                                    <i class="fa fa-plus" aria-hidden="true">+</i>
                                                                                </button>
                                                                            </div>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer p-1">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-coreui-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="nav-disabled" role="tabpanel"
                                    aria-labelledby="nav-disabled-tab" tabindex="0">

                                </div>
                            </div>
                            <div class="d-flex justify-content-start mt-4">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </form>
                        {{-- <div class="card-scroll" style="height: 108px;">
                            <!--begin::Code example-->
                           
                                                  
                        </div> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="card mb-5">
                <div class="card-header">
                    <h4>Fitmi Expert</h4>
                </div>
                <div class="card-body">
                  
                    
                   
                </div>
            </div> --}}
        </div>
    </div>

  
@endsection

@push('scripts')
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
    <script>
        $(function() {
            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();
                var controlForm = $(this).closest('.fvrduplicate'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);
                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<i class="fa fa-minus" aria-hidden="true">-</i>');
            }).on('click', '.btn-remove', function(e) {
                $(this).closest('.entry').remove();
                return false;
            });
        });
    </script>
@endpush
