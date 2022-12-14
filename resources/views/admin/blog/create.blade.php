@extends('admin.layouts.master')
@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">

                <div class="card mb-5">
                    <div class="card-header d-flex justify-content-between">
                        <h4>blog Post</h4>

                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/blog-post') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            {{-- 
                            @foreach ($parentCategories as $category)
 
                            {{$category->name}}

                            @if (count($category->subcategory))
                            @include('admin.blog.category.subCategoryList',['subcategories' => $category->subcategory])
                            @endif 
                            @endforeach
                            --}}

                            <div class="form-group row mb-3">
                                <div class="col-md-6">
                                    <label class="">Category</label>
                                    <select name="category_id" id="" class="form-select">
                                        <option selected disabled>select category</option>
                                        @foreach ($parentCategories as $category)
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
                                    <input type="text" name="slug"  class="form-control slugify" id="">
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-12">Description</label>
                                <div class="col-md-12">
                                    <textarea name="blog_description" id="editor"></textarea>
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
                            <h6>Status Mode</h6>
                            <div class="form-group row mb-3">

                                <div class="col-md-6">
                                    <div class="col-md-12"></div>
                                    <label class="">Status</label>
                                    <input type="checkbox" name="status" id="">
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="">Navbar Status</label>
                                    <input type="checkbox" name="navbar_status" id="">
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
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            allowedContent: true,
            extraAllowedContent: '*(*);*{*}'
        });

      
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
                    toastr.error("{{ $error }}");
                })
            </script>
        @endforeach
    @endif

@endpush
