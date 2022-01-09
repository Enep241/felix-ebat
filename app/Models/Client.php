<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**@todo */
class Client extends Model
{
    use HasFactory;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom_customer',
        'prenom_customer',
        'num_customer',
        'adress_customer',
        'mail_customer',
        'login_customer',
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
        'mdp_customer',
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
    protected $table = 'clients';
    
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_customer';
    
    
    
    
    
}
