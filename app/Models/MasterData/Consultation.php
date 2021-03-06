<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'consultation';

    //declare field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    public function appointment()
    {
        return $this-> hasMany('App\Models\Operational\Doctor','consultation_id');
    }
}
