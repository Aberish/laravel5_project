<?php namespace Opus15;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pages';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'content', 'parent_id', 'slug', 'updated_at'];
}
