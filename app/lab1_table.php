<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lab1_table extends Model
{
    protected $fillable=['glucosef','glucoseppr','urea','creatinine','suricacid','cholesteroltotal','triglyceride',
    'hdl','ldl','vldl','bilirubintotal','bilirubinconjugted','alkalinephosphated','sgpt','sgot','totalprotein','albumin',
    'scalcium','phosphorus','nasodium','kpotassium','ckmb','urinemicroalbumin','others'];
}
