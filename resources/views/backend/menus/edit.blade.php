@extends('layouts.admin')
@section('content')
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs pull-right">
    <li class=""><a href="#post" data-toggle="tab" aria-expanded="false">Add post to menu</a></li>
    <li class=""><a href="#category" data-toggle="tab" aria-expanded="false">Add category to menu</a></li>
    <li class="active"><a href="#items" data-toggle="tab" aria-expanded="true">Menu items</a></li>
    <li class="pull-left header"><i class="fa fa-th"></i> {{ $menu->name }}</li>
  </ul>
  <div class="tab-content">
    <!-- /.tab-pane -->
    <div class="tab-pane" id="post">
      <table id="categoryTable" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Post title</th>
            <th>Add to item</th>
            <th>Text label</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($articles as $article)
          <tr>
              <form action="{{ route('backend_menuitems_create') }}" method="POST" >
                {{ csrf_field() }}
                <input type="hidden" name="menu_id" value="{{ $menu->id }}" />                
                <input type="hidden" name="link" value="{{ route('frontend_post', $article->slug) }}" />
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>
                  Add to: 
                  <select name="parent_id" id="">
                    @foreach($rootMenuItems as $parentItem)
                    <option value="{{ $parentItem->id }}">{{ $parentItem->text }}</option>
                    @endforeach
                  </select>
                </td>
                <td><input type="text" name="text" class="form-control" value="{{ $article->title }}" /></td>
                <td>
                  <button class="btn btn-success" type="submit">Add</button>
                </td>
              </form>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="category">
      <table id="postTable" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Add to item</th>
            <th>Text label</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr>
              <form action="{{ route('backend_menuitems_create') }}" method="POST" >
                {{ csrf_field() }}
                <input type="hidden" name="menu_id" value="{{ $menu->id }}" />
                
                <input type="hidden" name="link" value="{{ route('frontend_category', $category->slug) }}" />
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                  Add to: 
                  <select name="parent_id" id="">
                    <option value="0">Root menu item</option>
                    @foreach($rootMenuItems as $parentItem)
                    <option value="{{ $parentItem->id }}">{{ $parentItem->text }}</option>
                    @endforeach
                  </select>
                </td>
                <td><input type="text" name="text" class="form-control" value="{{ $category->name }}" /></td>
                <td>
                  <button class="btn btn-success" type="submit">Add</button>
                </td>
              </form>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="tab-pane active table-responsive" id="items">
      <table id="menuItemTable" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Parent item</th>
            <th>Depth</th>
            <th>Text</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rootMenuItems as $item)
          <tr>
            <form action="{{ route('backend_menuitems_update', $item->id) }}" method="POST" >
              {{ csrf_field() }}
              <input type="hidden" name="menu_id" value="{{ $menu->id }}" >
              <td>{{ $item->id }}</td>
              <td>{{ $item->parent_id }}</td>
              <td>{{ $item->depth }}</td>
              <td><input type="text" name="text" class="form-control" value="{{ $item->text }}" ></td>
              <td>
                <button class="btn btn-success" type="submit">Update</button>
                <a href="{{ route('backend_menuitems_delete', $item->id) }}" class="btn btn-danger" type="submit">Delete</a>
              </td>
            </form>
          </tr>
            @foreach($item->children as $childItem)
            <tr>
              <form action="{{ route('backend_menuitems_update', $childItem->id) }}" method="POST" >
                {{ csrf_field() }}
                <input type="hidden" name="menu_id" value="{{ $menu->id }}" >
                <td>{{ $childItem->id }}</td>
                @if($childItem->parent_id === 0)
                  <td>{{ $childItem->parent_id }}</td>
                @else
                  <td>
                    <select name="parent_id" id="">
                      @foreach($rootMenuItems as $parentItem)
                        <option value="{{ $parentItem->id }}" @if($parentItem->id === $childItem->parent_id) selected  @endif>{{ $parentItem->text }}</option>
                      @endforeach
                    </select>
                  </td>
                @endif
                <td>{{ $childItem->depth }}</td>
                <td><input type="text" name="text" class="form-control" value="{{ $childItem->text }}" ></td>
                <td>
                  <button class="btn btn-success" type="submit">Update</button>
                  <a href="{{ route('backend_menuitems_delete', $childItem->id) }}" class="btn btn-danger" type="submit">Delete</a>
                </td>
              </form>
            </tr>
            @endforeach
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.tab-pane -->
  </div>
  <!-- /.tab-content -->
</div>

<div class="box box-success">
  <div class="box-header">
    Navigation
  </div>
  <div class="box-body">
    <a href="{{ route('backend_menus') }}" class="btn btn-primary">Back to menus</a>
  </div>
</div>

@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('scripts')
  <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script>
  $(function () {
    $('#categoryTable').DataTable();
    $('#postTable').DataTable();
  })
</script>
@endsection

