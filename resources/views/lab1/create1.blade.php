@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3> Bio-Chemical Report </h3>
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
    <form action="{{route('lab1.store')}}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <strong>Glucose(F):</strong>
            <input type="text" name="glucosef" class="form-control" placeholder="Glucose(F)">
          </div>
          <div class="col-md-12">
            <strong>Glucose P.P.(R)</strong>
            <textarea class="form-control" placeholder="Glucose P.P.(R)" name="glucoseppr" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Urea</strong>
            <textarea class="form-control" placeholder="Urea" name="urea" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Creatinine</strong>
            <textarea class="form-control" placeholder="Creatinine" name="creatinine" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>S.Uric Acid</strong>
            <textarea class="form-control" placeholder="S.Uric Acid" name="suricacid" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Cholesterol Total</strong>
            <textarea class="form-control" placeholder="Cholesterol Total" name="cholesteroltotal" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Triglyceride</strong>
            <textarea class="form-control" placeholder="Triglyceride" name="triglyceride" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>HDL</strong>
            <textarea class="form-control" placeholder="HDL" name="hdl" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>LDL</strong>
            <textarea class="form-control" placeholder="LDL" name="ldl" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>VLDL</strong>
            <textarea class="form-control" placeholder="VLDL" name="vldl" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Bilirubin Total</strong>
            <textarea class="form-control" placeholder="Bilirubin Total" name="bilirubintotal" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Bilirubin Conjugted</strong>
            <textarea class="form-control" placeholder="Bilirubin Conjugted" name="bilirubinconjugted" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Alkaline Phosphates</strong>
            <textarea class="form-control" placeholder="Alkaline Phosphates" name="alkalinephosphated" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>SGPT</strong>
            <textarea class="form-control" placeholder="SGPT" name="sgpt" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>SGOT</strong>
            <textarea class="form-control" placeholder="SGOT" name="sgot" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Total Protein</strong>
            <textarea class="form-control" placeholder="Total Protein" name="totalprotein" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Albumin</strong>
            <textarea class="form-control" placeholder="Albumin" name="albumin" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>S.Calcium</strong>
            <textarea class="form-control" placeholder="S.Calcium" name="scalcium" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Amylase</strong>
            <textarea class="form-control" placeholder="Amylase" name="amylase" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Na+(Sodium)</strong>
            <textarea class="form-control" placeholder="Na+(Sodium)" name="nasodium" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>K+(Potassium)</strong>
            <textarea class="form-control" placeholder="K+(Potassium)" name="kpotassium" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Ck-MB</strong>
            <textarea class="form-control" placeholder="Ck-MB" name="ckmb" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Urine Micro Albumin</strong>
            <textarea class="form-control" placeholder="Glucose P.P.(R)" name="urinemicroalbumin" rows="8" cols="80"></textarea>
          </div>
          <div class="col-md-12">
            <strong>Others</strong>
            <textarea class="form-control" placeholder="Others" name="others" rows="8" cols="80"></textarea>
          </div>
  
          <div class="col-md-12">
            <a href="{{route('lab1.index')}}" class="btn btn-sm btn-success">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </div>
        </div>
      </form>
  
    </div>
  @endsection