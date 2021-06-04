
<?php $__env->startSection('title', 'Author'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Author</h1>
</div><!-- /.col -->
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a
href="<?php echo e(route('dashboard.index')); ?>">Home</a></li>
<li class="breadcrumb-item active">Author</li>
</ol>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
<div class="card">
<div class="card-header">
<div class="d-flex justify-content-between">
<h3 class="card-title">Data table of Author</h3>
<a href="<?php echo e(route('authors.create')); ?>" class="btn btn-sm btn-success"><i
class="fas fa-plus"></i> Create</a>
</div>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="table-authors" class="table table-bordered table-striped">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Picture</th>
<th>Address</th>
<th>Total Published News</th>
<th>Terakhir diubah</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($loop->iteration); ?></td>
<td><?php echo e($author->name); ?></td>
<td><a href="<?php echo e($author->picture); ?>">Lihat Gambar</a></td>
<td><?php echo e($author->address); ?></td>
<td><?php echo e($author->news->count()); ?></td>
<td><?php echo e($author->updated_at); ?></td>
<td>
<a href="<?php echo e(route('authors.edit', [$author->id])); ?>"
class="btn btn-warning float-left m-1">Edit</a>
<form class="float-left m-1"
action="<?php echo e(route('authors.destroy', [$author->id])); ?>" method="POST">
<?php echo method_field('delete'); ?>
<?php echo csrf_field(); ?>
<button type="submit" class="btn btndanger">Delete</a>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<tfoot>
<tr>
<th>#</th>
<th>Name</th>
<th>Picture</th>
<th>Address</th>
<th>Total Published News</th>
<th>Terakhir diubah</th>
<th>Action</th>
</tr>
</tfoot>
</table>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatablesresponsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatablesresponsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script>
$(function() {
$("#table-authors").DataTable({
"responsive": true,
"autoWidth": false,
});
});
</script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatablesbs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatablesresponsive/css/responsive.bootstrap4.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admins.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\UMM\Semester4\Praktikum\web\tryLaravel\modul5\resources\views/authors/index.blade.php ENDPATH**/ ?>