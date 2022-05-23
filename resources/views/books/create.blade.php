@extends('layouts.admin')

@section('title', 'Tambah Buku Baru')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('books.store') }}" method="post">
                @csrf


                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Authors table</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="author" class="form-control">
                        </div>

                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" name="description" class="form-control">
                        </div>

                        <div class="input-group input-group-outline">
                            <label class="form-label">Stok</label>
                            <input type="text" name="stock" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
