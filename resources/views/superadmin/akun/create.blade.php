@extends('superadmin.layouts.main')

@section('main')
    <div class="mx-4">
        <h2 class=" mb-3  font-bold tracking-tight text-gray-500 ">Akun / Tambah </h2>
        <p class=" text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Tambah Akun </p>
        <form class="mx-auto" action="/superadmin/akun" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class=" mt-8 mb-5  block  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Info Akun </p>
                <hr class="h-px my-4  bg-gray-200 border-0 dark:bg-gray-700">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 ">
                    <div class="mb-5">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>
                    <div class="mb-5">
                        <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                            Telephone</label>
                        <input type="text" name="no_telp" id="no_telp"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>
                    <div class="mb-5">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>
                    <div class="mb-5">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
                        <input type="text" name="password" id="password"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>
                </div>
                <div class="mb-5">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Role</label>
                    <select id="role" name="role"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option hidden>Pilih Role</option>
                        <option value="ADMIN">Admin</option>
                        <option value="USER">User</option>
                        <option value="SUPERADMIN">Super Admin</option>
                    </select>
                </div>
            </div>
            <div
                class=" mt-8 mb-5    block  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Foto Profil </p>
                <hr class="h-px my-4  bg-gray-200 border-0 dark:bg-gray-700">
                <div class="mb-5">
                    <img class="image-preview img-fluid mb-2">
                    <input onchange="previewImage()" name="foto" id="foto"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <button type="reset"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
        </form>
    </div>

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
