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
                                <input type="text" name="slug" class="form-control slugify" id="" value="{{$category->slug}}">
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
                                <label class="">Category Icon</label>
                                <input type="text" name="category_icon" class="form-control " id="" value="{{$category->image}}">
                                @error('category_icon')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                           
                            <div class="col-md-6">
                              
                                  <label for=""></label>
                                  <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="status" {{$category->stsus == 0 ? 'checked': ''}}>
                                    <label class="form-check-label" for="mySwitch">Status</label>
                                  </div>
                             
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label class="">Image</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body text-center">
                                                @if ($category->image)
                                                <img src="{{asset($category->image)}}" id="category_img" style="object-fit:contain;width: 100%;height: 100%;" alt="">
                                                @else
                                                <span class="text-center w-100">
                                                    <i class="icon icon-8xl text-light cil-image"></i>
                                                </span>
                                                @endif
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" name="image" id="fcat_image" class="form-control d-none" id="">
                                <label class="btn btn-success" for="fcat_image">Change</label>
                                <label class="btn btn-danger" for="" data-src="{{asset($category->image)}}" id="clear-preview">Reset</label>
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
                        </div> --}}

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
@push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
        $('#fcat_image').on('change', function(){
            $('#category_img').attr('src', window.URL.createObjectURL(this.files[0]))
        })
        $('#clear-preview').on('click', function(){
            $('#category_img').attr('src',$(this).attr('data-src'))
        })
    </script>
    @push('scripts')
    @if($message = Session::get('message'))
      <script>
      $(function(){
          toastr.success("{{ $message }}");
      })
      </script>                 
    @endif
    @if($message = Session::get('error'))
      <script>
      $(function(){
          toastr.error("{{ $message }}");
      })
      </script>                 
    @endif
    @endpush
@endpush
