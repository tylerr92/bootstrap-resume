<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormSubmission extends FormRequest
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
      'contactName' => 'bail|required|string',
      'companyName' => 'bail|required|string',
      'phoneNumber' => 'bail|required',
      'emailAddress' => 'bail|required|email',
      'message' => 'bail|required',
      'dateTimePicker' => 'bail|required|date',
    ];
  }

  /**
  * Get the error messages for the defined validation rules.
  *
  * @return array
  */
  public function messages()
  {
    return [
      'contactName.required' => 'A name is required.',
      'contactName.string' => 'Names may only contain alpha numeric characters.',

      'companyName.required' => 'A company name is required.',
      'companyName.string' => 'Company names may only contain alpha numeric characters.',

      'phoneNumber.required' => 'A phone number is required.',

      'emailAddress.required' => 'An email address is required.',
      'emailAddress.email' => 'A valid email address is required.',

      'message.required' => 'A message is required.',

      'dateTimePicker.required' => 'A date and time is required.',
      'dateTimePicker.date' => 'A valid date and time is required and must be in the format of MM/DD/YYYY HH:MM PM.',
    ];
  }
}
