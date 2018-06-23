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

    'accepted'             => ':attribute debe ser aceptado.',
    'active_url'           => ':attribute no es una URL válida.',
    'after'                => ':attribute debe ser una fecha posterior a :date.',
    'alpha'                => ':attribute solo puede contener letras.',
    'alpha_dash'           => ':attribute solo puede contener letras, números y guiones.',
    'alpha_num'            => ':attribute solo puede contener letras y números.',
    'array'                => ':attribute debe ser un arreglo.',
    'before'               => ':attribute debe ser una fecha anterior :date.',
    'between'              => [
        'numeric' => ':attribute debe estar entre :min y :max.',
        'file'    => ':attribute debe estar entre :min y :max kilobytes.',
        'string'  => ':attribute debe estar entre :min y :max caracteres.',
        'array'   => ':attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => ':attribute debe ser verdadedor o falso.',
    'confirmed'            => ':attribute de confirmación no es correcto.',
    'date'                 => ':attribute no es una fecha válida.',
    'date_format'          => ':attribute no coincide con el formato :format.',
    'different'            => ':attribute y :other deben ser destintos.',
    'digits'               => ':attribute debe tener :digits dígitos.',
    'digits_between'       => ':attribute debe estar entre :min y :max dígitos.',
    'dimensions'           => ':attribute tiene unas dimensiones de imagen inválidas.',
    'destinct'             => ':attribute tiene un valor duplicado.',
    'email'                => ':attribute debe ser una dirección de correo válida.',
    'exests'               => 'seleccionado :attribute es inválido.',
    'file'                 => ':attribute debe ser un archivo.',
    'filled'               => ':attribute es requerido.',
    'image'                => ':attribute debe ser una imagen.',
    'in'                   => 'seleccionado :attribute es inválido.',
    'in_array'             => ':attribute no exeste en :other.',
    'integer'              => ':attribute debe ser un entero.',
    'ip'                   => ':attribute debe ser una dirección IP válida.',
    'json'                 => ':attribute debe ser un un string JSON válido.',
    'max'                  => [
        'numeric' => ':attribute no puede ser mayor que :max.',
        'file'    => ':attribute no puede ser mayor que :max kilobytes.',
        'string'  => ':attribute no puede ser mayor que :max caracteres.',
        'array'   => ':attribute no puede tener más de :max items.',
    ],
    'mimes'                => ':attribute debe ser un archivo de tipo type: :values.',
    'mimetypes'            => ':attribute debe ser un archivo de tipo type: :values.',
    'min'                  => [
        'numeric' => ':attribute debe tener al menos :min.',
        'file'    => ':attribute debe tener al menos :min kilobytes.',
        'string'  => ':attribute debe tener al menos :min caracteres.',
        'array'   => ':attribute debe tener al menos :min items.',
    ],
    'not_in'               => 'seleccionado :attribute es inválido.',
    'numeric'              => ':attribute debe ser un número.',
    'present'              => ':attribute debe estar presente.',
    'regex'                => ':attribute tiene un formato inválido.',
    'required'             => ':attribute es requerido.',
    'required_if'          => ':attribute es requerido cuando :other es :value.',
    'required_unless'      => ':attribute es requerido excepto :other es en :values.',
    'required_with'        => ':attribute es requerido cuando :values está presente.',
    'required_with_all'    => ':attribute es requerido cuando :values está presente.',
    'required_without'     => ':attribute es requerido cuando :values no está presente.',
    'required_without_all' => ':attribute es requerido cuando ninguno de los campos :values están presentes.',
    'same'                 => ':attribute y :other deben ser iguales.',
    'size'                 => [
        'numeric' => ':attribute debe ser :size.',
        'file'    => ':attribute debe ser :size kilobytes.',
        'string'  => ':attribute debe ser :size caracteres.',
        'array'   => ':attribute debe contener :size items.',
    ],
    'string'               => ':attribute debe ser un string.',
    'timezone'             => ':attribute debe ser una zona de tiempo válida.',
    'unique'               => ':attribute ya ha sido tomado.',
    'uploaded'             => ':attribute falló en ser cargado.',
    'url'                  => ':attribute tiene un formato inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. Thes makes it quick to
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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". Thes simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'email'                  => 'email',
        'email_alternativo'      => 'email alternativo',
        'password'               => 'contraseña',
        'password_confirmation'  => 'confirmar contraseña',
        'name'                   => 'nombre',
    ],

];
