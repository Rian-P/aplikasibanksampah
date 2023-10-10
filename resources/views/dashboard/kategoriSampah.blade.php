@extends('dashboard.layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <a href="/form-kategori" class="btn btn-primary mb-4"><i class="fa-solid fa-car pr-2"></i>Tambah
                            Kategori Sampah</a>
                        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>gambar</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $data)
                               <tr>
                                <td>
                                <img src="{{asset('storage/image/sampah/'.$data->foto)}}"
                                            awidth="100px" height="100px">
                                </td>
                                <td>{{$data->kategori}}</td>
                                <td>Rp.{{$data->harga}}/Kilo</td>
                                <td>Rp.{{$data->harga}}/Kilo</td>
                                <td>
                                <td>
                                        <form method="post"
                                            action="{{ route('kategori.hapus', ['id' => $data->id_kategori]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-lg  p-2 m-2"
                                                >
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                       
                                    </td>
                                </td>
                               </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection