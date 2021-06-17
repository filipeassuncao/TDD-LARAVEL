<?php

return [
    'validation' => [
        'email.required' => 'O E-mail do usuário é obrigatório',
        'password.required' => 'A senha é obrigatória',
        'email.email' => 'O campo E-mail deve conter um email valido',
        'password.min' => 'A senha do usuário deve ser maior do que 6 caracteres',
    ],
    'invalid_fields' => ['nu_codigo' => 'MSG001', 'ds_mensagem' => 'Campos inválidos','fields' => []],
    'invalid' => ['nu_codigo' => 'MSG002', 'ds_mensagem' => 'Email ou senha inválidos'],
    'forbidden' => ['nu_codigo' => 'MSG003', 'ds_mensagem' => 'Você não tem permissão para acessar esse sistema'],
];
