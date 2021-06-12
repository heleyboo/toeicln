@extends('layouts.admin')
@section('content')
@include('layouts.backend_particals.fmodal')
<div class="row">
        <form method ="POST" action="{{ route('backend_article_create')}}" enctype="multipart/form-data" >
        <div class="col-md-9">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Add article</h3>
                    <a href="{{ route('backend_articles')}}" class="btn btn-success btn-small pull-right">List article</a>
                </div>
                <div class="box-body">
                    <!-- /.box-header -->
                    <!-- form start -->
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('category_id'))
                        <small class='text-danger'>{{$errors->first('category_id')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label >Title</label>
                        <input class="form-control" name="title" value="">
                        @if($errors->has('title'))
                        <small class='text-danger'>{{$errors->first('title')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label >Slug(Url)</label>
                        <input class="form-control" name="slug" value="">
                        @if($errors->has('slug'))
                        <small class='text-danger'>{{$errors->first('slug')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label >Sort description</label>
                        <input class="form-control" name="subtitle" value="">
                        @if($errors->has('subtitle'))
                        <small class='text-danger'>{{$errors->first('subtitle')}}</small>
                        @endif
                    </div>
                    <div class="form-group"> 
                        <label >Content</label>
                        <textarea name="content" id="editor"></textarea>
                    </div>
                    <div class="form-group"> 
                        <label>Tags</label>
                        <select name="tags[]" class="form-control select2 select2-hidden-accessible" multiple>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group"> 
                        <label >Meta Description</label>
                        <input type="text" name="meta_description" class="form-control">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-right" id="article-update-btn">Publish article</button>
                    </div>
                </div>
            </div>
        <div class="col-md-3">
            <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Image</h3>
                    </div>
                    <div class="box-body">
                        <div class="box-footer">
                            <input type="file" name="page_image" />
                            @if($errors->has('page_image'))
                            <small class='text-danger'>{{$errors->first('page_image')}}</small>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Publish article</h3>
                    </div>
                    <div class="box-body">
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success btn-block" id="article-update-btn">Publish article</button>
                        </div>
                    </div>
            </div>
        </div>
    </form>
    </div>

@endsection

@section('styles')
    
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ckeditor/config.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ckeditor/styles.js') }}"></script>
    <script>
            /**
         * Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
         * For licensing, see LICENSE.md or http://ckeditor.com/license
         */

        /* exported initSample */

        if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
            CKEDITOR.tools.enableHtml5Elements( document );

        // The trick to keep the editor in the sample quite small
        // unless user specified own height.
        CKEDITOR.config.height = 500;
        CKEDITOR.config.width = 'auto';

        var initSample = ( function() {
            var wysiwygareaAvailable = isWysiwygareaAvailable(),
                isBBCodeBuiltIn = !!CKEDITOR.plugins.get( 'bbcode' );

            return function() {
                var editorElement = CKEDITOR.document.getById( 'editor' );

                // :(((
                if ( isBBCodeBuiltIn ) {
                    editorElement.setHtml(
                        'Hello world!\n\n' +
                        'I\'m an instance of [url=http://ckeditor.com]CKEditor[/url].'
                    );
                }

                // Depending on the wysiwygare plugin availability initialize classic or inline editor.
                if ( wysiwygareaAvailable ) {
                    CKEDITOR.replace( 'editor', {
                        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
	                    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                    } );
                } else {
                    editorElement.setAttribute( 'contenteditable', 'true' );
                    CKEDITOR.inline( 'editor' );

                    // TODO we can consider displaying some info box that
                    // without wysiwygarea the classic editor may not work.
                }
            };

            function isWysiwygareaAvailable() {
                // If in development mode, then the wysiwygarea must be available.
                // Split REV into two strings so builder does not replace it :D.
                if ( CKEDITOR.revision == ( '%RE' + 'V%' ) ) {
                    return true;
                }

                return !!CKEDITOR.plugins.get( 'wysiwygarea' );
            }
        } )();

        initSample();
    </script>
@endsection

