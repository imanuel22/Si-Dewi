@foreach ($berita as $row)
<div class="">
    <img width="1200"
        src="{{ env('APP_API_URL') }}/resource/berita/{{ $row['gambar'] }}"
        alt="{{ $row['judul'] }}">
</div>    
@endforeach($berita as $row)
