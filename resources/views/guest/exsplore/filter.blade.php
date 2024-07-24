<div class="hidden md:block rounded-r-2xl rounded-t-none bg-white h-full w-1/6 drop-shadow pb-2">
    <div class="py-8 ">
        <form action="{{ route('jelajahi.filter') }}" method="GET">
            <h3 class="mb-4 text-center text-2xl font-bold text-gray-900 dark:text-white">Kategori Desa</h3>
            <div class="flex flex-col justify-center px-4">
                <ul class="w-full text-lg font-medium text-gray-900 bg-white dark:text-white">
                    <li class="w-full  border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" name="kategori[]" value="Maju"
                                {{ in_array('Maju', $selectedKategori) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox"
                                class="w-full py-3 ms-2 font-medium text-gray-900 dark:text-gray-300">Maju</label>
                        </div>
                    </li>
                    <li class="w-full  border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="react-checkbox" type="checkbox" name="kategori[]" value="Berkembang"
                                {{ in_array('Berkembang', $selectedKategori) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="react-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Berkembang</label>
                        </div>
                    </li>
                    <li class="w-full  border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="angular-checkbox" type="checkbox" name="kategori[]" value="Mandiri"
                                {{ in_array('Mandiri', $selectedKategori) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="angular-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Mandiri</label>
                        </div>
                    </li>
                    <li class="w-full  border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="laravel-checkbox" type="checkbox" name="kategori[]" value="Rintisan"
                                {{ in_array('Rintisan', $selectedKategori) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Rintisan</label>
                        </div>
                    </li>
                </ul>
            </div>
            <hr class="my-5">
            <h3 class=" mb-4 text-center text-2xl font-bold text-gray-900 dark:text-white">Kabupaten</h3>
            <div class="flex flex-col justify-center  px-4">
                <ul class="w-full text-lg font-medium text-gray-900 bg-white dark:text-white">
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="badung-checkbox" type="checkbox" name="kabupaten[]" value="Badung"
                                {{ in_array('Badung', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="badung-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Badung</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="bangli-checkbox" type="checkbox" name="kabupaten[]" value="Bangli"
                                {{ in_array('Bangli', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="bangli-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Bangli</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="buleleng-checkbox" type="checkbox" name="kabupaten[]" value="Buleleng"
                                {{ in_array('Buleleng', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="buleleng-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Buleleng</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="denpasar-checkbox" type="checkbox" name="kabupaten[]" value="Denpasar"
                                {{ in_array('Denpasar', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="denpasar-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Denpasar</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="gianyar-checkbox" type="checkbox" name="kabupaten[]" value="Gianyar"
                                {{ in_array('Gianyar', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="gianyar-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Gianyar</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="jembrana-checkbox" type="checkbox" name="kabupaten[]" value="Jembrana"
                                {{ in_array('Jembrana', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="jembrana-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Jembrana</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="karangasem-checkbox" type="checkbox" name="kabupaten[]"
                                value="Karangasem"
                                {{ in_array('Karangasem', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="karangasem-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Karangasem</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="klungkung-checkbox" type="checkbox" name="kabupaten[]" value="Klungkung"
                                {{ in_array('Klungkung', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="klungkung-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Klungkung</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="tabanan-checkbox" type="checkbox" name="kabupaten[]" value="Tabanan"
                                {{ in_array('Tabanan', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('form').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="tabanan-checkbox"
                                class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Tabanan</label>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>
