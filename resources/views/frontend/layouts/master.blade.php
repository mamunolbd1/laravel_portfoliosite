<!DOCTYPE html>
<html lang="en">
   @include('frontend.layouts.partials.header')
    <body id="page-top">
        @include('frontend.layouts.partials.navbar')
        @yield('content')
       @include('frontend.layouts.partials.footer')
       @include('frontend.layouts.partials.script')
    </body>
</html>
