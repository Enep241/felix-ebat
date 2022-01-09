<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travaux extends Model
{
    use HasFactory;
    
      /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'ouvrages',
        'travaux',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'id_facture',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
       
    ];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'travaux';
    
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_travaux';
    
    
    public function travaux()
    {
        return $this->hasOne('App\Models\Facture', 'id_travaux');
    }
}
