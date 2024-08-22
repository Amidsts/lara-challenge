<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;
use App\Models\Employer;

class Job extends Model{
    use HasFactory;

   protected $table= 'job_listings';

   protected $guarded = [];

   public function employer() {
    return $this->BelongsTo(Employer::class);
   }
} 