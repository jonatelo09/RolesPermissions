<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Status extends Model {
	protected $fillable = ['name_sta'];
	public function ticket_status() {
		return $this->hasMany(Ticket::class);
	}
}
