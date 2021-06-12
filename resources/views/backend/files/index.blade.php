@extends('layouts.admin')
@section('content')

      <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <?php foreach($data['breadcrumbs'] as $key => $value): ?>
                <?php if($key === '/'): ?>
                  <li><a href="{{ route('backend_files') }}"><i class="fa fa-folder"></i> {{ $value }}</a></li>
                <?php else: ?>
                  <li><a href="{{ route('backend_files') . '?folder=' . $key  }}">{{ $value }}</a></li>
                <?php endif; ?>
              <?php endforeach; ?>
              <li>{{ $data['folderName'] }}</li>
            </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add a folder</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{ route('backend_files_add_folder') }}">
              {{ csrf_field() }}
              <input type="hidden" name="parent" value="{{ $data['folder'] }}" />
              <div class="box-body">
                <div class="input-group input-group-sm">
                  <input type="text" name="folder_name" class="form-control">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Add</button>
                    </span>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Files</h3>

        </div>
        <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
                <tbody><tr>
                  <th>File name</th>
                  <th>Type</th>
                  <th>Date</th>
                  <th>Size</th>
                  <th>Actions</th>
                </tr>
                <?php foreach($data['subfolders'] as $key => $value): ?>
                <tr>
                  <td colspan="4">
                  <a href="{{ route('backend_files') . '?folder=' . $key  }}">
                  <i data-v-598c3e4b="" class="ion-filing"></i> {{ $value }}
                  </a>
                  </td>
                  <td style="width: 200px;">
                    <a class="btn btn-danger" 
                    href="{{ route('backend_files_del_folder') . '?del_folder=' . $value . '&folder=' . $data['folder'] }}">
                    <i class="ion-trash-b"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
                <?php foreach($data['files'] as $file): ?>
                <tr>
                  <td>
                  <a href="{{ $file['webPath'] }}">
                  <i data-v-598c3e4b="" class="ion-document-text"></i> {{ $file['name'] }}
                  </a>
                  </td>
                  <td>{{ $file['mimeType'] }}</td>
                  <td>{{ $file['modified'] }}</td>
                  <td>{{ $file['size'] }}</td>
                  <td style="width: 200px;">
                    <a class="btn btn-danger" href="{{ route('backend_files_delete_file') . '?path=' . $file['fullPath'] }}"><i class="ion-trash-b"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
              </table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Files
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
@endsection

