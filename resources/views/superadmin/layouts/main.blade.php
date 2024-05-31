<!DOCTYPE html>
<html>
@include('superadmin.layouts.header')
<body>
    @include('superadmin.layouts.navbar')
    @include('superadmin.layouts.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="mt-14">
            @yield('main')
        </div>
     </div>
    @include('superadmin.layouts.footer')
    @include('superadmin.layouts.script')
</body>
</html>
