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

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'alpha'                => 'El campo :attribute solo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute solo puede contener letras, números y guiones.',
    'alpha_num'            => 'El campo :attribute solo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un arreglo.',
    'before'               => 'El campo :attribute debe ser una fecha anterior :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'file'    => 'El campo :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe estar entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadedor o falso.',
    'confirmed'            => 'El campo :attribute de confirmación no es correcto.',
    'date'                 => 'El campo :attribute no es una fecha válida.',
    'date_format'          => 'El campo :attribute no coincide con el formato :format.',
    'different'            => 'El campo :attribute y :other deben ser destintos.',
    'digits'               => 'El campo :attribute debe tener :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe estar entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute tiene unas dimensiones de imagen inválidas.',
    'destinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute debe ser una dirección de correo válida.',
    'exests'               => 'El campo seleccionado :attribute es inválido.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute es requerido.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo seleccionado :attribute es inválido.',
    'in_array'             => 'El campo :attribute no exeste en :other.',
    'integer'              => 'El campo :attribute debe ser un entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'json'                 => 'El campo :attribute debe ser un un string JSON válido.',
    'max'                  => [
        'numeric' => 'El campo :attribute no puede ser mayor que :max.',
        'file'    => 'El campo :attribute no puede ser mayor que :max kilobytes.',
        'string'  => 'El campo :attribute no puede ser mayor que :max caracteres.',
        'array'   => 'El campo :attribute no puede tener más de :max items.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo type: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo type: :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'file'    => 'El campo :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe tener al menos :min caracteres.',
        'array'   => 'El campo :attribute debe tener al menos :min items.',
    ],
    'not_in'               => 'El campo seleccionado :attribute es inválido.',
    'numeric'              => 'El campo :attribute debe ser un número.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El campo :attribute tiene un formato inválido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido excepto :other es en :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values está presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de los campos :values están presentes.',
    'same'                 => 'El campo :attribute y :other deben ser iguales.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El campo :attribute debe ser :size kilobytes.',
        'string'  => 'El campo :attribute debe ser :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size items.',
    ],
    'string'               => 'El campo :attribute debe ser un string.',
    'timezone'             => 'El campo :attribute debe ser una zona de tiempo válida.',
    'unique'               => 'El campo :attribute ya ha sido tomado.',
    'uploaded'             => 'El campo :attribute falló en ser cargado.',
    'url'                  => 'El campo :attribute tiene un formato inválido.',

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
        'tipo_area_medica_id'    => 'tipo de área médica',
        'area_medica_id'         => 'área médica',
        'parroquia_id'           => 'parroquia',
        'parroquia_familiar'     => 'parroquia familiar emergencia',
        'especialidad_id'        => 'especialidad',
        'tipo_medico_id'         => 'Tipo de Médico',
        'consultorio_id'         => 'consultorio',
        'valor_consulta'         => 'valor consulta',
        'firma_file'             => 'firma',
    ],

];
