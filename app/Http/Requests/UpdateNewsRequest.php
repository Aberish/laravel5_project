<?php namespace Opus15\Http\Requests;

use Opus15\Http\Requests\Request;

class UpdateNewsRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
        return array(
            'title'     => 'required',
            'content'   => 'required',
            'theme'     => 'required',
            'slug'      => 'unique:news,slug'

        );
	}

}
