@extends('Admin.layouts.main')

@section('main')
<h1>Form peket desa</h1>
<form class="mx-auto" action="/admin/informasi/{{$informasi['id']}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="mb-5">
      <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">no_telp</label>
      <input value="{{$informasi['no_telp'],old('no_telp')}}" type="text" name="no_telp" id="no_telp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  />
    </div>
    <div class="mb-5">
      <label for="no_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">no_wa</label>
      <input value="{{$informasi['no_wa'],old('no_wa')}}" type="text" name="no_wa" id="no_wa" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  />
    </div>
    <div class="mb-5">
      <label for="facebook" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">facebook</label>
      <input value="{{$informasi['facebook'],old('facebook')}}" type="text" name="facebook" id="facebook" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  />
    </div>
    <div class="mb-5">
      <label for="instagram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">instagram</label>
      <input value="{{$informasi['instagram'],old('instagram')}}" type="text" name="instagram" id="instagram" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  />
    </div>
    <div class="mb-5">
      <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">website</label>
      <input value="{{$informasi['website'],old('website')}}" type="text" name="website" id="website" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  />
    </div>
    <div class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
      <input value="{{$informasi['email'],old('email')}}" type="text" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  />
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
  </form>
  
@endsection