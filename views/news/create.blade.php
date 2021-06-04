@extends('admins.layouts.master')
@section('title', 'Create News')
@section('content')
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
href="{{ route('admins.index') }}">Home</a></li>
<li class="breadcrumb-item"><a
href="{{ route('news.index') }}">News</a></li>
<li class="breadcrumb-item active">Create</li>
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
<h3 class="card-title">Create Data</h3>
</div>
<!-- /.card-header -->
<form action="{{ route('news.store') }}" method="POST">
@CSRF
<div class="card-body">
<div class="column">
<div class="col-6">
<div class="form-group">
<label for="title">Title</label>
<input type="text" name="title" class="form-control @error('title')
is-invalid @enderror">
<small class="text-danger">@error('title') {{$message}}
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
<label for="content">Content</label>
<input type="text" name="content" class="form-control @error('content')
is-invalid @enderror" >
<small class="text-danger">@error('content') {{$message}}
@enderror</small>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="is_published">Publish</label>
<select type="int" name="is_published" class="form-control @error('is_published')
is-invalid @enderror" >
<option>0</option>
<option>1</option>
</select>
<small class="text-danger">@error('is_published') {{$message}}
@enderror</small>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="name">Author</label>
<select type="text" name="name" class="form-control @error('name')
is-invalid @enderror" >
@foreach($authors as $author)
<option value="{{$author->id}}">{{$author->name}}</option>
@endforeach
</select>
<small class="text-danger">@error('name') {{$message}}
@enderror</small>
</div>
</div>
</div>
</div>
<!-- /.row -->
<div class="card-footer">
<div class="d-flex justify-content-end">
<a href="{{ route('news.index') }}" class="m-1 btn btn-outlinedanger">Back</a>
<button type="submit" class="m-1 btn btn-success">Create</button>
</div>
</div>
</form>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection