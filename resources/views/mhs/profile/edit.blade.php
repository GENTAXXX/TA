@extends('mhs.layout')

@section('title')
Profile Mahasiswa
@endsection

@section('konteng')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">User Profile</li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <a class="nav-link" href="#settings" data-toggle="tab">Pengaturan</a>
                </div><!-- /.card-header -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" action="{{ route('profile.update', $mhs->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" class="form-control" name="nama" value="{{ $mhs->nama }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="NIM">NIM:</label>
                                        <input type="text" class="form-control" name="NIM" value="{{ $mhs->NIM }}" />
                                    </div>

                                    <div class="form-group">
                                        <label for="telepon">Telepon:</label>
                                        <input type="number" class="form-control" name="telepon" value="{{ $mhs->telepon }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="pengalaman">Pengalaman:</label>
                                        <textarea class="form-control" name="pengalaman" value="{{ $mhs->pengalaman }}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="jurusan_id">Jurusan:</label>
                                        <select name="jurusan_id" class="form-control">
                                            <option value="">- Pilih Jurusan -</option>
                                            @foreach($jurusan as $jur)
                                            <option value="{{ $jur['id'] }}">{{ $jur->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="skill_id">Skill:</label>
                                        <select name="skill_id" class="form-control">
                                            <option value="">- Pilih Skill -</option>
                                            @foreach($skill as $skill)
                                            <option value="{{ $skill['id'] }}">{{ $skill->skill }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                                        <select name="jenis_kelamin" class="form-control">
                                            <option value="">- Pilih Jenis Kelamin -</option>
                                            @foreach($gender as $gender)
                                            <option value="{{ $gender }}">{{ $gender }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir:</label>
                                        <input type="date" class="form-control" name="tgl_lahir" value="{{ $mhs->tgl_lahir }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto:</label>
                                        <input type="file" class="form-control" name="foto" value="{{ $mhs->foto }}" />
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection