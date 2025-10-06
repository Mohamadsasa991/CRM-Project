<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
        protected $guarded =[];

        public function user(){
            return $this->belongsTo(User::class);
        }

        public function client(){
            return $this->belongsTo(Client::class);
        }

        public function casts():array {
            return [
            'status' =>ProjectStatus::class,
            ];
        }
}
