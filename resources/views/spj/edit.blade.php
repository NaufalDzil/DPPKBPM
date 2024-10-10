<x-layout>
  <title>Edit SPJ UMPEG</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit SPJ UMPEG</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('spj.index')}}">SPJ UMPEG</a></li>
              <li class="breadcrumb-item active">Edit SPJ UMPEG</li>
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
                          <form action="{{ route('spj.update', $spj->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                            <div class="form-group">
                              <label>Tanggal :</label>
                              <input type="date" name="tanggal" class="form-control" value="{{$spj->tanggal}}" required>
                          </div>
                            
                            <div class="form-group">
                              <label>Nama Kegiatan :</label>
                              <input type="text" name="nama_kegiatan" class="form-control" value="{{$spj->nama_kegiatan}}" required>
                          </div>

                          <div class="form-group">
                            <label>Surat :</label>
                            <input type="file" name="surat" class="form-control" value="{{$spj->surat}}">
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