@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                       
                       
                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast  @if (Session::has('isAdmin')) show @endif" class="toast fade show" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="toast-body">
                                    <div class="row">
                                       <div class="col-md-10">access denied</div>
                                       <div class="col-md-2"><button type="button" class="btn-close" data-coreui-dismiss="toast" aria-label="Close"></button></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
   
    @endsection
    @push('scripts')
    @endpush
