<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
	protected $fillable = ['user_id', 'invoice_no', 'title', 'type', 'invoice_date', 'due_date'];
	
	public function user()
    {
        return $this->belongsTo(User::class);
    }
}
