<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
              <li class="breadcrumb-item"><a href="<?php echo e(route('suratmasuk.index')); ?>">Surat Masuk</a></li>
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
                 <a href="<?php echo e(route('disposisi.cetak', $suratmasuk->id)); ?>" class="btn btn-primary float-sm-right"><i class="fa fa-print"></i> Cetak Disposisi</a>
                <?php if($suratmasuk->disposisi): ?>
                  <a href="<?php echo e(route('disposisi.edit', $suratmasuk->id)); ?>" class="btn btn-danger"><i class="fas fa-edit"></i> Edit Disposisi</a>
                  <?php else: ?>
                  <a href="<?php echo e(route('disposisi.create', $suratmasuk->id)); ?>" class="btn btn-success"><i class="fas fa-plus-circle"></i> Unggah Disposisi</a>
                  <?php endif; ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php if($suratmasuk->disposisi): ?>
                <iframe src="<?php echo e(asset('storage/pdf/' . $suratmasuk->disposisi)); ?>" width="100%" height="600px"></iframe>
                <?php else: ?>
                <h5><b> Disposisi Masih Kosong, Silakan Unggah Disposisi Terlebih Dahulu!</b></h5>
                <?php endif; ?>
              
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
  
  


   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\Kuliah\Magang\Web\Web Fix\DPPKBPM\resources\views\disposisi\index.blade.php ENDPATH**/ ?>