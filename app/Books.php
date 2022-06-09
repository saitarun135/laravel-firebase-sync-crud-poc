<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Books extends Model
{
    //
    use SyncsWithFirebase;
    protected $fillable = [
        'name','user_id'
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
