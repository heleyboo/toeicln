@extends('layouts.admin')
@section('content')
<div class="box">
<form method="POST" action="{{ route('backend_document_create') }}">
{{ csrf_field() }}
  <div class="box-header with-border">
      <h3 class="box-title">Add Documents</h3>
      <button type="submit" id="submitForm" class="btn btn-success btn-small pull-right">Add</button>
  </div>
  <div class="box-body">
    <div class="form-group">
      <label for="text">Document text</label>
      <input type="text" class="form-control" name="text" id="text" placeholder="Enter document text">
      @if($errors->has('text'))
          <small class='text-danger'>{{$errors->first('text')}}</small>
      @endif
    </div>
    <div class="form-group">
      <label for="text">Document path</label>
      <input type="text" name="link" id="documentPath" class="form-control" />
      @if($errors->has('link'))
          <small class='text-danger'>{{$errors->first('link')}}</small>
      @endif
    </div>
    </form>
    <div class="form-group">
      <label for="text">Select from uploaded file</label><br>
      <select name="" id="selectFile" class="form-controll">
        @foreach($files as $file)
          <option value="{{ $file['webPath'] }}">{{ $file['webPath'] }}</option>
        @endforeach
      </select>
    </div>
    OR <br><br>
    <div class="form-group">
      <form method="POST" action="{{ route('backend_documents_upload') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <span class="btn btn-success fileinput-button">
          <i class="glyphicon glyphicon-plus"></i>
          <span>Select files...</span>
          <!-- The file input field used as target for the file upload widget -->
          <input id="fileupload" type="file" name="file">
      </span>
      </form>
    </div>
    <div class="form-group">
      <div id="progress" class="progress">
          <div class="progress-bar progress-bar-success"></div>
      </div>
    </div>
  </div>
</div>
<div class="box">
<div class="box-header with-border">
          <h3 class="box-title">Documents</h3>
</div>

        <div class="box-body table-responsive no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th colspan="2">Document text</th>
                  <th>Link</th>
                  <th>Action</th>
                </tr>
                <?php foreach($documents as $document): ?>
                <tr>
                  <td colspan="2">
                    <input type="text" name="text" class="form-control" value="{{ $document->text }}" />
                  </td>
                  <td>
                    {{ $document->link }}
                  </td>
                  <td style="width: 200px;">
                      <a class="btn btn-success" href="{{ route('backend_document_edit', $document->id)}}">Edit</a>
                      <a class="btn btn-danger" href="{{ route('backend_document_delete', $document->id)}}">Delete</a>
                  </td>
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
  <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
  <link rel="stylesheet" href="{{ asset('fileupload/css/jquery.fileupload.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('fileupload/js/vendor/jquery.ui.widget.js') }}"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="{{ asset('fileupload/js/jquery.iframe-transport.js') }}"></script>
<!-- The basic File Upload plugin -->
<script src="{{ asset('fileupload/js/jquery.fileupload.js') }}"></script>
<script>
/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    $('#selectFile').change(function() {
      $('#documentPath').val($(this).val());
    });
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'https://jquery-file-upload.appspot.com/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $('#documentPath').val(data.result.url);
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
@endsection