@extends('admin.layouts.master')
@section('content')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link href="{{asset('vendors/@coreui/icons/css/free.min.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>  --}}
    <style>
        .pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:3;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:2;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}
    </style>
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
              
                <div class="card mb-5">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Blog Categories</h4>
                        <a class="btn btn-success text-white" href="{{ url('admin/blog-category/create') }}">
                            Add New Category</a>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->updated_at }}</td>
                                        <td>
                                            <div class=" d-flex ">
                                                <a class="btn btn-outline-success p-1 " href="{{ url('admin/blog-category/'.$category->id.'/edit') }}">
                                                    <i class="icon icon-2xl mb-2 cil-pen"></i>
                                                </a>
                                                <a class=" btn btn-outline-danger p-1" href="{{ url('admin/blog-category/'.$category->id.'/destroy') }}">
                                                    <i class="icon icon-2xl mb-2 cil-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    {{-- no experts found --}}
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
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
