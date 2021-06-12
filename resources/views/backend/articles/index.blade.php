@extends('layouts.admin')
@section('content')

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Articles</h3>
          <a href="{{ route('backend_article_add')}}" class="btn btn-success btn-small pull-right">New article</a>
        </div>
        <div class="box-body table-responsive">
              <table id="articleTable" class="table table-striped table-hover">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Published at</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  
                <?php foreach($articles as $article): ?>
                <tr>
                  <form action="{{ route('backend_setting_set_home_page', $article->id) }}" method="POST" >
                    {{ csrf_field() }}
                    <td>{{ $article->id }}</td>
                    <td><img class="article-image" src="{{ $article->page_image }}"/></td>
                    <td>{{ $article->title }}</td>
                    <td>@if($article->category) {{ $article->category->name }} @endif</td>
                    <td>{{ $article->created_at }}</td>
                    <td style="width: 200px;">
                        <a class="btn btn-success" target="_blank" href="{{ route('frontend_post', $article->slug) }}"><i class="ion-eye"></i></a>
                        <a class="btn btn-info" href="{{ route('backend_articles_edit', $article->id) }}" ><i class="ion-edit"></i></a>
                        <a class="btn btn-danger" href="{{ route('backend_articles_delete', $article->id) }}"><i class="ion-trash-b"></i></a>
                        <button type="submit" class="btn btn-primary" >Home</button>
                    </td>
                  </form>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Articles
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
      $('#articleTable').DataTable();
    })
  </script>
@endsection

