@extends('layouts.admin')
@section('content')

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Create new tag</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form method="POST" action="{{ route('backend_tag_create') }}">
  {{ csrf_field() }}
    <div class="box-body">
      <div class="form-group">
        <label for="tagName">Tag name</label>
        <input type="text" class="form-control" id="tagName" name="tag" placeholder="Enter tag name">
        @if($errors->has('tag'))
          <small class='text-danger'>{{$errors->first('tag')}}</small>
        @endif
        
      </div>
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        @if($errors->has('title'))
          <small class='text-danger'>{{$errors->first('title')}}</small>
        @endif
      </div>
      <div class="form-group">
        <label for="metaDescription">Meta description</label>
        <input type="text" class="form-control" id="metaDescription" name="meta_description" placeholder="Meta description">
        @if($errors->has('meta_description'))
          <small class='text-danger'>{{$errors->first('meta_description')}}</small>
        @endif
      </div>
      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>



<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tags</h3>
  </div>
    <div class="box-body table-responsive">
          <table class="table table-striped" id="tagTable">
                <thead>
                  <tr>
                  <th>Tag name</th>
                  <th>Title</th>
                  <th>Meta description</th>
                  <th>Actions</th>
                  </tr>
                </thead>
            <tbody>
            <?php foreach($tags as $tag): ?>
            <tr>
              <form method="POST" action="{{ route('backend_tag_update', $tag->id) }}">
              {{ csrf_field() }}
                <td>{{ $tag->tag }}</td>
                <td><input type="text" name="title" class="form-control" value="{{ $tag->title }}" /></td>
                <td> <textarea name="meta_description" class="form-control" id="" rows="5">{{ $tag->meta_description }}</textarea></td>
                <td style="width: 200px;">
                  <button type="submit" class="btn btn-success">Update</button>
                  <a class="btn btn-danger" href="{{ route('backend_tag_delete', $tag->id)}}">Delete</a>
                </td>
              </form>
            </tr>
            <?php endforeach; ?>
          </tbody>
          </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->
@endsection


@section('styles')
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('scripts')
  <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script>
    $(function () {
      $('#tagTable').DataTable();
    })
  </script>
@endsection