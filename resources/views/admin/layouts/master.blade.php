<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
@include('admin.inc.head')
@stack('styles')
</head>

<body>
    @include('admin.inc.side_bar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('admin.inc.header')
        <div class="body flex-grow-1 px-3">
            @yield('content')
        </div>
        @include('admin.inc.footer')
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('vendors/chart.js/js/chart.min.js') }}"></script>
    {{-- <script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script> --}}
    <script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "3000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
       
        $('.slugify').on('input', function(){
            let slugStr = $(this).val();
            const patt1 = 'àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìıİłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;'
            const patt2 = 'aaaaaaaaaacccddeeeeeeeegghiiiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------'
            const patt = new RegExp(patt1.split('').join('|'), 'g')

            let res = slugStr.toString().toLowerCase()
                            .replace(/\s+/g, '-') // Replace spaces with -
                            .replace(patt, c => patt2.charAt(patt1.indexOf(c))) // Replace special characters
                            .replace(/&/g, '-and-') // Replace & with 'and'
                            .replace(/[^\w\-]+/g, '-') // Remove all non-word characters
                            .replace(/\-\-+/g, '-') // Replace multiple - with single -
                            .replace(/^-+/, '') // Trim - from start of text
                            // .replace(/-+$/, '') // Trim - from end of text
            $(this).val(res)
        })
    </script>

    @stack('scripts')
</body>

</html>
