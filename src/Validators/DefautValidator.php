<?php
namespace App\Validators;

use App\Validator;

class DefautValidator{

    private $data;
    private $validator;

    public function __construct(array $data)
    {
        $this->data = $data;
        $v = new Validator($data);
        $v->rule('required', ['lieu', 'service']);
        $v->rule('lengthMin', ['lieu', 'service'], 5);
        $this->validator = $v;
    }

    public function validate(): bool
    {
        return $this->validator->validate();
    }

    public function errors(): array
    {
        return $this->validator->errors();
    }
}