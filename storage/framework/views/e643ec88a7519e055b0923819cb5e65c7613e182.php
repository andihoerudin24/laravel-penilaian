<?php $__env->startSection('assets-top'); ?>

<link href="<?php echo e(asset('datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('datatables/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <div class="card-title">Data Penialaian</div>
        <?php if(session('sukses')): ?>
        <div class="alert alert-info">
          <?php echo e(session('sukses')); ?>

        </div>
        <?php elseif(session('edit')): ?>
        <div class="alert alert-warning">
                <?php echo e(session('edit')); ?>

              </div>
        <?php elseif(session('hapus')): ?>
        <div class="alert alert-danger">
                <?php echo e(session('hapus')); ?>

              </div>
       <?php endif; ?>

    </div>
    <div class="card-body">
        <div class="card-sub">
           <a href="<?php echo e(route('penilaian.create')); ?>" class="btn btn-danger btn-sm">Tambah data</a>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Nis</th>
                <th>Pelanggaran</th>
                <th>Bobot Pelanggaran</th>
                <th>Keterangan</th>
                <th></th>
              </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nis</th>
                    <th>Pelanggaran</th>
                    <th>Bobot Pelanggaran</th>
                    <th>Keterangan</th>
                    <th></th>
            </tfoot>
            <tbody>

            </tbody>
          </table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('assets-bottom'); ?>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo e(asset('datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('datatables/dataTables.bootstrap4.min.js')); ?>"></script>
    <!-- Responsive examples -->
    <script src="<?php echo e(asset('datatables/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('datatables/responsive.bootstrap4.min.js')); ?>"></script>
    <script>
        $(document).ready(function(){
            $("#dataTable").DataTable({
                processing :true,
                serverSide :true,
                ajax       :"<?php echo e(route('api.datatable.penilaian')); ?>",
                columns:[
                    {data: 'DT_Row_Index',orderable: false, searchable: false},
                    {data: 'nama',               name: 'nama' },
                    {data: 'nis',                name: 'nis' },
                    {data: 'pelanggaran',        name: 'pelanggaran' },
                    {data: 'bobot',              name: 'bobot' },
                    {data: 'keterangan',         name: 'keterangan' },
                    {data: 'action',             name: 'action', orderable:false, seacrhable:false},
              ]
            })
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>