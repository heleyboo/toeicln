@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Menu management</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('backend_menus_create') }}">
        {{ csrf_field() }}
        <input type="hidden" name="parent" value="" />
        <div class="box-body">
          <div class="input-group input-group-sm col-md-3">
            <input type="text" name="name" class="form-control">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-info btn-flat">Add menu</button>
              </span>
          </div>
          <br/>
          <table class="table table-striped table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Created at</th>
                  <th>Actions</th>
                </tr>
                <?php foreach($menus as $menu): ?>
                <tr>
                  <td>{{ $menu->id }}</td>
                  <td>{{ $menu->name }}</td>
                  <td>{{ $menu->created_at }}</td>
                  <td style="width: 200px;">
                      <a class="btn btn-info" href="{{ route('backend_menus_edit', $menu->id) }}" ><i class="ion-edit"></i> View | Edit</a>
                      <a class="btn btn-danger" href="{{ route('backend_menus_delete', $menu->id) }}"><i class="ion-trash-b"></i> Delete</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
      </form>
    </div>
  </div>
</div>
@endsection

