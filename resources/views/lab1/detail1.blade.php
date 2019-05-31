@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Lab 1</h3>
        <hr>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Glucose(F):</strong> {{$lab1->glucosef}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Glucose P.P.(R)</strong> {{$lab1->glucoseppr}}
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <strong>Urea</strong> {{$lab1->urea}}
          </div>
        </div>
      
        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <strong>Creatinine</strong> {{$lab1->creatinine}}
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <strong>S.Uric Acid</strong> {{$lab1->suricacid}}
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <strong>Cholesterol Total</strong> {{$lab1->cholesteroltotal}}
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <strong>Triglyceride</strong> {{$lab1->triglyceride}}
                  </div>
                  <div class="col-md-12">
                        <div class="form-group">
                          <strong>HDL</strong> {{$lab1->hdl}}
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <strong>LDL</strong> {{$lab1->ldl}}
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <strong>VLDL</strong> {{$lab1->vldl}}
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <strong>Bilirubin Total</strong> {{$lab1->bilirubintotal}}
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <strong>Bilirubin Conjugted</strong> {{$lab1->bilirubinconjugted}}
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <strong>Alkaline Phosphates</strong> {{$lab1->alkalinephosphated}}
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <strong>SGPT</strong> {{$lab1->sgpt}}
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <strong>SGOT</strong> {{$lab1->sgot}}
                                  </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <strong>Total Protein</strong> {{$lab1->totalprotein}}
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <strong>Albumin</strong> {{$lab1->albumin}}
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <strong>S.Calcium</strong> {{$lab1->scalcium}}
                                          </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                  <div class="form-group">
                                                    <strong>Phosphorus</strong> {{$lab1->phosphorus}}
                                                  </div>
                                                </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <strong>Amylase</strong> {{$lab1->amylase}}
                                          </div>
                                        </div>
                                       
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <strong>Na+(Sodium)</strong> {{$lab1->nasodium}}
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <strong>K+(Potassium)</strong> {{$lab1->kpotassium}}
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <strong>Ck-MB</strong> {{$lab1->ckmb}}
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <strong>Urine Micro Albumin</strong> {{$lab1->urinemicroalbumin}}
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <strong>Others</strong> {{$lab1->others}}
                                            </div>
                                          </div>
                            
      <div class="col-md-12">
        <a href="{{route('lab1.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection