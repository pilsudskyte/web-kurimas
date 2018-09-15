<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\lecture;
Use App\student;
Use App\grade;
use Session;
use Validator;

class lecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        $lectures = lecture::all();
        $lectures = lecture::orderBy('name', "ASC")->get();
        return view("lecture.index", ["lectures"=>$lectures] );

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lectures = lecture::all();
        
        // Kreipiames i /resources/views/students/create.blade.php
        return view('lecture.create', ["lectures" => $lectures]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
        $messages = [
    		'name.required' => 'Neįrašyta',
            ];
        Validator::make($request->all(), [
            'name' => 'required',
           
    ], $messages)->validate();

        $lecture = new lecture();
        // priskiriu lecture teksta kuris atejo is formos
       
        $lecture->name = $request->name;
        $lecture->description = $request->description;
       
        
        $lecture->save();

        Session::flash( 'status', 'Pridejimas sekmingas' );

        return redirect()->route('lecture.index');

        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lecture = Lecture::find($id);
          if ($lecture) {
            Session::flash( 'status', 'Paskaita sėkmingai atnaujinta.' );
            return view('lectures.show', ["lecture" => $lecture]);
          } else {
            return redirect()->route('lectures.index');
          }
      }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         // pasiemu redaguojama masina
         $lecture = lecture::find($id);
        //  $lectures = lecture::all();
         
         return view('lecture.edit',[
             "lecture" => $lecture 
             
            //  "lectures" => $lectures
         ]);
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
        $messages = [
    		'required' => 'Laukelis :attribute turi buti užpildytas'
            ];
        Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
    ], $messages)->validate();

        $lecture = lecture::find($id);
     
        $lecture->name = $request->name;
        $lecture->description = $request->description;
       

        $lecture->save();

        Session::flash( 'status', 'Įrašas atnaujintas sėkmingai' );
        return redirect()->route('lecture.index');


        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Gaunu lecture pagal ID
        $lecture = lecture::find($id);
        $lecture->delete();

        Session::flash( 'status', 'Paskaita ištrinta sėkmingai' );

        return redirect()->route('lecture.index');

        
        
    }
    }