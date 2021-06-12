@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Sliders</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
        <div class="box-body">
          <table class="table table-striped">
                <tbody><tr>
                  <th>Slide Image</th>
                  <th>Actions</th>
                </tr>
                <tr>
                    <form method="POST" action="{{ route('backend_sliders_create') }}" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <td>
                          <input type="file" name="img_path" class="form-control" />
                          @if($errors->has('img_path'))
                          <small class='text-danger'>{{$errors->first('img_path')}}</small>
                          @endif
                        </td>
                       
                        <td style="width: 200px;">
                            <button class="btn btn-success" type="submit">Add to slider</button>
                        </td>
                    </form>
                </tr>
                @foreach($sliders as $slide)
                  <tr>
                    <td><img src="{{ $slide->img_path }}" alt="" height="150px"></td>
                    <td><a class="btn btn-danger" href="{{ route('backend_sliders_delete', $slide->id) }}">Delete</a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
  </div>
</div>
@endsection