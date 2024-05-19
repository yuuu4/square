<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    
       
    /**
     *
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
         return[
           'team.name' =>'required|string|max:100',
           'team.content'  =>'required|string|max:4000',
           'team.purpose'  =>'required|string|max:600',
           'team.place'  =>'required|string|max:300',
           
            ];
    }
}
