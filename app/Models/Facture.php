<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    
       /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'date_creation',
        'total_net_hors_taxe',
        'tva',
        'total_ttc',
        'quantite',
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
        'id_worker',
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
    protected $table = 'facture';
    
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_facture';
    
    
    public function devis()
    {
        return $this->hasOne('App\Models\Devis', 'id_devis');
    }
    
    public function employe()
    {
        return $this->hasOne('App\Models\Employes', 'id_worker');
    }
}
