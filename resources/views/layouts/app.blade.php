<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
@include('layouts.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
       @include('layouts.header')
        <div class="body flex-grow-1 px-3">
            @yield('content')
        </div>
   @include('layouts.footer')
    </div>
@include('layouts.scripts')
</body>

</html>
