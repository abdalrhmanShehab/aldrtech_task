<section class="latest_news" id="news">
        <h1>LATEST NEWS</h1>
        <h3>Latest News</h3>
        <div class="row justify-content-center mx-auto">
            @foreach ($news as $item)
                <div class="col mx-auto">
                    <div class="card" style="width: 18rem;">
                        <div class="img">
                            <div class="img">
                                <a  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <img src="/images/News/{{$item->image}}" class="card-img-top" alt="...">
                                </a>
                            </div>  
                         </div>
                        <div class="card-body">
                        <h5 class="card-title" style="color:rgb(151, 150, 150)">{{$item->author}}</h5>
                        <hr>
                        <p class="card-text">{{$item->text}}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
         </div>
</section>