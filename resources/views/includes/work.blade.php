    <div class="d-flex justify-content-center">
        
        @foreach ($work as $item)
        <div class="col d-flex justify-content-center">
            <div class="col-md4">
               <img src="/images/Work/{{$item->image}}" alt="" width="100px" height="100px"> 
            </div>
            <div class="col-8">
                <h1>{{$item->title}}</h1>
                <p>{{$item->description}}</p>
            </div> 
        </div>
        @endforeach
    </div>     



    