
<div class="card">
    <div class="card-header card-header-bg-red">
        Liên hệ
    </div>
    <div class="card-body">
            <span class="hot-line">Cô Lan : 0366 751 757</span><br/>
    </div>
</div>


<div class="fb-page" 
data-href="{{ SettingHelper::setting('facebook_link') }}" 
data-tabs="timeline" data-small-header="true" 
data-adapt-container-width="true" 
data-hide-cover="false" 
data-show-facepile="false"
data-height=150>
<blockquote cite="{{ SettingHelper::setting('facebook_link') }}" class="fb-xfbml-parse-ignore">
<a href="{{ SettingHelper::setting('facebook_link') }}"></a></blockquote></div>
            

<div class="card">
    <div class="card-header card-header-bg-red">
        Bài viết mới
    </div>
    <ul class="list-group">
        @foreach(WidgetHelper::recentPosts() as $article)
            <li class="list-group-item recent-post">
                <div class="post-img">
                    <img src="{{ $article->page_image }}" class="img-responsive" alt="{{ $article->title }}"/>
                </div>
                <a href="{{ route('frontend_post', $article->slug) }}">
                    <h2>{{ $article->title }}</h2>
                </a>
            </li>
        @endforeach
    </ul>
</div>
<div class="card">
    <div class="card-header card-header-bg-red">
        Bài viết phổ biến
    </div>
    <ul class="list-group">
        @foreach(WidgetHelper::popularPosts() as $article)
            <li class="list-group-item recent-post">
                <div class="post-img">
                    <img src="{{ $article->page_image }}" alt="{{ $article->title }}" class="img-responsive" />
                </div>
                <a href="{{ route('frontend_post', $article->slug) }}">
                    <h2>{{ $article->title }}</h2>
                </a>
            </li>
        @endforeach
    </ul>
</div>