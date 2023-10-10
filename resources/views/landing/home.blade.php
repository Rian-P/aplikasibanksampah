@extends('landing.layouts.app')

@section('content')

<body>
    <section class="text-black-600 body-font my-16 mx-auto px-5 md:max-w-6xl">
        <div class="container border md:max-w-6xl bg-stone-100 mx-10 flex px-5 py-10  md:flex-row flex-col ">
            <div
                class="lg:flex-grow pl-10 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center">
                <p class=" text-[14px] text-gray-600 flex items-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.71 7.20998C18.617 7.11625 18.5064 7.04186 18.3846 6.99109C18.2627 6.94032 18.132 6.91418 18 6.91418C17.868 6.91418 17.7373 6.94032 17.6154 6.99109C17.4936 7.04186 17.383 7.11625 17.29 7.20998L9.84001 14.67L6.71001 11.53C6.61349 11.4367 6.49955 11.3634 6.37469 11.3142C6.24984 11.265 6.11651 11.2409 5.98233 11.2432C5.84815 11.2455 5.71574 11.2743 5.59266 11.3278C5.46959 11.3812 5.35825 11.4585 5.26501 11.555C5.17177 11.6515 5.09846 11.7654 5.04925 11.8903C5.00005 12.0152 4.97592 12.1485 4.97824 12.2827C4.98056 12.4168 5.00929 12.5493 5.06278 12.6723C5.11628 12.7954 5.19349 12.9067 5.29001 13L9.13001 16.84C9.22297 16.9337 9.33358 17.0081 9.45543 17.0589C9.57729 17.1096 9.708 17.1358 9.84001 17.1358C9.97202 17.1358 10.1027 17.1096 10.2246 17.0589C10.3464 17.0081 10.457 16.9337 10.55 16.84L18.71 8.67998C18.8115 8.58634 18.8925 8.47269 18.9479 8.34619C19.0033 8.21969 19.0319 8.08308 19.0319 7.94498C19.0319 7.80688 19.0033 7.67028 18.9479 7.54378C18.8925 7.41728 18.8115 7.30363 18.71 7.20998V7.20998Z"
                            fill="#198754" />
                    </svg>
                    PT aplikasi bank sampah
                </p>
                <p class="text-black-900 text-[25px] font-bold ">jadi perhatian bagi masyarakat mengenai sampah 
                </p>
                <p class="text-gray-700 text-base mb-8">menghasilkan uang dengan mengumpulkan sampah</p>  
            </div>
            <div class="lg:max-w-lg lg:w-full pl-5  w-6/6">
                <img class="lg:w-full" src="{{url('images/dashboard/people.png')}}"
                    alt="image description">
            </div>
        </div>
    </section>
    
    <section class=" py-1 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <form action="" class="space-y-4" method="post" enctype="multipart/form-data">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            User sampah
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama_pelanggan"
                                                class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Nama</label>
                                            <input type="text" name="nama" placeholder="Nama" value=""
                                                required
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Jumlah</label>
                                            <div class="flex">
                                                <button id="decrement" type="button"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded-l text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150">-</button>
                                                <input type="number" id="jumlah" name="jumlah"
                                                    placeholder="JumlahPer/Kilo" value="" required
                                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-r text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                <button id="increment" type="button"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded-r text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150">+</button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                    kategori
                                                </label>
                                                <select name="kategori" id="kategori" onchange="hitungTotal()" required
                                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                    <option selected disabled value="">-- Opsi kategori sampah --
                                                    </option>

                                                    @foreach($kategori as $data)
                                                    <option value="{{$data->id_kategori}}" data-harga='{{$data->harga}}'>{{ $data->kategori }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                       
                                        <div class="mb-3">
                                            <label for="nama_pelanggan"
                                                class="block uppercase text-blueGray-600 text-xs font-bold mb-2">total</label>
                                            <input type="text" id="total" name="total" placeholder="Total Harga" readonly
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        </div>
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                            <i class="fa-solid fa-floppy-disk mr-2"></i> Booking
                                        </button>
                                </div>

                            </div>
                    </form>
                </div>
    </section>


</body>


<script>
    function hitungTotal() {
        const jumlah = parseFloat(document.getElementById('jumlah').value);
        const kategoriSelect = document.getElementById('kategori');
        const selectedOption = kategoriSelect.options[kategoriSelect.selectedIndex];
        const harga = parseFloat(selectedOption.getAttribute("data-harga"));
        const totalField = document.getElementById('total');

        if (!isNaN(harga) && !isNaN(jumlah)) {
            const total = harga * jumlah;
            totalField.value = total.toFixed(0);
        } else {
            totalField.value = '';
        }
    }
</script>

<script>

const decrementButton = document.getElementById('decrement');
const incrementButton = document.getElementById('increment');
const jumlahInput = document.getElementById('jumlah');

decrementButton.addEventListener('click', () => {
    // Kurangi nilai input jumlah jika lebih dari 0
    if (parseInt(jumlahInput.value) > 0) {
        jumlahInput.value = parseInt(jumlahInput.value) - 1;
    }
});

// Tambahkan event listener untuk tombol increment
incrementButton.addEventListener('click', () => {
    // Tambahkan 1 ke nilai input jumlah
    jumlahInput.value = parseInt(jumlahInput.value) + 1;
});
</script>

</html>
@endsection