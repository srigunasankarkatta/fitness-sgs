@extends('admin.layouts.master')
@section('content')
   
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
              
                <div class="card mb-5">
                    <div class="card-header d-flex justify-content-between">
                        <h4>blog Category</h4>
                        
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/blog-category/'.$category->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row mb-3">
                                <div class="col-md-6">
                                    <label class="">Name</label>
                                    <input type="text" name="name" value="{{$category->name}}" class="form-control" id="">
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
                                    <textarea name="description" id="" class="form-control">{{$category->name}}</textarea>
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
                            </div>
                            <h6>Meta tags</h6>
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
                                    <textarea name="meta_description" id="" class="form-control">{{$category->meta_keyword}}</textarea>
                                </div>
                                @error('meta_description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <h6>Status Mode</h6>
                            <div class="form-group row mb-3">

                                <div class="col-md-6">
                                    <div class="col-md-12"></div>
                                    <label class="">Status</label>
                                    <input type="checkbox" name="status" id="" {{$category->status == 0 ? 'checked' : ''}}>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="">Navbar Status</label>
                                    <input type="checkbox" name="navbar_status"  id="" {{$category->navbar_status == 0 ? 'checked' : ''}}>
                                    @error('navbar_status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                            </div>
    
                            <div class="  d-flex justify-content-center">
                                <button class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
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
    </script>

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
