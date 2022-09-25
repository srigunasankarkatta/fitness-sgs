@extends('admin.layouts.master')

@push('scripts')
    <link rel="stylesheet" href="{{ asset('assets/js/bootstrap.fd.css') }}">
@endpush
@section('content')
<style>
    .btn-check:focus + .btn-danger, .btn-danger:focus {
        box-shadow: unset;
    }
</style>
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
                        <form action="{{ url('admin/fitness-center') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="basic-details-tab" data-coreui-toggle="tab"
                                        data-coreui-target="#basic-details" type="button" role="tab"
                                        aria-controls="basic-details" aria-selected="true">Basic Details</button>
                                    <button class="nav-link" id="media-library-tab" data-coreui-toggle="tab"
                                        data-coreui-target="#media-library" type="button" role="tab"
                                        aria-controls="media-library" aria-selected="false">Media Library</button>
                                    <button class="nav-link" id="amenities-tab" data-coreui-toggle="tab"
                                        data-coreui-target="#amenities" type="button" role="tab"
                                        aria-controls="amenities" aria-selected="false">Amenities</button>
                                    <button class="nav-link" id="services-tab" data-coreui-toggle="tab"
                                        data-coreui-target="#services" type="button" role="tab"
                                        aria-controls="services" aria-selected="false">Services</button>
                                    {{-- <button class="nav-link" id="timings-tab" data-coreui-toggle="tab"
                                        data-coreui-target="#timings" type="button" role="tab" aria-controls="timings"
                                        aria-selected="false">Timings</button> --}}
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active p-3 border" id="basic-details" role="tabpanel"
                                    aria-labelledby="basic-details-tab" tabindex="0">
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
                                            <label class="">Fitness Center Name</label>
                                            <input type="text" name="name" class="form-control" id="">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="">Bussiness Name</label>
                                            <input type="text" name="bussiness_name" class="form-control" id="">
                                            @error('bussiness_name')
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

                                            <select name="city" id="" class="form-select">
                                                <option selected disabled>select city</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
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
                                            <label class="">Directions</label>
                                            <input type="text" name="directions" class="form-control" id="">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="">Location</label>
                                            <input type="text" name="location" class="form-control" id="">
                                            @error('location')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label class="">Availability</label>
                                            <div class="form-check">
                                                <input class="form-check-input" value="morning" name="availability[]" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Morning
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="evening" type="checkbox" name="availability[]" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Evining
                                                </label>
                                            </div>
                                            @error('availability')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="">Live Streams</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" name="live_streams"
                                                    value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" name="live_streams"
                                                    value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    No
                                                </label>
                                            </div>
                                            @error('live_streams')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>


                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label class="">Duration</label>
                                            <input type="text" name="duration" class="form-control" id="">
                                            @error('duration')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="">Kcal</label>
                                            <input type="text" name="kcal" class="form-control" id="">
                                            @error('kcal')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade p-3 border" id="media-library" role="tabpanel"
                                    aria-labelledby="media-library-tab" tabindex="0">
                                    <div class="form-group row mb-5 mt-2 ">
                                        <div class="col-md-6">
                                            <label class="">Upload Fitness Slider Images</label>
                                            <input type="file" name="slider_images[]" id="" multiple
                                                class="form-control">
                                            @error('slider_images')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label class="">Upload Fitness Banner videos</label>
                                            <input type="file" name="banner_videos[]" id="" multiple
                                                class="form-control">
                                            @error('banner_videos')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-3 border" id="amenities" role="tabpanel"
                                    aria-labelledby="amenities-tab" tabindex="0">
                                    <div class="row targetDiv " id="div1">
                                        <div class="col-md-12">
                                            <div id="group2" class="fvrduplicate">
                                                <div class="row entry mb-2">
                                                    <!-- Field Start -->
                                                    <div class="col-md-12 col-md-5">
                                                        <div class="form-group row">
                                                                
                                                            <div class="col-md-5">
                                                                <input class="form-control " name="amenity_icon[]" type="text">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input class="form-control " name="amenity_name[]" type="text">
                                                            </div>
                                                            <div class="col-md-2 ">
                                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                                    <i class="fa fa-plus" aria-hidden="true">+</i>
                                                                </button>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                      
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-3 border" id="services" role="tabpanel"
                                    aria-labelledby="services-tab" tabindex="0">
                                    <div data-spy="scroll" class="form-group row mb-3 crollspy-example-2">
                                        <div class="row targetDiv " id="div1">
                                            <div class="col-md-12 ">
                                                <div id="group2" class="services-duplicate">
                                                    <div class="row entry mb-2">
                                                        <!-- Field Start -->
                                                        <div class="col-md-12 col-md-5">
                                                           
                                                            <div class="form-group row">
                                                                
                                                                <div class="col-md-5">
                                                                    <input class="form-control " name="service_icon[]" type="text">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input class="form-control " name="service_name[]" type="text">
                                                                </div>
                                                                <div class="col-md-2 ">
                                                                    <button type="button" class="btn btn-success btn-sm btn-add">
                                                                        <i class="fa fa-plus" aria-hidden="true">+</i>
                                                                    </button>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade p-3 border d-none" id="timings" role="tabpanel"
                                    aria-labelledby="timings-tab" tabindex="0">
                                    <div class="row targetDiv " id="div1" >
                                        <div class="col-md-12 ">
                                            <div id="group2" class="timing-duplicate">
                                                <div class="row entry mb-2">
                                                    <!-- Field Start -->
                                                    <div class="col-md-12 col-md-5">
                                                       
                                                        <div class="form-group row">
                                                            
                                                            <div class="col-md-5">
                                                                <input class="form-control " name="timing[]" type="text">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input class="form-control " name="timing[]" type="text">
                                                            </div>
                                                            <div class="col-md-2 ">
                                                                <button type="button" class="btn btn-success btn-sm btn-add">
                                                                    <i class="fa fa-plus" aria-hidden="true">+</i>
                                                                </button>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                      
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
    <script src="{{asset('assets/admin/js/amenities.js')}}"></script>
    {{-- <script src="{{asset('assets/admin/js/service-offered.js')}}"></script> --}}
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
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        $(function() {
            toastr.error("{{$error}}");
        })
    </script>
    @endforeach
@endif
@endpush
