@extends('Admin.layouts.main')

@section('main')
<h1>Form peket desa</h1>
<form class="mx-auto" action="/admin/akomodasi/{{$akomodasi['id']}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    
    <input type="hidden" name="gambarOld" value="{{$akomodasi['gambar']}}">
    <div class="mb-5">
      <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama</label>
      <input type="text" value="{{$akomodasi['nama'],old('nama')}}" name="nama" id="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <div class="mb-5">
      <label for="gambar" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
      <img class="image-preview img-fluid mb-2">
      <input onchange="previewImage()" name="gambar" id="gambar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
    </div>
    <div class="mb-5">
        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kategori</label>
        <input type="text" value="{{$akomodasi['kategori'],old('kategori')}}" name="kategori" id="kategori" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
  </form>
  
  <script>
    // PreviewImage
    function previewImage() {
        const image = document.querySelector('#gambar');
        const imagePreview = document.querySelector('.image-preview');

        imagePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imagePreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection