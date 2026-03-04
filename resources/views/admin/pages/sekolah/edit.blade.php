@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Halaman Edit Sekolah</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Form Edit Sekolah</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('sekolah.update', $sekolah->id) }}" method="POST">
                            @csrf
                           @method('PUT')

                            <div class="row">

                                <div class="col-12">
                                    <label>Nama Sekolah</label>
                                    <input type="text" class="form-control" name="nama_sekolah"
                                        value="{{ $sekolah->nama_sekolah }}">
                                </div>

                                <div class="col-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $sekolah->email }}">
                                </div>

                                <div class="col-6">
                                    <label>Telepon</label>
                                    <input type="text" class="form-control" name="no_telp" value="{{ $sekolah->no_telp }}">
                                </div>

                                <div class="col-12">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="alamat">{{ $sekolah->alamat }}</textarea>
                                </div>

                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-primary">
                                       Update
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection