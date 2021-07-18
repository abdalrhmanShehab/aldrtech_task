    <section class="featured" id="portfilio">
            <h1>Portfilio</h1>
            <h2>Featured Work</h2>
            <ul class="list-unstyled">
                <li data-class="all" class="active">All</li>
                @foreach ($portfilio as $item)
                    <li data-class=".{{$item->data_class}}">{{$item->name}}</li>
                @endforeach
            </ul>
            <div class="cards">
                <div class="row reset">

                    @forelse ($portfilio as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="shuf">
                            <div class="card {{$item->data_class}}" style="width: 18rem;">
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
                </div>
            </div>
        </div>
    </section>