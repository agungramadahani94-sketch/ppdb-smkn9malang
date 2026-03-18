@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Halaman Sekolah</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>List Sekolah</h4>
                                <a href="{{ route('sekolah.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus mr-2"></i>
                                    Tambah Sekolah
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md ">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Sekolah</th>
                                            <th>Alamat Sekolah </th>
                                            <th>Telpon</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($sekolah as $item)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $item->nama_sekolah }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->no_telp }}</td>
                                                    <td>{{ $item->email }}</td>


                                                    <td>
                                                        <a href="{{ route('sekolah.edit', $item->id) }}"
                                                            class="btn btn-primary btn-sm">
                                                            <i class="fas fa-edit mr-2"></i>
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('sekolah.destroy', $item->id) }}" method="POST"
                                                            style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-trash mr-2"></i>
                                                                Hapus
                                                            </button>
                                                        </form>


                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>


                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
    </div>
@endsection