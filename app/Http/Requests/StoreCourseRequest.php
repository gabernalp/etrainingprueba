<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'start_date' => [
                'date_format:' . config('project.date_format'),
                'required',
            ],
            'end_date' => [
                'date_format:' . config('project.date_format'),
                'nullable',
            ],
        ];
    }
}
