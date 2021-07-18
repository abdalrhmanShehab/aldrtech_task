<div class="content_slider">
  <div class="before_slider">
    <h1 id="firstname">ABDALRHMAN</h1>
    <h2 id="lastname">SHEHAB</h2>
    <h4 id="position_name">Web Developer & Web Design</h4>
  </div>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="height:600px">
      @foreach( $slider as $item )
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <img class="d-block" src="/images/Slider/{{$item->image}}" width="1000px" height="800px">
      </div>
      @endforeach
    </div>
  </div>

          
</div>
