<?php namespace Opus15;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'events';


    protected $fillable = ['title', 'description', 'date_debut', 'date_fin', 'slug', 'updated_at'];
}
