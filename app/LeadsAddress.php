<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadsAddress extends Model
{
        //Implementacao do SoftDeletes para poder deletar os registros sem apagalos do banco de dados
        use SoftDeletes;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
    
        protected $dates = ['deleted_at'];
        
        protected $fillable = [
            'lead_id', 
            'cnpj', 
            'social_name', 
            'fantasy_name',
            'site',
            'phone',
            'accept_terms',
        ];
    
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            
        ];
}
