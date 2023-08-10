@extends('adminlte::page')
<div class="modal fade" id="editService-{{ $services->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{route('service.update',$services->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control  @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{$details->nama_barang}}">
                            @error('nama_produk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input type="number" class="form-control  @error('harga_detail') is-invalid @enderror" name="harga_detail" value="{{$details->harga_detail}}">
                            @error('harga_detail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="floatingTextarea">Description</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deskripsi">{{$detail->deskripsi}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" name="status">
                                {{-- <option value="null" aria-readonly="false">Status</option> --}}
                                <option value="aktif">Aktif</option>
                                <option value="tidak aktif">Tidak Aktif</option>
                            </select>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
