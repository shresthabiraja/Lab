@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Lab1 Report</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('lab1.update',$lab1->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
           
        <div class="col-md-12">
          <strong>Glucose(F):</strong>
          <input type="text" name="glucosef" class="form-control" value="{{$lab1->glucosef}}">
        </div>
   
        <div class="col-md-12">
                <strong>Glucose P.P.(R):</strong>
                <textarea class="form-control" name="glucoseppr" rows="8" cols="80">{{$lab1->glucoseppr}}</textarea>
              </div>
              <div class="col-md-12">
                    <strong>Urea</strong>
                    <textarea class="form-control" name="urea" rows="8" cols="80">{{$lab1->urea}}</textarea>
                  </div>
                  <div class="col-md-12">
                        <strong>Alamat Siswa : </strong>
                        <textarea class="form-control" name="alamatSiswa" rows="8" cols="80">{{$lab1->alamatSiswa}}</textarea>
                      </div>
                      <div class="col-md-12">
                            <strong>Creatinine</strong>
                            <textarea class="form-control" name="creatinine" rows="8" cols="80">{{$lab1->creatinine}}</textarea>
                          </div>
                          <div class="col-md-12">
                                <strong>S.Uric Acid</strong>
                                <textarea class="form-control" name="suricacid" rows="8" cols="80">{{$lab1->suricacid}}</textarea>
                              </div>
                              <div class="col-md-12">
                                    <strong>Cholesterol Total</strong>
                                    <textarea class="form-control" name="cholesteroltotal" rows="8" cols="80">{{$lab1->cholesteroltotal}}</textarea>
                                  </div>
                                  <div class="col-md-12">
                                        <strong>Triglyceride</strong>
                                        <textarea class="form-control" name="triglyceride" rows="8" cols="80">{{$lab1->triglyceride}}</textarea>
                                      </div>
                                      <div class="col-md-12">
                                            <strong>LDL</strong>
                                            <textarea class="form-control" name="ldl" rows="8" cols="80">{{$lab1->ldl}}</textarea>
                                          </div>
                                          <div class="col-md-12">
                                                <strong>VLDL</strong>
                                                <textarea class="form-control" name="vldl" rows="8" cols="80"> {{$lab1->vldl}}</textarea>
                                              </div>
                                              <div class="col-md-12">
                                                    <strong>Bilirubin Total</strong>
                                                    <textarea class="form-control" name="bilirubintotal" rows="8" cols="80">{{$lab1->bilirubintotal}}</textarea>
                                                  </div>
                                                  <div class="col-md-12">
                                                        <strong>Bilirubin Conjugted</strong>
                                                        <textarea class="form-control" name="bilirubinconjugted" rows="8" cols="80">{{$lab1->bilirubinconjugted}}</textarea>
                                                      </div>
                                                      <div class="col-md-12">
                                                            <strong>Alkaline Phosphates</strong>
                                                            <textarea class="form-control" name="alkalinephosphated" rows="8" cols="80">{{$lab1->alkalinephosphated}}</textarea>
                                                          </div>
                                                          <div class="col-md-12">
                                                                <strong>SGPT</strong>
                                                                <textarea class="form-control" name="sgpt" rows="8" cols="80">{{$lab1->sgpt}}</textarea>
                                                              </div>
                                                              <div class="col-md-12">
                                                                    <strong>SGOT</strong>
                                                                    <textarea class="form-control" name="sgot" rows="8" cols="80">{{$lab1->sgot}}</textarea>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                        <strong>Total Protein</strong>
                                                                        <textarea class="form-control" name="totalprotein" rows="8" cols="80">{{$lab1->totalprotein}}</textarea>
                                                                      </div>
                                                                      <div class="col-md-12">
                                                                            <strong>Albumin</strong>
                                                                            <textarea class="form-control" name="albumin" rows="8" cols="80"> {{$lab1->albumin}}</textarea>
                                                                          </div>
                                                                          <div class="col-md-12">
                                                                                <strong>S.Calcium</strong>
                                                                                <textarea class="form-control" name="scalcium" rows="8" cols="80">{{$lab1->scalcium}}</textarea>
                                                                              </div>
                                                                              <div class="col-md-12">
                                                                                    <strong>>Amylase</strong>
                                                                                    <textarea class="form-control" name="amylase" rows="8" cols="80"> {{$lab1->amylase}}</textarea>
                                                                                  </div>
                                                                                  <div class="col-md-12">
                                                                                        <strong>Na+(Sodium)</strong>
                                                                                        <textarea class="form-control" name="nasodium" rows="8" cols="80">{{$lab1->nasodium}}</textarea>
                                                                                      </div>
                                                                                      <div class="col-md-12">
                                                                                            <strong>K+(Potassium)</strong>
                                                                                            <textarea class="form-control" name="kpotassium" rows="8" cols="80">{{$lab1->kpotassium}}</textarea>
                                                                                          </div>
                                                                                          <div class="col-md-12">
                                                                                                <strong>Ck-MB</strong>
                                                                                                <textarea class="form-control" name="ckmb" rows="8" cols="80"> {{$lab1->ckmb}}</textarea>
                                                                                              </div>
                                                                                              <div class="col-md-12">
                                                                                                    <strong>Urine Micro Albumin</strong>
                                                                                                    <textarea class="form-control" name="urinemicroalbumin" rows="8" cols="80">{{$lab1->urinemicroalbumin}}</textarea>
                                                                                                  </div>
                                                                                                  <div class="col-md-12">
                                                                                                        <strong>Others</strong>
                                                                                                        <textarea class="form-control" name="others" rows="8" cols="80">{{$lab1->others}}</textarea>
                                                                                                      </div>
                                                                                                     

        <div class="col-md-12">
          <a href="{{route('lab1.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection