<?php namespace Opus15\Http\Requests;


class CreateEventRequest extends Request {

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
		return [
            'title'     => 'required',
            'description'   => 'required',
            'date_debut'   => 'required',
            'date_fin'   => 'required',
            'slug'      => 'required|unique:events,slug'
		];
	}

}
