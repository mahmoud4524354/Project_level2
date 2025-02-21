<!doctype html>
<html lang="en">

@include('admin.partials.head')


<body class="vertical  light @if(LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif ">
<div class="wrapper">

    @include('admin.partials.navbar')

    @include('admin.partials.sidebar')

    <main role="main" class="main-content">
        @yield('content')
    </main>

</div>

<!-- JavaScript Libraries -->
@include('admin.partials.scripts')

</body>
</html>
