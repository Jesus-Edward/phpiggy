<?php

declare(strict_types=1);

namespace App\Services;

use Framework\Validator;
use Framework\Rules\{
    RequiredRule,
    EmailRule,
    MinRule,
    InRule,
    LengthMaxRule,
    UrlRule,
    MatchRule,
    NumericRule,
    DateFormatRule
};

class ValidatorService
{
    private Validator $validator;

    public function __construct()
    {
        $this->validator = new Validator();

        $this->validator->addRules('required', new RequiredRule());
        $this->validator->addRules('email', new EmailRule());
        $this->validator->addRules('min', new MinRule());
        $this->validator->addRules('in', new InRule());
        $this->validator->addRules('url', new UrlRule());
        $this->validator->addRules('match', new MatchRule());
        $this->validator->addRules('lengthMax', new LengthMaxRule());
        $this->validator->addRules('numeric', new NumericRule());
        $this->validator->addRules('dateFormat', new DateFormatRule());
    }

    public function validateRegister(array $formData)
    {
        $this->validator->validate($formData, [
            'email' => ['required', 'email'],
            'age' => ['required', 'min:18'],
            'country' => ['required', 'in:USA,Canada,Mexico'],
            'socialMediaUrl' => ['required', 'url'],
            'password' => ['required'],
            'confirmedPassword' => ['required', 'match:password'],
            'tos' => ['required']
        ]);
    }

    public function validateLogin(array $formData)
    {
        $this->validator->validate($formData, [
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
    }

    public function validateTransaction($formData)
    {
        $this->validator->validate(
            $formData,
            [
                'description' => ['required', 'lengthMax:255'],
                'amount' => ['required', 'numeric'],
                'date' => ['required', 'dateFormat:Y-m-d']
            ]
        );
    }
}
