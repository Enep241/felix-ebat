<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    use HasFactory;
    
       /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'genere',
        'param1',
        'param2',
        'param3',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'id_devis',
        'id_facture',
        'id_employes',
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
    protected $table = 'generation';
    
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'genere';
    
    
    public function devis()
    {
        return $this->hasOne('App\Models\Devis', 'id_devis');
    }
    
    public function facture()
    {
        return $this->hasOne('App\Models\Facture', 'id_facture');
    }
    
    public function worker()
    {
        return $this->hasOne('App\Models\Employes', 'id_worker');
    }
}
