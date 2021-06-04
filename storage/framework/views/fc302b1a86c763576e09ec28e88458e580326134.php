
<?php $__env->startSection('title', 'News'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">News</h1>
</div><!-- /.col -->
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a
href="<?php echo e(route('dashboard.index')); ?>">Home</a></li>
<li class="breadcrumb-item active">News</li>
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
<h3 class="card-title">Data table of News</h3>
<a href="<?php echo e(route('news.create')); ?>" class="btn btn-sm btn-success"><i
class="fas fa-plus"></i> Create</a>
</div>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="table-news" class="table table-bordered table-striped">
<thead>
<tr>
<th>#</th>
<th>Title</th>
<th>Picture</th>
<th>Content</th>
<th>Published</th>
<th>Author</th>
<th>Terakhir diubah</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($loop->iteration); ?></td>
<td><?php echo e($news->title); ?></td>
<td><?php echo e($news->picture); ?></td>
<td><?php echo e($news->content); ?></td>
<th>
        <?php if ($news->is_published==0) { ?> 
            <span class="badge badge-danger">Not Published</span>
        <?php }else{ ?>
            <span class="badge badge-success">Published</span>
        <?php }?>
</th>

<td><?php echo e($news->updated_at); ?></td>
<td>
<a href="<?php echo e(route('news.edit', [$news->id])); ?>"
class="btn btn-warning float-left m-1">Edit</a>
<form class="float-left m-1"
action="<?php echo e(route('news.destroy', [$news->id])); ?>" method="POST">
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
<th>Title</th>
<th>Picture</th>
<th>Content</th>
<th>Published</th>
<th>Author</th>
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
$("#table-news").DataTable({
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
<?php echo $__env->make('admins.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\UMM\Semester4\Praktikum\web\tryLaravel\modul5\resources\views/news/index.blade.php ENDPATH**/ ?>