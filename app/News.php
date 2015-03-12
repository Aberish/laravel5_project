<?php namespace Opus15;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';

    protected $fillable = ['title', 'content','slug', 'updated_at'];
}
