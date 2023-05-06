<?php

namespace Validators;

use Validator\AbstractValidator;
use Validator\Validator;

class RequireValidator extends AbstractValidator
{

    protected string $message = 'Field :field is required';

    public function rule(): bool
    {
        return !empty($this->value);
    }
}
