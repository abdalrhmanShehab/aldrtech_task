<?php

namespace App\Http\Controllers;

use App\Traits\cvTrait;
use App\Http\Requests\sliderRequest;
use App\Http\Requests\aboutRequest;
use App\Http\Requests\clientRequest;
use App\Http\Requests\portfilioRequest;
use App\Http\Requests\newsRequest;
use App\Http\Requests\workRequest;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Client;
use App\Models\News;
use App\Models\Portfilio;
use App\Models\Slider;
use App\Models\Work;

class dashboardController extends Controller
{
    use cvTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Admin.dashboard');
    }


    /***        Slider     *********/
    public function createSlider(){
        return view ('layouts.slider');
    }

    public function storeSlider(sliderRequest $request){

        //store image in folder
        $file_name= $this->saveImage($request->image,'images/slider');
        

        // insert 
        Slider::create([
            'image'=>$file_name
        ]);
        return redirect()->route('dashboard.index')
                        ->with('success','image created successfully.');
    }    
    

    
    /********  About      **********/
    public function createabout(){
        return view ('layouts.about');
    }

    public function storeAbout(aboutRequest $request){

        //store image in folder
        $file_name= $this->saveImage($request->image,'images/About');
        

        // insert 
        About::create([
            'name'=>$request->name,
            'position'=>$request->position,
            'description'=>$request->description,
            'image'=>$file_name
        ]);
        return redirect()->route('dashboard.index')
                        ->with('success','created successfully.');
    }
     /********  End About      **********/
    

    /********  Work      **********/
    public function createWork(){
        return view ('layouts.work');
    }

    public function storeWork(workRequest $request){

        //store image in folder
        $file_name= $this->saveImage($request->image,'images/Work');
        

        // insert 
        Work::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$file_name
        ]);
        return redirect()->route('dashboard.index')
                        ->with('success','created successfully.');
    }
     /********  End Work      **********/

     /*********  Portfilio  ********/
     public function createPortfilio(){
        return view ('layouts.Portfilio');
    }

     public function storePortfilio(Request $request){
    //   store image in folder
        $file_name= $this->saveImage($request->image,'images/Portfilio');

        // insert 
        Portfilio::create([
            'name'=>$request->name,
            'data_class'=>$request->data_class,
            'title'=>$request->title,
            'text'=>$request->text,
            'image'=>$file_name
        ]);
        return redirect()->route('dashboard.index')
                        ->with('success','created successfully.');
        
     }
     /*********  End Portfilio  ********/
     
      /******** Client   **********/
      public function createclient(){
          return view ('layouts.client');
      }
     
      public function storeClient(clientRequest $request){
     
          //store image in folder
          $file_name= $this->saveImage($request->image,'images/Client');
          
     
          // insert 
          $data=Client::create([
              'image'=>$file_name,
              'say'=>$request->say
          ]);

          return redirect()->route('dashboard.index')
                          ->with('success','created successfully.');
      }
     /********  End Client     **********/
     
     /******** news   **********/
     public function createnews(){
         return view ('layouts.news');
     }
     
     public function storeNews(newsRequest $request){
         
         //store image in folder
         $file_name= $this->saveImage($request->image,'images/News');
     
     
         // insert 
         News::create([
             'author'=>$request->author,
             'text'=>$request->text,
             'image'=>$file_name
         ]);
         return redirect()->route('dashboard.index')
                         ->with('success','created successfully.');
     }
     /********  End news     **********/
}


    
