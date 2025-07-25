@extends('template.main')
@section('content')
<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Tambah Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container_fluid">
            <!--begin::Row-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Mahasiswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url('mahasiswa') }}" method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" name="nim" id="nim" 
                                    class="form-control @error('nim')is-invalid @enderror">
                                    @error('nim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>   
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" 
                                     class="form-control @error('password')is-invalid @enderror">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>  
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" 
                                    class="form-control @error('nama')is-invalid @enderror">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>  
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggallahir" id="tanggallahir" 
                                     class="form-control @error('tanggallahir')is-invalid @enderror">
                                    @error('tanggallahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>   
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="telpon" class="form-label">Telpon</label>
                                    <input type="text" name="telp" id="telpon"
                                      class="form-control @error('telp')is-invalid @enderror">
                                    @error('telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>  
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" 
                                     class="form-control @error('email')is-invalid @enderror">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>   
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="id" class="form-label">Prodi</label>
                                    <select class="form-select" name="id" id="id">
                                        @foreach ($prodi as $p)
                                           <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form_group">
                                    <label class="form-label" for="foto">Upload Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" />
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="index.php" class="btn btn-warning">kembali</a>
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </div>
                        </form>
                        <!-- /.card-body -->

                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection
