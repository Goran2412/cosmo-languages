<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'La :attribute no es una URL válidia.',
    'after' => 'La :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'La :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute sólo puede contener letras.',
    'alpha_dash' => 'El :attribute sólo puede contener letras, números, guiones o guiones bajos.',
    'alpha_num' => 'El :attribute sólo puede contener letras y números.',
    'array' => 'El :attribute tiene que ser un conjunto.',
    'before' => 'La :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'La :attribute debe ser anterior o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute tiene que estar entre :min y :max kilobytes.',
        'string' => 'El :attribute tiene que ser :min y :max caracteres.',
        'array' => 'El :attribute tiene que tener entre :min y :max items.',
    ],
    'boolean' => 'El campo :attribute tiene que ser un booleano.',
    'confirmed' => 'La :attribute de confirmación no concuerda.',
    'date' => 'La :attribute no es una fecha válida.',
    'date_equals' => 'La :attribute tiene que ser una fecha igual a :date.',
    'date_format' => 'El :attribute no concuerda con el formato :format.',
    'different' => 'El :attribute y :other deben ser diferentes.',
    'digits' => 'El :attribute debe de ser de :digits dígitos.',
    'digits_between' => 'El :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => 'La :attribute tiene dimensiones inválidas.',
    'distinct' => 'El :attribute contiene un valor duplicado.',
    'email' => 'El :attribute debe ser un email válido.',
    'ends_with' => 'El :attribute debe terminar con alguno de estos valores: :values.',
    'exists' => 'El :attribute seleccionado es inválido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute debe contenter un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe que ser mayor a :value.',
        'file' => 'El :attribute debe ser mayor a :value kilobytes.',
        'string' => 'El :attribute debe ser mayor a :value caracteres.',
        'array' => 'El :attribute debe contener más de :value items.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor o igual a :value.',
        'file' => 'El :attribute debe ser mayor o igual a :value kilobytes.',
        'string' => 'El :attribute debe contener un valor de caracteres igual o mayor que :value.',
        'array' => 'El :attribute debe contener :value items o más.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado es inválido.',
    'in_array' => 'El campo :attribute debe existir en :other.',
    'integer' => 'El :attribute tiene que ser un entero.',
    'ip' => 'La :attribute debe ser una dirección IP válida.',
    'ipv4' => 'La :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'La :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser un string JSON válido.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor a :value.',
        'file' => 'El :attribute debe ser menor a :value kilobytes.',
        'string' => 'El :attribute debe contener menos de :value caracteres.',
        'array' => 'El :attribute debe contener menos de :value items.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor o igual a :value.',
        'file' => 'El :attribute debe ser menor o igual a :value kilobytes.',
        'string' => 'El :attribute debe contener un valor de caracteres igual o menor que :value.',
        'array' => 'El :attribute no debe tener más de :value items.',
    ],
    'max' => [
        'numeric' => 'El :attribute no debe ser mayor a :max.',
        'file' => 'El :attribute no debería ser mayor a :max kilobytes.',
        'string' => 'El :attribute no debería contener más de :max caracteres.',
        'array' => 'El :attribute no debería contener más de :max items.',
    ],
    'mimes' => 'El :attribute debe ser un archivo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo del tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser de al menos :min.',
        'file' => 'El :attribute debe ser de al menos :min kilobytes.',
        'string' => 'El :attribute debe ser de al menos :min characters.',
        'array' => 'El :attribute debe contener al menos :min items.',
    ],
    'not_in' => 'El :attribute seleccionado es inválido.',
    'not_regex' => 'El formato de :attribute es inválido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El :attribute debe estar presente.',
    'regex' => 'El formato del :attribute.',
    'required' => 'El campo :attribute es requerido.',
    'required_if' => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless' => 'El campo :attribute es requerido a menos que :other sea de :values.',
    'required_with' => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es requerido cuando :values están presentes.',
    'required_without' => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de los valores :values están presentes.',
    'same' => ':attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El :attribute tiene que tener un tamaño de :size.',
        'file' => 'El :attribute debe ser de :size kilobytes.',
        'string' => 'El :attribute debe contener :size caracteres.',
        'array' => 'El :attribute debe contener :size items.',
    ],
    'starts_with' => 'El :attribute debe comenzar con: :values.',
    'string' => 'El :attribute debe ser un string.',
    'timezone' => 'El :attribute debe ser una zona válida.',
    'unique' => 'El :attribute ya está siendo utilizado.',
    'uploaded' => 'Fallo al cargar el :attribute.',
    'url' => 'El formato del :attribute es inválido.',
    'uuid' => 'El :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
