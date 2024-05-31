<!DOCTYPE html>
<html>
@include('admin.layouts.header')
<body>
    @include('admin.layouts.navbar')
    @include('admin.layouts.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="mt-14">
            @yield('main')
        </div>
     </div>
    @include('admin.layouts.footer')
    @include('admin.layouts.script')
</body>
</html>
