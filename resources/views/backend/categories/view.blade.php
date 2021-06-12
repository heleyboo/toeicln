@extends('layouts.admin')
@section('content')

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>
              <a href="{{ route('categories_view')}}" class="btn btn-success pull-right">List Category</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" value="{{$category->name}}" disabled>
                </div>
                <div class="form-group">
                  <label for="name">Slug</label>
                  <input type="text" class="form-control" value="{{$category->slug}}" disabled>
                </div>
                <div class="form-group">
                  <label for="path">Path</label>
                  <input type="text" class="form-control" value="{{$category->path}}" disabled>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" value="{{$category->description}}" disabled>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
@endsection