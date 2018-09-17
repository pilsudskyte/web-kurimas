<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\lecture;
Use App\student;
Use App\grade;
use Session;
use Validator;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= student::all();
        $lectures = lecture::all();
        $students =  student::orderBy('surname', "ASC")->get();
        return view("students.index", [
            "students"=>$students,
            "lectures"=>$lectures
            ] );
            
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students= student::all();
       return view ("students.create", [ "students"=> $students,
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
                'surname.required' => 'Neįrašyta Pavardė',
                'name.required' => 'Neįrašytas Vardas',
              
                'required' => 'Laukelis :attribute turi buti įvestas'
            ];
        // Patikriname uzklausos duomenis
		$validatedstudent = $request->validate([
    
                // 1. Formos laukelio padinimas 
                // 2. visos taisykles
    			// Jei naudojame unique po dvitaskio duomenu bazes pavadinimas
    			// kurioje reiksme turi buti unikali
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required',
                'phone' => 'required',
    			
    			
    		], $messages);
    
        $students= new student;

        $students->name = $request ->name;
        $students->surname = $request ->surname;
        $students->email = $request ->email;
        $students->phone = $request ->phone;
       
       
        
        $students->save();
        Session::flash( 'status', 'Sukurtas naujas studentas' );
        return redirect()->route("students.index");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $student = Student::find($id);
        if ($student) {
          return view('students.show', [
            "student" => $student
            
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
        $students= student::find($id);
        return view ("students.edit", [ "students"=> $students,
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
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            
            
    ], $messages)->validate();
        $students = student::find($id);
        
        $students->name = $request ->name;
        $students->surname = $request ->surname;
        $students->email = $request ->email;
        $students->phone = $request ->phone;
      
       
      
        
        $students->save();
       
        
        Session::flash( 'status', 'Atnaujinti duomenys' );

        return redirect()->route("students.index");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = student::find($id);
        $students->delete();
        // Susikuriu sesijos pranesima
		Session::flash( 'status', 'Studentas ištrintas' );
        return redirect()->route("students.index");
    }
}