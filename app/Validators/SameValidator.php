<?php

namespace Validators;

use Src\Request;
use Src\Validator\AbstractValidator;


class SameValidator extends AbstractValidator
{

    protected string $message = 'Password are not the same';

    public function rule(Request $request): bool
    {
        if ($request->get(['confirm_password' == 'password'])){
            return true;
        }
        return false;
    }
}
