@extends('layouts.frontend')

@section('title')
Trung tâm ngoại ngữ TOEIC LN - {{$article->title}}
@endsection
@section('content')
    @include('layouts.frontend_particals.slider')
      <div class="row body-content">
        <div class="col-md-3">
          @include('layouts.frontend_particals.sidebar_left')
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><h1 class="article-title">{{$article->title}}</h1></li>
          </ol>
          {!!html_entity_decode($article->content['html'])!!}
          <div class="fb-like" data-href="<?php echo route('frontend_post', $article->slug) ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
          @include('layouts.frontend_particals.sidebar_right')
        </div>
      </div>

    @include('layouts.frontend_particals.footer')
@endsection