@include('layout.erp.head')
@yield('style')
</head>
<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            
            @include('layout.erp.nav')

            @include('layout.erp.sidebar')
            <!-- Main Content -->
            
            @yield('page')
            

            @include('layout.erp.footer')

        </div>
    </div>
    <!-- General JS Scripts -->
    @yield('script')
@include('layout.erp.script')
