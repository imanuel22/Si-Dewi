
@extends('components.layout')


@section('main')
    profile
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{$profile['nama']}}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>:</td>
            <td>{{$profile['email']}}</td>
        </tr>
        <tr>
            <td>foto</td>
            <td>:</td>
            <td>{{$profile['foto']}}</td>
        </tr>
        <tr>
            <td>no telp</td>
            <td>:</td>
            <td>{{$profile['no_telp']}}</td>
        </tr>
    </table>
   
     
     


    <p>edit profile</p>
    <form class="max-w-sm mx-auto" action="/profile/update/{{$profile['id']}}" method="POST">
        @csrf
        @method('PATCH')
        <input type="hidden" name="fotoOld" value="{{$profile['foto']}}">
        <div class="mb-5">
          <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your nama</label>
          <input type="text"value="{{$profile['nama']}}" name="nama" id="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
          <input type="email"value="{{$profile['email']}}" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required />
        </div>
        <div
                class="mt-8 mb-5    block  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">foto </p>
                <hr class="h-px my-4  bg-gray-200 border-0 dark:bg-gray-700">
                <div class="mb-5">

                    <img class="image-preview img-fluid mb-2">
                    <input onchange="previewImage()" name="foto" id="foto"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
          <div class="mb-5">
            <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your no_telp</label>
            <input type="text" value="{{$profile['no_telp']}}" name="no_telp" id="no_telp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
          </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
      </form>

    <p>edit password</p>
    <form class="max-w-sm mx-auto" action="/profile/password/{{$profile['id']}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-5">
          <label for="oldpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your oldpassword</label>
          <input type="password" name="oldpassword" id="oldpassword" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
          <label for="newpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your newpassword</label>
          <input type="password" name="newpassword" id="newpassword" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
            <label for="repeatpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your repeatpassword</label>
            <input type="password" name="repeatpassword" id="repeatpassword" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
          </div>
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
      </form>


      <script>
        // PreviewImage
        function previewImage() {
            const image = document.querySelector('#foto');
            const imagePreview = document.querySelector('.image-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection