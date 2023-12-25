<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function messages()
     {
         return [
             'first_name.required' => '姓を入力してください',
             'last_name.required' => '名を入力してください',
             'gender.required' => '性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',
             'email.email' => 'メールアドレスはメール形式で入力してください',
             'tell.required' => '電話番号を入力してください',
             'tell.digits:5' => '電話番号は5桁の数字で入力してください',
             'address.required' => '住所を入力してください',
             'type.required' => 'お問い合わせの種類を選択してください',
             'detail.required' => 'お問い合わせ内容を入力してください',
             'detail.max:120' => 'お問合せ内容は120文字以内で入力してください',
         ];
     }/**
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
            'first_name' => ['required',],
            'last_name' => ['required',],
            'gender' => ['required'],
            'email' => ['required', 'email',],
            'tell' => ['required', 'numeric', 'digits:5'],
            'address' => ['required', ],
            'type' => ['required', ],
            'detail' => ['required',  'max:120'],
        ];
    }
}
