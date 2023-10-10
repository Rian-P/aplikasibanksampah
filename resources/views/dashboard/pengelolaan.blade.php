@extends('dashboard.layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        
                        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kategori Sampah</th>
                                    <th>Nama</th>         
                                    <th>Jumlah Sampah Per/Kilo</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jenis as $jenis)
                                <tr>
                                    
                                    <td class="font-weight-bold">{{$jenis->nama_kategori}}</td>
                                    <td>{{$jenis->nama}}</td>
                                    <td>{{$jenis->jumlah}} Kilo</td>
                                    <td>Rp. {{ number_format($jenis->total, 0, ',', '.') }}</td>
                                    <td>
                                        <form method="post"
                                            action="{{ route('jenis.hapus', ['id' => $jenis->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-lg  p-2 m-2"
                                                >
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                       
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