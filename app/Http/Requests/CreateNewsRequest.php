<?php namespace Opus15\Http\Requests;

use Opus15\Http\Requests\Request;

class CreateNewsRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'title'     => 'required',
            'content'   => 'required',
            'slug'      => 'required|unique:news,slug'
		];
	}

}
