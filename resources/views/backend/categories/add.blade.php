@extends('layouts.admin')
@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Category</h3>
      <a href="{{ route('categories_view')}}" class="btn btn-success pull-right">List Category</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    
    <form method="POST" action="{{ route('backend_category_create')}}">
    {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="">
          @if($errors->has('name'))
          <small class='text-danger'>{{$errors->first('name')}}</small>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="">
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection