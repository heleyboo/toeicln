@extends('layouts.admin')
@section('content')
<div class="box">
<div class="box-header with-border">
          <h3 class="box-title">Categories</h3>
          <a href="{{ route('backend_category_add')}}" class="btn btn-success pull-right">Add Category</a>
        </div>
        <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
                <?php foreach($categories as $category): ?>
                <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td>{{ $category->description}}</td>
                  <td style="width: 200px;">
                      <a class="btn btn-success" href="{{ route('backend_category_view', $category->id)}}"><i class="ion-eye"></i></a>
                      <a class="btn btn-info" href="{{ route('backend_category_edit', $category->id)}}" ><i class="ion-edit"></i></a>
                      <a class="btn btn-danger" href="{{ route('backend_category_delete', $category->id) }}"><i class="ion-trash-b"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody></table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Categories
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
@endsection