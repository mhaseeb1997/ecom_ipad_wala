<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
    @include('admin.layout.left-sidebar')
    @yield('content')
</div>
@include('admin.layout.script')
</body>
</html>
