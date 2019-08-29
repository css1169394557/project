<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserinsert extends FormRequest
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
            //name规则
            'name'=>'required|regex:/\w{4,16}/|unique:users',
            //密码规则
            "password"=>'required|regex:/\w{6,18}/',
            //确认密码
             "repassword"=>'required|regex:/\w{6,18}/|same:password',
             //邮箱规则
            "email"=>"required|email|unique:users",
            //电话规则
            'phone'=>'required|regex:/\d{11}/|unique:users',
        ];
    }
    public function messages(){
        return[
            "name.required"=>"名字不能为空",
            "name.regex"=>"用户名必须是4-16位任意的数字字母或者下划线",
            "name.unique"=>"名字重复",
            "password.required"=>"密码不能为空",
            "password.regex"=>"密码必须是6-18位任意的数字字母或者下划线",
            "repassword.required"=>"确认密码不能为空",
            "repassword.reggex"=>"用确认密码必须是4-16位任意的数字字母或者下划线",
            "repassword.same"=>"确认密码重复",
             "email.required"=>"邮箱不能为空",
            "email.regex"=>"邮箱规则不正确",
            "email.unique"=>"邮箱重复",
            "phone.required"=>"电话不能为空",
            "phone.regex"=>"电话规则不正确",
            "phone.unique"=>"电话重复",
        ];
    }
}
