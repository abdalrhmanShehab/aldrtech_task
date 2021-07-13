<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My CV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css	">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
    
@include('includes.navbar')
@include('includes.slider')
<div class="clearfix"></div>

<div class="about">
    <div class="left">
        <img src="{{asset('images/7.jpg')}}" alt="" width="100%" height="100%">
    </div>
    <div class="right">
        <h1>ABOUT</h1>
        <div class="contet_right">
            <h2>ABDALRHMAN SHEHAB</h2>
            <h4>Web Developer & Web Design</h4>
            <hr>
            <p>I am Abdalrhman Shehab , Iam 25 yeas , Iam palastenian syrian ,web Developer and Web Design ,with 1.5 years experience<br> Iam 4th in BAIT in syrian virtual university</p>
        </div>
        <button>Learn More</button>
    </div>
    
</div>
<div class="clearfix"></div>

<div class="second_slider">
    @include('includes.second_slider')
</div>

    @include('includes.featured_work')

    <section class="clients">
        <h1>TESTIMONIAL</h1>
            <h3>What Cleints Say</h3>
        <div class="row">
            <div class="col-6" style="position: relative">
               <div class="par activepar"> <p class='one'>one one one one one one one</p></div>
               <div class="par" style="display: none"> <p class='tow'>tow tow tow otwo two tow</p></div>
               <div class="par" style="display: none"> <p class='three'>three three three </p></div>
                
            </div>
            <div class="col-6" style="position: relative">
                <img src="{{asset('images/4.jpg')}}" data-class=".one" class="active one img" width="150px" height="150px">
                <img src="{{asset('images/5.jpg')}}" data-class=".tow" class="tow img" width="150px" height="150px">
                <img src="{{asset('images/6.jpg')}}" data-class=".three" class="three img" width="150px" height="150px">
            </div>
        </div>
    </section>

    <section class="latest_news">
        <h1>LATEST NEWS</h1>
        <h3>Latest News</h3>
        <div class="row justify-content-center mx-auto">
            <div class="col mx-auto">
                <div class="card" style="width: 18rem;">
                    <div class="img">
                        <div class="img">
                            <a  data-bs-toggle="modal" data-bs-target="#exampleModal">
                             <img src="{{asset('images/8.jpg')}}" class="card-img-top" alt="...">
                             </a>
                         </div>                    </div>
                    <div class="card-body">
                      <h5 class="card-title" style="color:rgb(151, 150, 150)">By alex</h5>
                      <hr>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col mx-auto">
                <div class="card" style="width: 18rem;">
                    <div class="img">
                       <a  data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{asset('images/9.jpg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color:rgb(151, 150, 150)">By alex</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                  </div>
            </div>
            <div class="col mx-auto">
                <div class="card" style="width: 18rem;">
                    <div class="img">
                        <div class="img">
                            <a  data-bs-toggle="modal" data-bs-target="#exampleModal">
                             <img src="{{asset('images/10.jpg')}}" class="card-img-top" alt="...">
                             </a>
                         </div>                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color:rgb(151, 150, 150)">By alex</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                  </div>
            </div>
        </div>
    </section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  
    <section class="contact">
        <p></p>
        <div class="row">
            <div class="col">form</div>
            <div class="col">google map</div>
        </div>

 @include('includes.footer')

    </section>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js	"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/plugin.js')}}"></script>

</body>
</html>
