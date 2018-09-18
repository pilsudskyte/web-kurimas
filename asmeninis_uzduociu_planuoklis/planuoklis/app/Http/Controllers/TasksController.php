<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\status;
Use App\task;
use Session;
use Validator;

class tasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= task::all();
        $statuses = status::all();
        $tasks =  task::orderBy('add_date', "ASC")->get();
        return view("tasks.index", [
            "tasks"=>$tasks,
            "statuses"=>$statuses
            ] );
            
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks= task::all();
       return view ("tasks.create", [ "tasks"=> $tasks,
        ]);
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
                'name.required' => 'Neįrašytas pavadinimas',
               
              
                'required' => 'Laukelis :attribute turi buti įvestas'
            ];
        // Patikriname uzklausos duomenis
		$validatedtask = $request->validate([
    
                // 1. Formos laukelio padinimas 
                // 2. visos taisykles
    			// Jei naudojame unique po dvitaskio duomenu bazes pavadinimas
    			// kurioje reiksme turi buti unikali
                'name' => 'required',
                // 'add_date' => 'required',
                'completed_date' => 'required',
    			
            ], $messages);
            
            // 'description' => 'required',
    
        $tasks= new task;

        $tasks->name = $request ->name;
        $tasks->description = $request ->description;
        $tasks->status_id = $request ->status_id;
        $tasks->add_date = $request ->add_date;
        $tasks->completed_date = $request ->completed_date;
       
       
        
        $tasks->save();
        Session::flash( 'status', 'Sukurtas naujas irasas' );
        return redirect()->route("tasks.index");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $task = task::find($id);
        if ($task) {
          return view('tasks.show', [
            "task" => $task
            
            ]);
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
        $tasks= task::find($id);
        return view ("tasks.edit", [ "tasks"=> $tasks,
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
            // 'description' => 'required',
            'status_id' => 'status_id',
            'add_date' => 'required',
            'completed_date' => 'required',
            
    ], $messages)->validate();
        $tasks = task::find($id);
        
        $tasks->name = $request ->name;
        $tasks->description = $request ->description;
        $tasks->status_id = $request ->status_id;
        $tasks->add_date = $request ->add_date;
        $tasks->completed_date = $request ->completed_date;
       
       
      
       
      
        
        $tasks->save();
       
        
        Session::flash( 'status', 'Atnaujinti duomenys' );

        return redirect()->route("tasks.index");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = task::find($id);
        $tasks->delete();
        // Susikuriu sesijos pranesima
		Session::flash( 'status', 'testas ištrintas' );
        return redirect()->route("tasks.index");
    }
}