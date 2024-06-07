<!doctype html>
<html>

<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    {{-- container start --}}
    <div class="container h-screen">
        {{-- navbar start --}}
        @include('partials.navbar')

        {{-- navbar end --}}
        {{-- background --}}
        <div class="img "> 
            <img src="{{ asset('storage/img/background.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        {{-- background --}}
        {{-- content --}}
        <div class="mx-72 mt-10 h-screen w-screen ">
            <div class="des">
            </div>

        </div>
        <div class="mx-72 mt-10 h-screen">
            <div class="kon">
                <h1 class="text-2xl font-bold mb-4 text-center">Desa Kintamani</h1>
            </div>
            <div class= "mb-48 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti cupiditate, culpa ipsa cum inventore, hic impedit in iste tempora voluptatum dolores. Maiores aut incidunt quia facilis, eius vero hic labore unde, aperiam ullam placeat! Harum distinctio aliquam voluptatibus, delectus, deleniti, necessitatibus error dolorum culpa esse perferendis consectetur a incidunt ratione nobis aperiam magni qui ab sequi quo similique voluptatem consequatur dicta? Rerum architecto recusandae vitae esse atque fuga error quidem minus, voluptates fugit. Expedita ut illum unde itaque excepturi, ducimus laborum perspiciatis dignissimos. Eveniet, aliquam ullam voluptatum repudiandae suscipit maiores quos voluptatibus eum ipsam quas deserunt rem iure consequatur at!
            </div>
        <div>
                {{-- tab --}}
                <div class="sm:hidden">

                    <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Profile</option>
                        <option>Dashboard</option>
                        <option>setting</option>
                        <option>Invoioce</option>
                    </select>
                </div>
                <ul class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                    <li class="w-full focus-within:z-10">
                        <a href="#" class="inline-block w-full p-4 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-blue-500 dark:text-white" aria-current="page">Profile</a>
                    </li>
                    <li class="w-full focus-within:z-10">
                        <a href="#" class="inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-blue-800 dark:hover:bg-blue-700 dark:text-gray-400">Dashboard</a>
                    </li>
                    <li class="w-full focus-within:z-10">
                        <a href="#" class="inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-blue-800 dark:hover:bg-blue-700">Settings</a>
                    </li>
                    <li class="w-full focus-within:z-10">
                        <a href="#" class="inline-block w-full p-4 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg  hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-blue-800 dark:hover:bg-blue-700">Invoice</a>
                    </li>
                </ul>

                {{-- tab --}}
        </div>
        {{-- content end --}}
    </div>    
    {{-- container end --}}
</body>
</html>