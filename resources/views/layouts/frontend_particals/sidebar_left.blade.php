<div class="card">
    <div class="card-header card-header-bg-red">
        Download tài liệu
    </div>
    <ul class="list-group">
        @foreach(WidgetHelper::documents() as $document)
        <a target="_blank" href="{{ $document->link }}" class="list-group-item download-file-item">{{ $document->text }}</a>
        @endforeach
    </ul>
</div>
