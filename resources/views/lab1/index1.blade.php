@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
    <div class="col-md-10">
        <h3> List of Report </h3>
    </div>

        <div class="col-sm-2">
            <a class="btn btn-sm btn-sucess"
        href="{{route('lab1.create')}}">Create New Bio-Chemical Report</a>
        </div>
    </div>

    @if($message = Session::get('success'))
    </div class="alert alert-sucess">
    <p>{{$message}}</p>
        </div>
        @endif
        <table class="table table-hover table-sm table-striped">
                <tr>
                    
                    <th width="100px">Glucose(F)</th>
                    <th width="100px">Glucose P.P.(R)</th>
                    <th width="100px">Urea</th>
                    <th width="100px">Creatinine</th>
                    <th width="100px">S.Uric Acid</th>
                    <th width="100px">Cholesterol Total</th>
                    <th width="100px">Triglyceride</th>
                    <th width="100px">HDL</th>
                    <th width="100px">LDL</th>
                    <th width="100px">VLDL</th>
                    <th width="100px">Bilirubin Total</th>
                    <th width="100px">Bilirubin Conjugted</th>
                    <th width="100px">Alkaline Phosphates</th>
                    <th width="100px">SGPT</th>
                    <th width="100px">SGOT</th>
                    <th width="100px">Total Protein</th>
                    <th width="100px">Albumin</th>
                    <th width="100px">S.Calcium</th>
                    <th width="100px">Phosphorus</th>
                    <th width="100px">Amylase</th>
                    <th width="100px">Na+(Sodium)</th>
                    <th width="100px">K+(Potassium)</th>
                    <th width="100px">Ck-MB</th>
                    <th width="100px">Urine Micro Albumin</th>
                    <th width="100px">Others</th>
                    <th width="180px">Action</th>
                </tr>
    
    
                @foreach ($lab1 as $lab1)
                <tr>
                <td><b>{{$lab1->glucosef}}</td>
                    <td><b>{{$lab1->glucoseppr}}</td>
                        <td><b>{{$lab1->urea}}</td>
                            <td><b>{{$lab1->creatinine}}</td>
                                <td><b>{{$lab1->suricacid}}</td>
                                    <td><b>{{$lab1->cholesteroltotal}}</td>
                                        <td><b>{{$lab1->triglyceride}}</td>
                                            <td><b>{{$lab1->hdl}}</td>
                                                <td><b>{{$lab1->ldl}}</td>
                                                    <td><b>{{$lab1->vldl}}</td>
                                                    <td><b>{{$lab1->bilirubintotal}}</td>
                                                        <td><b>{{$lab1->bilirubinconjugted}}</td>
                                                            <td><b>{{$lab1->alkalinephosphated}}</td>
                                                                <td><b>{{$lab1->sgpt}}</td>
                                                                    <td><b>{{$lab1->sgot}}</td>
                                                                        <td><b>{{$lab1->totalprotein}}</td>
                                                                            <td><b>{{$lab1->albumin}}</td>
                                                                                <td><b>{{$lab1->scalcium}}</td>
                                                                                    <td><b>{{$lab1->phosphorus}}</td>
                                                                                        <td><b>{{$lab1->amylase}}</td>
                                                                                        <td><b>{{$lab1->nasodium}}</td>
                                                                                            <td><b>{{$lab1->kpotassium}}</td>
                                                                                                <td><b>{{$lab1->ckmb}}</td>
                                                                                                    <td><b>{{$lab1->urinemicroalbumin}}</td>
                                                                                                        <td><b>{{$lab1->others}}</td>
    
                <td>
                <form class="" action="{{route('lab1.destroy',$lab1->id)}}" method="post">
                <a class="btn btn-sm btn-sucess" href="{{ route('lab1.show',$lab1->id)}}">Show</a>
                <a class="btn btn-sm btn-warning" href="{{ route('lab1.edit',$lab1->id)}}">   Edit</a>
                
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
                </td>
                </tr>
                @endforeach
            </table>
            {{-- {!! $lab1_tables->links() !!} --}}
        
        </div>
    
    
    
    
        @endsection