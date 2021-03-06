@extends('mitra.layout')

@section('title')
Tambah Lowongan
@endsection

@section('konteng')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Buat Lowongan</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('mitra/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Pengajuan Proposal Dosen Pembimbing</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- TABLE: PROPOSAL -->
    <section class="content">
        <div class="container-fluid">
            <section>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Buat Lowongan</h3>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('lowongan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Lowongan</label>
                                <input type="text" class="form-control" name="nama" autofocus />
                            </div>
                            <div class=" form-group">
                                <label>Deskripsi Lowongan</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                            </div>
                            <div class=" form-group">
                                <label>Jumlah Mahasiswa</label>
                                <input type="number" class="form-control" name="jumlah_mhs" />
                            </div>
                            <div class="form-group">
                                <label>Durasi Magang</label>
                                <input type="text" class="form-control" name="durasi" />
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" />
                            </div>
                            <div class="form-group">
                                <label>Mitra</label>
                                <select class="form-control" name="mitra_id">
                                    <option value="">- Pilih Mitra -</option>
                                    @foreach ($mitra as $mitra)
                                    <option value="{{ $mitra->id }}">{{ $mitra->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    <option value="">- Pilih Kategori -</option>
                                    @foreach ($kategori as $kat)
                                    <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="number" class="form-control" name="telepon" />
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto" />
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
</div>
@endsection