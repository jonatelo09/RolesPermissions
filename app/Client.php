<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Client extends Model {
	protected $fillable = ['name_cli'];
	public function tickets_client() {
		return $this->hasMany(Ticket::class);
	}
}
