@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Settings</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
        <div class="box-body">
          <table class="table table-striped table-hover">
                <tbody><tr>
                  <th>Setting Id</th>
                  <th>Name</th>
                  <th>Value</th>
                  <th>Actions</th>
                </tr>
                <tr>
                    <form method="POST" action="{{ route('backend_setting_create') }}">
                         {{ csrf_field() }}
                        <td>
                          <input type="text" name="setting_id" class="form-control" value=""/>
                        </td>
                        <td>
                            <input type="text" name="name" class="form-control" value=""/>
                        </td>
                        <td>
                            <input type="text" name="value" class="form-control" value=""/>
                        </td>
                        <td style="width: 200px;">
                            <button class="btn btn-success" type="submit">Add setting</button>
                        </td>
                    </form>
                </tr>
                <?php foreach($settings as $setting): ?>
                <tr>
                    <form method="POST" action="{{ route('backend_setting_update', $setting->id) }}">
                         {{ csrf_field() }}
                        <td>{{ $setting->name }}</td>
                        <td colspan="2">
                            <input type="text" name="value" class="form-control" value="{{ $setting->value }}"/>
                        </td>
                        <td style="width: 200px;">
                            <button class="btn btn-info" type="submit">Update</button>
                        </td>
                    </form>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
  </div>
</div>
@endsection