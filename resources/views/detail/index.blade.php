@extends('adminlte::page')
{{-- @section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Detail Brang</h1>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@section('title', 'Dasboard')
@section('content_header')
   detail barang
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{--  Detail Barang --}}
                        <a href="{{ route('detail.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            detail</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="detail">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        {{-- <th>Id</th> --}}

                                        <th>Nama Barang</th>
                                        <th>Harga Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($detail as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            {{-- <td>{{$data->id}}</td> --}}
                                            <td>{{ $data->nama_barang }}</td>
                                            <td>{{ $data->harga_produk }}</td>
                                            <td>{{ $data->deskripsi }}</td>
                                            <td>Rp. {{ number_format($data->harga, 2) }}</td>
                                            <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:150px;"
                                                    alt="Cover"></td>
                                            <td>
                                                <form action="{{ route('barang.destroy', $data->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{route('barang.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                                    <a href="{{ route('barang.show', $data->id) }}"
                                                        class="btn btn-outline-warning">Show</a>
                                                    <button type="submit" class="btn btn-outline-danger"
                                                        onclick="return confirm('Apakah anda yakin menghapusnya')">Delete</button>
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
@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection
@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}">
    </script>
    <script>
        $(document).ready(function() {
            $('#detail').DataTable();
        });
    </script>
@endsection
