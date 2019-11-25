<?php
namespace App\Validators;

use App\Validator;

class DefautValidator{

    private $data;
    private $validator;

    public function __construct(array $data, array $services, array $etat)
    {
        $this->data = $data;
        $v = new Validator($data);
        $v->rule('required', ['lieu', 'services', 'nature','etat']);
        $v->rule('subset', 'services', $services);
        $v->rule('subset', 'etat', $etat);
        $v->rule('photo', 'photo');
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