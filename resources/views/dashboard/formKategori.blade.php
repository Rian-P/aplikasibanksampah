@extends('dashboard.layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 style="padding-bottom: 1%; font-weight: bold;">Kategori
                            Sampah</h1>
                        <form action="/insert-kategori" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1"
                                    class="form-label">Gambar</label>
                                <input type="file" name="foto"
                                    class="form-control"
                                    placeholder="Janis Sampah"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1"
                                    class="form-label">Jenis Sampah</label>
                                <input type="text" name="kategori"
                                    class="form-control"
                                    placeholder="Janis Sampah"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1"
                                    class="form-label">Harga/Kilo</label>
                                <input type="number" name="harga"
                                    class="form-control"
                                    placeholder="Harga Per/Kilo"
                                    required>
                            </div>
                            <div class="col-span-full mb-3">
                                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                                <div class="mt-2">
                                  <textarea name="deskripsi" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                              
                              </div>

                            <button type="submit" class="btn btn-primary"><i
                                    class="fa-solid fa-floppy-disk mr-2"></i>Simpan</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endsection