<!DOCTYPE html>
<html lang="en">


<head>

    @include('partials.meta')
    <title>Endeavour tech | Blog</title>

    @include('partials.style')
</head>

<body>

    <!-- start cssload-loader -->
    <div id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->
    <!--======================================
        START HEADER AREA
    ======================================-->
    @include('partials.header')
    <!--======================================
            END HEADER AREA
    ======================================-->
    @yield('content')

    <!-- ================================
         END FOOTER AREA
================================= -->
    @include('partials.footer')
    <!-- ================================
          END FOOTER AREA
================================= -->

    <!-- start back to top -->
    <div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end back to top -->

    <!-- template js files -->
    @include('partials.scripts')
</body>

</html>
