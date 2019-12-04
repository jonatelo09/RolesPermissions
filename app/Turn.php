<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model {
	protected $fillable = ['name_tur'];
	public function ticket_turn() {
		return $this->hasMany(Ticket::class);
	}
}
