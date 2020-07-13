<?php

namespace App\Http\Controllers;
use Auth;
use App\Personnage; 

use Illuminate\Http\Request;

class PersonnagesController extends Controller
{

     public function __construct()
     {
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prenom = Auth::user()->name;
        $personnages = Personnage::get();
      //dd($personnages->toArray());
        return view('personnages_vue', compact('prenom','personnages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prenom = Auth::user()->name;
        return view('personnages_create', compact('prenom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nom' => ['required','string'],
            'titre' => ['required','string'],
            'note' => ['numeric','Nullable']
        ]);

        Personnage::create($request->all());
        return redirect()->route('personnages.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personnage $personnage)
    {
            $prenom = Auth::user()->name;
           // dd($personnage);
            return view('personnages_show',compact('personnage','prenom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
         $prenom = Auth::user()->name;
         $personnage = Personnage::find($id);
             return view('personnages_edit',compact('personnage','prenom'));
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
         $validator = $request->validate([
            'nom' => ['required','string'],
            'titre' => ['required','string'],
            'note' => ['required','numeric']
        ]);
        $personnage = Personnage::find($id);
        $personnage->update($request->all());
        return redirect()->route('personnages.index')
                        ->with('success','updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $personnage = Personnage::find($id);
        $personnage->delete();
        return redirect()->route('personnages.index')->with('success','deleted successfully');
    }
}
