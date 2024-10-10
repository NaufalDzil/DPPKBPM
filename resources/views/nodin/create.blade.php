<x-layout>
  <title>Tambah Nota Dinas</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Nota Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('nodin.index')}}">Nota Dinas</a></li>
              <li class="breadcrumb-item active">Tambah Nota Dinas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

                        <!-- general form elements -->
                        <div class="card card-primary">
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form action="{{route('nodin.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
        
                            <div class="form-group">
                              <label>Tanggal Penomoran :</label>
                              <input type="date" name="tanggal_penomoran" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                              <label>Alamat Penerima :</label>
                              <input type="text" name="alamat" class="form-control" placeholder="Alamat Penerima" required>
                            </div>

                            <div class="form-group">
                              <label>Tanggal Surat :</label>
                              <input type="date" name="tanggal_surat" class="form-control" required>
                            </div>

                            <div class="form-group">
                              <label>Perihal :</label>
                              <input type="text" name="perihal" class="form-control" placeholder="Perihal" required>
                            </div>

                            <div class="form-group">
                              <label>Surat: <small class="text text-muted">(Maksimal ukuran file 2MB)</small></label>
                              <input type="file" name="surat" class="form-control">
                          </div>
        
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                            </div>
                        </form>
                        </div>
                        
                        <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  
  


  </x-layout>