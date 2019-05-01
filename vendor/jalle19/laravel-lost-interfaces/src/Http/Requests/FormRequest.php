<?php

namespace Jalle19\Laravel\LostInterfaces\Http\Requests;

/**
 * Interface for form requests
 *
 * @package Jalle19\Laravel\LostInterfaces\Http\Requests
 */
interface FormRequest
{

    /**
     * Determine if the request passes the authorization check.
     *
     * @return bool
     */
    public function authorize();

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules();

}
