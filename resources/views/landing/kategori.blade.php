@extends('landing.layouts.app')

@section('content')
<section class="text-gray-600 body-font">
        <div class="container mx-auto py-36">
            <div class="flex flex-wrap justify-center">
                @foreach ($jenis as $row)
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-2 ">
                    <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden shadow-lg ">
                        <a href="/">
                            <img class="w-full h-64 object-cover"
                                src=""
                                alt="">
                        </a>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $row->nama }}</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <p class="text-gray-700 text-sm mb-2">{{ $row->harga }} </p>
                            <p class="text-gray-700 text-sm mb-2">{{ $row->jenis }}</p>
                            <p class="text-gray-700 text-sm mb-2"> {{ $row->deskripsi }}g
                            </p>
                            <p class="text-gray-700 text-sm mb-2"></p>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endsection