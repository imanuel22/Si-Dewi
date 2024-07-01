@extends('components.layoutlogin')
<style>

</style>
@section('main')
    @if (session()->has('message'))
        <div id="toast-success"
            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('message') }}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif



    <div class="w-full h-full grid grid-cols-1 sm:grid-cols-2">
        <div class="h-full w-full hidden sm:block">
            <img src="" alt="">
        </div>
        <div
            class="w-full  bg-white  rounded shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 flex justify-center items-center">

            <div class="w-full max-w-lg mx-7">
                <p class="-mt-24 mx-1 mb-24 text-6xl font-semibold font-poppins  text-gray-900 dark:text-white ">Login </p>
                <form class="mt-7" action="/dologin" method="POST">
                    @csrf
                    <div class="mb-14">
                        <input type="email" name="email" id="email"
                            class="border-none text-xl  w-full placeholder-gray-500 bg-transparent py-2 focus:ring-transparent focus:border-none block   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Email" required />
                        <hr class="h-1 mx-4  bg-black border-0 dark:bg-gray-700">
                    </div>
                    <div class="mb-5">

                        <input type="password" name="password" id="password"
                            class=" border-none text-xl  p-4 w-full placeholder-gray-500 bg-transparent py-2 focus:ring-transparent focus:border-none  block   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Password" required />
                        <hr class="h-1 mx-4 bg-black border-0 dark:bg-gray-700">
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class= " shadow-lg text-white px-10 rounded-xl text-2xl mt-10 bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium   py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
