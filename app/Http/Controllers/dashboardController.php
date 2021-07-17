<?php

namespace App\Http\Controllers;

use App\Traits\cvTrait;
use App\Http\Requests\sliderRequest;
use App\Http\Requests\aboutRequest;
use App\Http\Requests\clientRequest;
use App\Http\Requests\newsRequest;
use App\Http\Requests\portfilioRequest;
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
    public function creatework(){
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
    
    /******** Portfilio      **********/
        public function createportfilio(){
            return view ('layouts.portfilio');
        }
    
        public function storePortfilio(portfilioRequest $request){
    
            //store image in folder
            $file_name= $this->saveImage($request->image,'images/Portfilio');
            
    
            // insert 
            Portfilio::create([
                'image'=>$file_name,
                'name'=>$request->name,
                'data-class'=>$request->dataclass,
                'title'=>$request->title,
                'text'=>$request->text,
            ]);
            return redirect()->route('dashboard.index')
                            ->with('success','created successfully.');
        }
    /********  End Portfilio     **********/
   
    /******** Client   **********/
    public function createclient(){
        return view ('layouts.client');
    }

    public function storeClient(clientRequest $request){

        //store image in folder
        $file_name= $this->saveImage($request->image,'images/Client');
        

        // insert 
        Client::create([
            'say'=>$request->say,
            'image'=>$file_name
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
    
    
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
