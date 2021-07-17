    <section class="featured">
        <div class="container">
            <h1>Portfilio</h1>
            <h2>Featured Work</h2>
            <ul class="list-unstyled">
                <li data-class="all" class="active">All</li>
                {{-- <li data-class=".photoshop">Photoshop</li>
                <li data-class=".ui-ix">UI/UX</li>
                <li data-class=".web-design">Web Design</li>
                <li data-class=".web-design">Web dev</li>
                <li data-class=".wordpress">Wordpress</li>
                <li data-class=".adobe-xd">Adobe XD</li>
                <li data-class=".illustrator">Illustrator</li> --}}
                @foreach ($portfilio as $item)
                    <li data-class=".{{$item->dataclass}}">{{$item->name}}</li>
                @endforeach
            </ul>
            <div class="cards">
                <div class="row reset">

                    @forelse ($portfilio as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="shuf">
                            <div class="card photoshop" style="width: 18rem;">
                            <div class="image">
                                <img src="/images/Portfilio/{{$item->image}}" class="card-img-top" alt="...">
                            </div>
                                <div class="card-body">
                                <h2 class="card-title">{{$item->title}}</h2>
                                <h6 class="card-text">{{$item->text}}</h6>
                                </div>
                            </div>							
                        </div>
                    </div>                        
                    @empty
                        <p>no images</p>
                    @endforelse


                    {{-- <div class="col-md-6 col-lg-4">
                        <div class="shuf">
                            <div class="card adobe-xd" style="width: 18rem;">
                            <div class="image">
                                <img src="{{asset('images/featured/2.png')}}" class="card-img-top" alt="...">
                            </div>
                            </div>
                        </div>							
                    </div> --}}
                    {{-- <div class="col-md-6 col-lg-4">
                        <div class="shuf">
                            <div class="card wordpress" style="width: 18rem;">
                                <div class="image">
                                    <img src="{{asset('images/featured/3.png')}}" class="card-img-top" alt="...">
                            </div>
                            </div>
                        </div>							
                    </div> --}}
                    {{-- <div class="col-md-6 col-lg-4">
                        <div class="shuf">
                            <div class="card photoshop" style="width: 18rem;">
                            <div class="image">
                                <img src="{{asset('images/featured/4.png')}}" class="card-img-top" alt="...">
                            </div>
                            </div>
                        </div>						
                    </div> --}}
                    {{-- <div class="col-md-6 col-lg-4">
                        <div class="shuf">
                            <div class="card ui-ix" style="width: 18rem;">
                            <div class="image">
                                <img src="{{asset('images/featured/5.png')}}" class="card-img-top" alt="...">
                            </div>
                            </div>	
                        </div>						
                    </div> --}}
                    {{-- <div class="col-md-6 col-lg-4">
                        <div class="shuf">
                            <div class="card wordpress" style="width: 18rem;">
                            <div class="image">
                                <img src="{{asset('images/featured/6.png')}}" class="card-img-top" alt="...">
                            </div>
                            </div>	
                        </div>						
                    </div> --}}
                </div>
            </div>
        </div>
    </section>