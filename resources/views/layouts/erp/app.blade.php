@include('layouts.erp.head')
@yield('style')
</head>
<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            
            @include('layouts.erp.nav')

            @include('layouts.erp.sidebar')
            <!-- Main Content -->
            
            @yield('page')
            

            @include('layouts.erp.footer')

        </div>
    </div>
    <!-- General JS Scripts -->
    @yield('script')
@include('layouts.erp.script')
