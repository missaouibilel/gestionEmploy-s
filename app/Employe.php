<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = ['nom','prénom','date_naissance','CIN','tel','type_contrat','salaire'];
}
