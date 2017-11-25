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

    'accepted'             => 'Il campo :attribute deve essere accettato.',
    'active_url'           => 'Il campo :attribute non è un URL valido.',
    'after'                => 'Il campo :attribute deve essere una data successiva al :date.',
    'after_or_equal'       => 'Il campo :attribute deve essere una data successiva o pari al :date.',
    'alpha'                => 'Il campo :attribute può contenere solo lettere.',
    'alpha_dash'           => 'Il campo :attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num'            => 'Il campo :attribute può contenere solo lettere e numeri.',
    'array'                => 'Il campo :attribute deve essere un array.',
    'before'               => 'Il campo :attribute deve essere una data antecedente al :date.',
    'before_or_equal'      => 'Il campo :attribute deve essere una data antecedente o pari al :date.',
    'between'              => [
        'numeric' => 'Il campo :attribute deve essere compreso tra :min e :max.',
        'file'    => 'Il campo :attribute deve essere compreso tra :min e :max kB.',
        'string'  => 'Il campo :attribute deve essere compreso tra :min e :max caratteri.',
        'array'   => 'Il campo :attribute deve contenere tra :min e :max elementi.',
    ],
    'boolean'              => 'Il campo :attribute deve essere vero o falso.',
    'confirmed'            => 'La conferma del campo :attribute non coincide.',
    'date'                 => 'Il campo :attribute non è una data valida.',
    'date_format'          => 'Il campo :attribute non è nel formato :format.',
    'different'            => 'Il campo :attribute e il campo :other devono essere differenti.',
    'digits'               => 'Il campo :attribute deve avere :digits cifre.',
    'digits_between'       => 'Il campo :attribute deve avere tra :min e :max cifre.',
    'dimensions'           => "L'immagine del campo :attribute ha dimensioni non valide.",
    'distinct'             => 'Il campo :attribute contiene un valore duplicato.',
    'email'                => 'Il campo :attribute deve essere un indirizzo e-mail valido.',
    'exists'               => 'Il campo :attribute ha un valore non valido.',
    'file'                 => 'Il campo :attribute deve essere un file.',
    'filled'               => 'Il campo :attribute deve essere valorizzato.',
    'image'                => "Il campo :attribute deve essere un'immagine.",
    'in'                   => 'Il campo :attribute ha un valore non valido.',
    'in_array'             => 'Il valore del campo :attribute non esiste in :other.',
    'integer'              => 'Il campo :attribute deve essere un numero intero.',
    'ip'                   => 'Il campo :attribute deve essere un indirizzo IP valido.',
    'ipv4'                 => 'Il campo :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6'                 => 'Il campo :attribute deve essere un indirizzo IPv6 valido.',
    'json'                 => 'Il campo :attribute deve essere un JSON valido.',
    'max'                  => [
        'numeric' => 'Il campo :attribute non può essere superiore a :max.',
        'file'    => 'Il campo :attribute non può essere più grande di :max kB.',
        'string'  => 'Il campo :attribute non può avere più di :max caratteri.',
        'array'   => 'Il campo :attribute non può contenere più di :max elementi.',
    ],
    'mimes'                => 'Il campo :attribute deve essere un file di tipo: :values.',
    'mimetypes'            => 'Il campo :attribute deve essere un file di tipo: :values.',
    'min'                  => [
        'numeric' => 'Il campo :attribute deve essere superiore a :min.',
        'file'    => 'Il campo :attribute deve essere più grande di :min kB.',
        'string'  => 'Il campo :attribute deve avere almeno :min caratteri.',
        'array'   => 'Il campo :attribute deve contenere almeno :min elementi.',
    ],
    'not_in'               => 'Il campo :attribute ha un valore non valido.',
    'numeric'              => 'Il campo :attribute deve essere un numero.',
    'present'              => 'Il campo :attribute deve essere presente.',
    'regex'                => 'Il formato del campo :attribute non è valido.',
    'required'             => 'Il campo :attribute è richiesto.',
    'required_if'          => 'Il campo :attribute è richiesto quando il campo :other ha valore :value.',
    'required_unless'      => 'Il campo :attribute è richiesto a meno che il campo :other sia compreso in :values.',
    'required_with'        => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_with_all'    => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_without'     => 'Il campo :attribute è richiesto quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è richiesto quando :values non sono presenti.',
    'same'                 => 'I campi :attribute e :other devono coincidere.',
    'size'                 => [
        'numeric' => 'Il campo :attribute deve essere pari a :size.',
        'file'    => 'Il campo :attribute deve essere pari a :size kB.',
        'string'  => 'Il campo :attribute deve avere :size caratteri.',
        'array'   => 'Il campo :attribute deve contenere :size elementi.',
    ],
    'string'               => 'Il campo :attribute deve essere una stringa.',
    'timezone'             => 'Il campo :attribute deve essere un fuso orario valido.',
    'unique'               => 'Il campo :attribute è stato già utilizzato.',
    'uploaded'             => 'Il caricamento del campo :attribute è fallito.',
    'url'                  => 'Il formato del campo :attribute non è valido.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'date' => 'data',
        'name' => 'nome',
    ],

];