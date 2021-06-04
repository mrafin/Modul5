@extends('admins.layouts.master')
@section('title', 'Author')
@section('content')
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
href="{{ route('dashboard.index') }}">Home</a></li>
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
<a href="{{ route('authors.create') }}" class="btn btn-sm btn-success"><i
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
@foreach ($authors as $author)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $author->name }}</td>
<td><a href="{{ $author->picture }}">Lihat Gambar</a></td>
<td>{{ $author->address }}</td>
<td>{{ $author->news->count() }}</td>
<td>{{ $author->updated_at }}</td>
<td>
<a href="{{ route('authors.edit', [$author->id]) }}"
class="btn btn-warning float-left m-1">Edit</a>
<form class="float-left m-1"
action="{{ route('authors.destroy', [$author->id]) }}" method="POST">
@method('delete')
@csrf
<button type="submit" class="btn btndanger">Delete</a>
</form>
</td>
</tr>
@endforeach
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
@endsection
@push('script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatablesresponsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatablesresponsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
$(function() {
$("#table-authors").DataTable({
"responsive": true,
"autoWidth": false,
});
});
</script>
@endpush
@push('css')
<link rel="stylesheet" href="{{ asset('plugins/datatablesbs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatablesresponsive/css/responsive.bootstrap4.min.css') }}">
@endpush