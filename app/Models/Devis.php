<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;
    
      /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'object_devis',
        'user_id',
        'total_net_ht',
        'date_validation',
        'statut',
        'tva',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
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
    protected $table = 'devis';
    
    /**
     * Get the user that owns the devis.
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
