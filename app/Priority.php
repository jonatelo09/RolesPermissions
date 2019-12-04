<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model {
	protected $fillable = ['name_pri'];
	public function ticket_priority() {
		$this->hasMany(Ticket::class);
	}
}
