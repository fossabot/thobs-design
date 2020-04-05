<?php declare (strict_types = 1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
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
            'title'   => 'required|string',
            'content' => 'required|string',
            'file'    => 'required',
        ];
    }

    public function data():  ? array
    {
        return [
            'title'   => $this->title,
            'content' => $this->content,
            'file'    => $this->file,
        ];
    }
}