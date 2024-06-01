@extends('components.layout')
@section('main')
<form action="/admin/berita/{{$berita['id']}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        {{-- Gambar --}}
        <div class="flex items-center justify-center h-96 mb-5 rounded">
            <div class="w-full px-3">
                <label for="message" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Gambar
                    Banner</label>
                    <input type="hidden" name="gambarOld" value="{{$berita['gambar']}}">
                <img src="" alt="" class="h-72 mb-3">
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file" name="gambar">
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
            </div>
        </div>

        <div class="w-full px-3">
            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                Berita</label>
            <input  value="{{$berita['judul'],old('judul')}}" type="text" id="address" name="judul"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        {{-- Deskripsi --}}
        <div class="flex items-center justify-center h-96 mb-3 mt-3 rounded">
            <div class="w-full px-3">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Isi Berita</label>
                <textarea id="message" rows="15"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Leave a comment..." name="isi_berita">{{$berita['isi_berita'],old('isi_berita')}}</textarea>

            </div>
        </div>
        <div class="px-3 flex gap-4">
            <button type="submit"
                class="w-full mb-5 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Preview</button>
            <button type="submit"
                class="w-full mb-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
        </div>
    </div>
</form>

@endsection
