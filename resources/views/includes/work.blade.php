    <div class="work d-flex justify-content-center align-items-center">
        
        @foreach ($work as $item)
        <div class="col d-flex justify-content-center">
            <div class="col-md4 mx-2 px-2">
               <img src="/images/Work/{{$item->image}}" alt="" width="100px" height="100px"> 
            </div>
            <div class="col-8 mx-2 px-2">
                <h1>{{$item->title}}</h1>
                <p>{{$item->description}}</p>
            </div> 
        </div>
        @endforeach
    </div>     



    