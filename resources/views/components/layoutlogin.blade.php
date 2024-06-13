<!DOCTYPE html>
<html>
@include('components.header')

<body>
    {{-- @include('components.sidebar-superadmin') --}}
    <div class="flex flex-col items-center justify-center w-full px-4 sm:px-6 lg:px-8">
        @yield('main')
    </div>
    @include('components.footer')
    @include('components.script')
</body>

</html>
