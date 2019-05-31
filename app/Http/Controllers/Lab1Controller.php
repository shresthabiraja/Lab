<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lab1_table;

class Lab1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lab1 = lab1_table::latest()->paginate(10);
        return view('lab1.index1',compact('lab1'))->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lab1.create1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'glucosef' ,
            'glucoseppr',
            'urea',
            'creatinine',
            'suricacid',
            'cholesteroltotal',
            'triglyceride',
            'hdl',
            'ldl',
            'vldl',
            'bilirubintotal',
            'bilirubinconjugted',
            'alkalinephosphated',
            'sgpt',
            'sgot',
            'totalprotein',
            'albumin',
            'scalcium',
            'phosphorus',
            'amylase',
            'nasodium',
            'kpotassium',
            'ckmb',
            'urinemicroalbumin',
            'others'

        ]);

        lab1_table::create($request->all());
        return redirect('/lab1')->with('success','new Lab1 created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lab1 = lab1_table::find($id);
        return view('lab1.detail1',compact('lab1')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lab1 = lab1_table::find($id);
        return view('lab1.edit1',compact('lab1')); 
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
        $request->validate([
            'glucosef' ,
            'glucoseppr',
            'urea',
            'creatinine',
            'suricacid',
            'cholesteroltotal',
            'triglyceride',
            'hdl',
            'ldl',
            'vldl',
            'bilirubintotal',
            'bilirubinconjugted',
            'alkalinephosphated',
            'sgpt',
            'sgot',
            'totalprotein',
            'albumin',
            'scalcium',
            'phosphorus',
            'amylase',
            'nasodium',
            'kpotassium',
            'ckmb',
            'urinemicroalbumin',
            'others'
        ]);
        $lab1 =lab1_table::find($id);
        $lab1->glucosef = $request->get('glucosef');
        $lab1->glucoseppr = $request->get('glucoseppr');
        $lab1->urea = $request->get('urea');
        $lab1->creatinine = $request->get('creatinine');
        $lab1->suricacid = $request->get('suricacid');
        $lab1->cholesteroltotal = $request->get('cholesteroltotal');
        $lab1->triglyceride = $request->get('triglyceride');
        $lab1->hdl = $request->get('hdl');
        $lab1->ldl = $request->get('ldl');
        $lab1->vldl = $request->get('vldl');
        $lab1->bilirubintotal = $request->get('bilirubintotal');
        $lab1->bilirubinconjugted = $request->get('bilirubinconjugted');
        $lab1->alkalinephosphated = $request->get('alkalinephosphated');
        $lab1->sgpt = $request->get('sgpt');
        $lab1->sgot = $request->get('sgot');
        $lab1->totalprotein = $request->get('totalprotein');
        $lab1->albumin = $request->get('albumin');
        $lab1->scalcium = $request->get('scalcium');
        $lab1->phosphorus = $request->get('phosphorus');
        $lab1->amylase = $request->get('amylase');
        $lab1->nasodium = $request->get('nasodium');
        $lab1->kpotassium = $request->get('kpotassium');
        $lab1->ckmb = $request->get('ckmb');
        $lab1->urinemicroalbumin = $request->get('urinemicroalbumin');
       $lab1->others = $request->get('others');
    

        $lab1->save();
        return redirect()->route('lab1.index')
                        ->with('success','Biodata siswa updated sucessfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lab1 = lab1_table::find($id);
        $lab1->delete();
        return redirect()->route('lab1.index')
                            ->with('success','Report 1 Delete Sucessfully');
    }
}
