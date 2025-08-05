<?php

    namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employer;


  class Job extends Model {

        use HasFactory;


    protected $table="Job_Listings";

    protected $fillable =['title','salary','nationality'];

   
    public function employeer()
{
    return $this->belongsTo(Employeer::class);
}

}
