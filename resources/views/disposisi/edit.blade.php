<x-layout>
  <title>Edit Disposisi</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Disposisi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/suratmasuk">Surat Masuk</a></li>
              <li class="breadcrumb-item"><a href="{{route('disposisi.index', $suratmasuk->id)}}">Disposisi</a></li>
              <li class="breadcrumb-item active">Edit Disposisi</li>
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
                          <form action="{{ route('disposisi.update', $suratmasuk->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                          <div class="form-group">
                            <label>Disposisi :</label>
                            <input type="file" name="disposisi" class="form-control" value="{{$suratmasuk->disposisi}}">
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