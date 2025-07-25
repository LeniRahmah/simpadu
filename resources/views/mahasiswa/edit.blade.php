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
                    <h3 class="mb-0">Edit Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Edit Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                            <h3 class="card-title">Edit Mahasiswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url("mahasiswa/$mahasiswa->nim") }}" method="post" 
                            enctype="multipart/form-data">
                          @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" name="nim" id="nim" 
                                    class="form-control @error('nim')is-invalid @enderror" value="{{ $mahasiswa->nim }}" disabled>
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
                                    class="form-control @error('nama')is-invalid @enderror" value="{{ $mahasiswa->nama }}">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>  
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggallahir" id="tanggallahir" 
                                     class="form-control @error('tanggallahir')is-invalid @enderror"value="{{ $mahasiswa->tanggallahir }}">
                                     @error('tanggallahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>   
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="telpon" class="form-label">Telpon</label>
                                    <input type="text" name="telp" id="telpon"
                                      class="form-control @error('telp')is-invalid @enderror"value="{{ $mahasiswa->telp }}">
                                      @error('telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>  
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" 
                                     class="form-control @error('email')is-invalid @enderror"  value="{{ $mahasiswa->email }}">
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
                                           <option value="{{ $p->id }}"
                                            {{ $p['id'] == $mahasiswa->id ? 'SELECTED' :'' }}>
                                            {{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form_group">
                                    <label class="form-label" for="foto">Upload Foto</label>
                                    <input type="file" class="form-control @error('file') is-invalid @enderror"
                                    id="foto" name="foto" />
                                    @error('file')
                                    <div class="invalid-feedback">
                                        {{ $message }}  
                                         </div>
                                    @enderror
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
                    <!-- /.card -->
                </div>
            </div>
                     <!--end::Row-->
        </div>
</main>
<!--end::App Main-->
@endsection
