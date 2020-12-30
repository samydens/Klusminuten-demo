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

    'accepted' => 'De :attribute moet geaccepteerd worden.',
    'active_url' => 'De :attribute is geen geldig URL.',
    'after' => 'De :attribute moet een datum zijn na :date.',
    'after_or_equal' => 'De :attribute moet een datum na of gelijk aan :date zijn.',
    'alpha' => 'De :attribute mag alleen letters bevatten.',
    'alpha_dash' => 'De :attribute mag alleen letters, nummers, dashes en underscores bevatten.',
    'alpha_num' => 'De :attribute mag alleen letters en nummers bevatten.',
    'array' => 'De :attribute moet een array zijn.',
    'before' => 'De :attribute moet een datum voor :date zijn.',
    'before_or_equal' => 'De :attribute moet een datum voor of gelijk aan :date zijn.',
    'between' => [
        'numeric' => 'De :attribute moet tussen :min en :max zijn.',
        'file' => 'De :attribute moet tussen :min en :max kilobytes zijn.',
        'string' => 'De :attribute moet tussen :min en :max karakters zijn.',
        'array' => 'The :attribute moet tussen :min en :max items hebben.',
    ],
    'boolean' => 'De :attribute veld moet True of False zijn.',
    'confirmed' => 'De :attribute confirmatie komt niet overeen.',
    'date' => 'De :attribute is geen geldige datum.',
    'date_equals' => 'De :attribute moet een datum gelijk aan :date zijn.',
    'date_format' => 'De :attribute is niet volgens :format.',
    'different' => 'De :attribute en :other moeten uniek zijn.',
    'digits' => 'De :attribute moet :digits digits zijn.',
    'digits_between' => 'De :attribute moet tussen de :min en :max digits.',
    'dimensions' => 'De :attribute heeft ongeldige afmetingen.',
    'distinct' => 'De :attribute heeft een dubbele waarde.',
    'email' => 'De :attribute moet een geldig email adres zijn.',
    'ends_with' => 'De :attribute moet eindigen met een van de volgende: :values.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'file' => 'De :attribute moet een bestand zijn.',
    'filled' => 'De :attribute veld moet een waarde hebben.',
    'gt' => [
        'numeric' => 'De :attribute moet groter zijn dan :value.',
        'file' => 'De :attribute moet groter zijn dan :value kilobytes.',
        'string' => 'De :attribute moet groter zijn dan :value karakters.',
        'array' => 'De :attribute moet groter zijn dan :value items.',
    ],
    'gte' => [
        'numeric' => 'De :attribute moet gelijk aan of groter dan :value zijn.',
        'file' => 'De :attribute moet gelijk aan of groter dan :value kilobytes zijn.',
        'string' => 'De :attribute moet gelijk aan of groter dan :value characters zijn.',
        'array' => 'De :attribute moet :value items of meer hebben.',
    ],
    'image' => 'De :attribute moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'in_array' => 'De :attribute veld bestaat niet in :other.',
    'integer' => 'De :attribute moet een integer zijn.',
    'ip' => 'De :attribute moet een geldig IP address zijn.',
    'ipv4' => 'De :attribute moet een geldig IPv4 address zijn.',
    'ipv6' => 'De :attribute moet een geldig IPv6 address zijn.',
    'json' => 'De :attribute moet een geldige JSON string zijn.',
    'lt' => [
        'numeric' => 'De :attribute moet minder zijn dan :value.',
        'file' => 'De :attribute moet minder zijn dan :value kilobytes.',
        'string' => 'De :attribute moet minder zijn dan :value characters.',
        'array' => 'De :attribute moet minder zijn dan :value items.',
    ],
    'lte' => [
        'numeric' => 'De :attribute moet gelijk aan of minder dan :value zijn.',
        'file' => 'De :attribute moet gelijk aan of minder dan :value kilobytes.',
        'string' => 'De :attribute moet gelijk aan of minder dan :value characters.',
        'array' => 'De :attribute moet meer dan :value items hebben.',
    ],
    'max' => [
        'numeric' => 'De :attribute mag niet meer zijn dan :max.',
        'file' => 'De :attribute mag niet meer zijn dan :max kilobytes.',
        'string' => 'De :attribute mag niet meer zijn dan :max characters.',
        'array' => 'De :attribute mag niet meer zijn dan :max items.',
    ],
    'mimes' => 'De :attribute moet een bestandstype hebben van: :values.',
    'mimetypes' => 'De :attribute moet een bestandstype hebben van: :values.',
    'min' => [
        'numeric' => 'De :attribute moet minimaal :min zijn.',
        'file' => 'De :attribute moet minimaal :min kilobytes zijn.',
        'string' => 'De :attribute moet minimaal :min characters zijn.',
        'array' => 'De :attribute moet minstens :min items hebben.',
    ],
    'multiple_of' => 'De :attribute moet een meerfout van :value zijn',
    'not_in' => 'De geselecteerde :attribute is ongeldig.',
    'not_regex' => 'De :attribute format is ongeldig.',
    'numeric' => 'De :attribute moet een nummer zijn.',
    'password' => 'Het wachtwoord is onjuist.',
    'present' => 'De :attribute veld moet aanwezig zijn.',
    'regex' => 'De :attribute format is ongeldig.',
    'required' => 'De :attribute field is verplicht.',
    'required_if' => 'De :attribute is verplicht wanneer :other is :value.',
    'required_unless' => 'De :attribute veld is verplicht tenzij :other is in :values.',
    'required_with' => 'De :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all' => 'De :attribute veld is verplicht als :values aanwezig zijn.',
    'required_without' => 'De :attribute veld is verplicht als :values niet aanwezig zijn.',
    'required_without_all' => 'De :attribute veld is verplicht als er geen :values aanwezig zijn.',
    'same' => 'De :attribute en :other moeten overeenkomen.',
    'size' => [
        'numeric' => 'De :attribute moet :size zijn.',
        'file' => 'De :attribute moet :size kilobytes zijn.',
        'string' => 'De :attribute moet :size characters zijn.',
        'array' => 'De :attribute moet :size items bevatten.',
    ],
    'starts_with' => 'De :attribute moet met een van het volgende beginnen: :values.',
    'string' => 'De :attribute moet een string zijn.',
    'timezone' => 'De :attribute moet een geldige zone zijn.',
    'unique' => 'De :attribute is al in gebruik.',
    'uploaded' => 'De :attribute faalde te uploaden.',
    'url' => 'De :attribute formaat is ongeldig.',
    'uuid' => 'De :attribute moet een geldige UUID zijn.',

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
