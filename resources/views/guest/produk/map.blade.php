<div class=" text-justify p-6">
    <h1 class="font-semibold text-xl">Lokasi Desa</h1>
    <p class="text-xl">{{ $desa['alamat'] }} / {{ $desa['kabupaten'] }} </p>
    @if (isset($desa['maps'][1]))
        <div class="relative mt-3 " style="height: 300px;">
            <iframe class="rounded-xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15777.346005471349!2d{{ explode(',', $desa['maps'])[1] }}!3d{{ explode(',', $desa['maps'])[0] }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOeKdu-OpzOyYoiAtIDE1NSwgNDEuMjMgU08sIFRyYW5zYWN0aW9uIENodW5rcyBSZWQsIE1vYmlsZSBLaW5nZG9tLCBTYW5zIFJvYWQ!5e0!3m2!1sen!2sid!4v1623872036346!5m2!1sen!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    @endif
</div>
