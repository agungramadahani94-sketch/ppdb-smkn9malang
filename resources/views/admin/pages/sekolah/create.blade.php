@extends('admin.layouts.app')

@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Halaman Tambah Sekolah</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Form Tambah Sekolah</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('sekolah.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <label for="name">Nama Sekolah</label>
                                    <input type="text" class="form-control" id="name" placeholder="Masukan Nama Sekolah"
                                        name="nama_sekolah">
                                </div>

                                <div class="col-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukan email"
                                        name="email">
                                </div>

                                <div class="col-6">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" id="telepon" placeholder="Masukan no telepon"
                                        name="no_telp">
                                </div>


                                <div class="col-12">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" placeholder="Masukan Alamat"
                                        name="alamat"></textarea>
                                </div>




                        </form>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">
                                Tambah
                            </button>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </section>
    </div>
@endsection