<x-layout>
  <title>Disposisi</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Disposisi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('suratmasuk.index')}}">Surat Masuk</a></li>
              <li class="breadcrumb-item active">Disposisi</li>
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

            <div class="card">
              <div class="card-header">
                 <a href="{{route('disposisi.cetak', $suratmasuk->id)}}" class="btn btn-primary float-sm-right"><i class="fa fa-print"></i> Cetak Disposisi</a>
                @if ($suratmasuk->disposisi)
                  <a href="{{route('disposisi.edit', $suratmasuk->id)}}" class="btn btn-danger"><i class="fas fa-edit"></i> Edit Disposisi</a>
                  @else
                  <a href="{{route('disposisi.create', $suratmasuk->id)}}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Unggah Disposisi</a>
                  @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if ($suratmasuk->disposisi)
                <iframe src="{{ asset('storage/pdf/' . $suratmasuk->disposisi) }}" width="100%" height="600px"></iframe>
                @else
                <h5><b> Disposisi Masih Kosong, Silakan Unggah Disposisi Terlebih Dahulu!</b></h5>
                @endif
              
              </div>
              <!-- /.card-body -->
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
  <!-- /.content-wrapper -->
  
  


  </x-layout>