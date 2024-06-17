<!DOCTYPE html>
<html>
@include('components.header')

<body>
    @include('components.navbar')
    {{-- @include('components.sidebar-superadmin') --}}
    <div class=" bg-gray-100 flex flex-col items-center  w-full px-4 sm:px-6 lg:px-8 h-screen">
        @yield('main')
    </div>
    @include('components.footer')
    @include('components.script')
</body>

</html>
