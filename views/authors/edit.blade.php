@extends('admins.layouts.master')
@section('title', 'Edit Suppliers')
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
href="{{ route('admins.index') }}">Home</a></li>
<li class="breadcrumb-item"><a
href="{{ route('authors.index') }}">Author</a></li>
<li class="breadcrumb-item active">Edit</li>
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
<h3 class="card-title">Edit Data</h3>
</div>
<!-- /.card-header -->
<form action="{{ route('authors.update', [$author->id]) }}" method="POST">
@CSRF
@method('put')
<div class="card-body">
<div class="row">
<div class="col-6">
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" class="form-control @error('name')
is-invalid @enderror" placeholder="Supplier Name">
<small class="text-danger">@error('name') {{$message}}
@enderror</small>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="picture">Picture(link)</label>
<input type="text" name="picture" class="form-control @error('picture')
is-invalid @enderror">
<small class="text-danger">@error('picture') {{$message}}
@enderror</small>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="addres">Address</label>
<input type="text" name="addres" class="form-control @error('addres')
is-invalid @enderror" >
<small class="text-danger">@error('addres') {{$message}}
@enderror</small>
</div>
</div>
</div>
</div>
<!-- /.row -->
<div class="card-footer">
<div class="d-flex justify-content-end">
<a href="{{ route('authors.index') }}" class="m-1 btn btn-outlinedanger">Back</a>
<button type="submit" class="m-1 btn btn-success">Update</button>
</div>
</div>
</form>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection