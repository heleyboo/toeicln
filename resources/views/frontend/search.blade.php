@extends('layouts.frontend')
@section('content')
    @include('layouts.frontend_particals.slider')
      <div class="row body-content">
        <div class="col-md-3">
          @include('layouts.frontend_particals.sidebar_left')
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><b>Kết quả tìm kiếm cho từ khoá:</b> {{ $key }}</li>
          </ol>
            @foreach($articles as $article)
            <div class="row blog-item">
              <div class="col-md-3">
                <a href="{{ route('frontend_post', $article->slug) }}">
                <img class="thumbnail" width="100%;" src="{{ $article->page_image }}" alt="">
                </a>
              </div>
              <div class="col-md-9">
                <a  class="blog-title" href="{{ route('frontend_post', $article->slug) }}"><h1>{{ $article->title }}</h1></a>
                {!!html_entity_decode($article->subtitle)!!}
                <br>
                <a class="btn btn-info btn-sm btn-flat pull-right" href="{{ route('frontend_post', $article->slug) }}">ĐỌC TIẾP</a> 
              </div>
            </div>
            <hr/>
            @endforeach
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
          @include('layouts.frontend_particals.sidebar_right')
        </div>
      </div>

    @include('layouts.frontend_particals.footer')
@endsection

    
    
