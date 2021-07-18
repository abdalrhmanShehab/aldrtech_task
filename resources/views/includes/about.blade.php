<div class="about">
    <div class="left">
        @foreach ($about as $item)
        <img src="/images/About/{{$item->image}}" alt="" width="100%" height="80%">
        @endforeach
    </div>
    <div class="right">
        <h1>ABOUT</h1>
        <div class="contet_right">
            @foreach ($about as $object)
                 <h2>{{ $object->name }}</h2>
                 <h4>{{ $object->position }}</h4>
                 <hr>
                 <p>{{$object->description}}</p>
                 
            @endforeach
        </div>
        <button>Learn More</button>
    </div>
    
</div>