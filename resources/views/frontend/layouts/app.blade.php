<!DOCTYPE html>
<html lang="en" class="{{ $htmlClass ?? '' }}">

<head>
    <!-- ============================ Stylesheet, Meta Tag, Title ============================ -->
    @include('frontend.includes.partials.head')
    @yield('css')
</head>

<body class="{{ $bodyClass ?? '' }}">
    <!-- ============================ Start Contenet Area-->
    @yield('content')
    <!-- ============================ End Contenet area ============================ -->

    <!-- ============================ Start Script area ============================ -->
    @include('frontend.includes.partials.scripts')
    @yield('script')
    <!-- ============================ End Script area ============================ -->
</body>

</html>
