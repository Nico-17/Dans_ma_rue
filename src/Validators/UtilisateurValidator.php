<?php
namespace App\Validators;

use App\Validator;

class UtilisateurValidator{

    private $data;
    private $validator;

    public function __construct(array $data, array $acces)
    {
        $this->data = $data;
        $v = new Validator($data);
        $v->rule('required', ['prenom', 'nom', 'role', 'acces', 'username', 'password']);
        $v->rule('lengthMin', ['username', 'password'], 8);
        $v->rule('subset', 'acces', $acces);
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