@extends('dashboard.layouts.app')

@section('content')


<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="modal-header">
                            <h5 class="modal-title"><strong>Tambah Data Pemesan</strong></h5>
                        </div>

                        <form action="{{ route('jenis.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">jenis</label>
                                <input type="text" name="jenis" class="form-control" placeholder="jenis" value=""
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama" value=""
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi"
                                    value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">foto</label>
                                <input type="file" accept=".png, .jpg, .jpeg" class="form-control" name="foto"
                                    id="exampleFormControlInput1" placeholder="Foto Kendaraan" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">harga</label>
                                <input type="text" name="harga" class="form-control" placeholder="harga" value=""
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary"><i
                                    class="fa-solid fa-floppy-disk mr-2"></i>Simpan</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        @endsection