@if(count(WidgetHelper::sliders()) > 0)
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php $index = 0; ?>
            @foreach(WidgetHelper::sliders() as $slide)
                <li data-target="#myCarousel" data-slide-to="{{ $index }}" @if($index === 0 ) class="active" @endif></li>
                <?php $index++; ?>
            @endforeach
        </ol>
        <div class="carousel-inner">
            <?php $index = 0; ?>
            @foreach(WidgetHelper::sliders() as $slide)
                <div @if($index === 0 ) class="carousel-item active" @else class="carousel-item" @endif>
                    <img src="{{ $slide->img_path }}" alt="Slider image">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block text-left">
                        </div>
                    </div>
                </div>
                <?php $index++; ?>
            @endforeach
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
@endif