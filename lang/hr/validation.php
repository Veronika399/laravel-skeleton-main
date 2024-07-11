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

    'accepted' => 'Polje :attribute mora biti prihvaćeno.',
    'accepted_if' => 'Polje :attribute mora biti prihvaćeno kada je :other :value.',
    'active_url' => 'Polje :attribute mora biti ispravan URL.',
    'after' => 'Polje :attribute mora biti datum nakon :date.',
    'after_or_equal' => 'Polje :attribute mora biti datum nakon ili jednak :date.',
    'alpha' => 'Polje :attribute može sadržavati samo slova.',
    'alpha_dash' => 'Polje :attribute može sadržavati samo slova, brojeve, crtice i donje crte.',
    'alpha_num' => 'Polje :attribute može sadržavati samo slova i brojeve.',
    'array' => 'Polje :attribute mora biti niz.',
    'ascii' => 'Polje :attribute može sadržavati samo jednobajtne alfanumeričke znakove i simbole.',
    'before' => 'Polje :attribute mora biti datum prije :date.',
    'before_or_equal' => 'Polje :attribute mora biti datum prije ili jednak :date.',
    'between' => [
        'array' => 'Polje :attribute mora imati između :min i :max stavki.',
        'file' => 'Polje :attribute mora biti između :min i :max kilobajta.',
        'numeric' => 'Polje :attribute mora biti između brojeva :min i :max.',
        'string' => 'Polje :attribute mora imati između :min i :max znakova.',
    ],
    'boolean' => 'Polje :attribute mora biti istina ili laž.',
    'can' => 'Polje :attribute sadrži neautoriziranu vrijednost.',
    'confirmed' => 'Potvrda polja :attribute se ne podudara.',
    'current_password' => 'Lozinka nije ispravna.',
    'date' => 'Polje :attribute mora biti ispravan datum.',
    'date_equals' => 'Polje :attribute mora biti datum jednak :date.',
    'date_format' => 'Polje :attribute se ne podudara s formatom :format.',
    'decimal' => 'Polje :attribute mora imati :decimal decimalnih mjesta.',
    'declined' => 'Polje :attribute mora biti odbijeno.',
    'declined_if' => 'Polje :attribute mora biti odbijeno kada je :other :value.',
    'different' => 'Polje :attribute i :other moraju biti različiti.',
    'digits' => 'Polje :attribute mora imati :digits znamenki.',
    'digits_between' => 'Polje :attribute mora imati između :min i :max znamenki.',
    'dimensions' => 'Polje :attribute ima nevaljane dimenzije slike.',
    'distinct' => 'Polje :attribute ima duplu vrijednost.',
    'doesnt_end_with' => 'Polje :attribute ne smije završavati s jednom od sljedećih vrijednosti: :values.',
    'doesnt_start_with' => 'Polje :attribute ne smije počinjati s jednim od sljedećih vrijednosti: :values.',
    'email' => 'Polje :attribute mora biti ispravna adresa e-pošte.',
    'ends_with' => 'Polje :attribute mora završavati s jednim od sljedećih vrijednosti: :values.',
    'enum' => 'Odabrano :attribute je nevažeće.',
    'exists' => 'Odabrano :attribute je nevažeće.',
    'file' => 'Polje :attribute mora biti datoteka.',
    'filled' => 'Polje :attribute mora imati vrijednost.',
    'gt' => [
        'array' => 'Polje :attribute mora imati više od :value stavki.',
        'file' => 'Polje :attribute mora biti veće od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti veće od broja :value.',
        'string' => 'Polje :attribute mora imati više od :value znakova.',
    ],
    'gte' => [
        'array' => 'Polje :attribute mora imati :value stavki ili više.',
        'file' => 'Polje :attribute mora biti više ili jednako od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti veće ili jednako broju :value.',
        'string' => 'Polje :attribute mora imati više ili jednako od :value znakova.',
    ],
    'image' => 'Polje :attribute mora biti slika.',
    'in' => 'Odabrano :attribute je nevažeće.',
    'in_array' => 'Polje :attribute mora postojati u :other.',
    'integer' => 'Polje :attribute mora biti cjelobrojni broj.',
    'ip' => 'Polje :attribute mora biti ispravna IP adresa.',
    'ipv4' => 'Polje :attribute mora biti ispravna IPv4 adresa.',
    'ipv6' => 'Polje :attribute mora biti ispravna IPv6 adresa.',
    'json' => 'Polje :attribute mora biti ispravan JSON zapis.',
    'lowercase' => 'Polje :attribute mora biti upisano malim slovima.',
    'lt' => [
        'array' => 'Polje :attribute mora imati manje od :value stavki.',
        'file' => 'Polje :attribute mora biti manje od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti manje od :value.',
        'string' => 'Polje :attribute mora imati manje od :value znakova.',
    ],
    'lte' => [
        'array' => 'Polje :attribute ne smije imati više od :value stavki.',
        'file' => 'Polje :attribute mora biti manje ili jednako od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti manje ili jednako od :value.',
        'string' => 'Polje :attribute mora imati manje ili jednako od :value znakova.',
    ],
    'mac_address' => 'Polje :attribute mora biti ispravna MAC adresa.',
    'max' => [
        'array' => 'Polje :attribute ne smije imati više od :max stavki.',
        'file' => 'Polje :attribute ne smije biti veće od :max kilobajta.',
        'numeric' => 'Polje :attribute ne smije biti veće od :max.',
        'string' => 'Polje :attribute ne smije imati više od :max znakova.',
    ],
    'max_digits' => 'Polje :attribute ne smije imati više od :max znamenki.',
    'mimes' => 'Polje :attribute mora biti datoteka tipa: :values.',
    'mimetypes' => 'Polje :attribute mora biti datoteka tipa: :values.',
    'min' => [
        'array' => 'Polje :attribute mora imati najmanje :min stavki.',
        'file' => 'Polje :attribute mora biti najmanje :min kilobajta.',
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'string' => 'Polje :attribute mora imati najmanje :min znakova.',
    ],
    'min_digits' => 'Polje :attribute mora imati najmanje :min znamenki.',
    'missing' => 'Polje :attribute mora biti prazno.',
    'missing_if' => 'Polje :attribute mora biti prazno kada je :other :value.',
    'missing_unless' => 'Polje :attribute mora biti prazno osim ako je :other :value.',
    'missing_with' => 'Polje :attribute mora biti prazno kada je :values prisutno.',
    'missing_with_all' => 'Polje :attribute mora biti prazno kada su :values prisutni.',
    'multiple_of' => 'Polje :attribute mora biti višekratnik broja :value.',
    'not_in' => 'Odabrano :attribute je nevažeće.',
    'not_regex' => 'Format polja :attribute nije ispravan.',
    'numeric' => 'Polje :attribute mora biti broj.',
    'password' => [
        'letters' => 'Polje :attribute mora sadržavati barem jedno slovo.',
        'mixed' => 'Polje :attribute mora sadržavati barem jedno veliko i jedno malo slovo.',
        'numbers' => 'Polje :attribute mora sadržavati barem jedan broj.',
        'symbols' => 'Polje :attribute mora sadržavati barem jedan simbol.',
        'uncompromised' => 'Zadana :attribute se pojavljuje u data leak-u. Odaberite drugu :attribute.',
    ],
    'present' => 'Polje :attribute mora biti prisutno.',
    'prohibited' => 'Polje :attribute je zabranjeno.',
    'prohibited_if' => 'Polje :attribute je zabranjeno kada je :other :value.',
    'prohibited_unless' => 'Polje :attribute je zabranjeno osim ako :other nije u :values.',
    'prohibits' => 'Polje :attribute zabranjuje prisutnost :other.',
    'regex' => 'Format polja :attribute nije ispravan.',
    'required' => 'Polje :attribute je obavezno.',
    'required_array_keys' => 'Polje :attribute mora sadržavati unose za: :values.',
    'required_if' => 'Polje :attribute je obavezno kada je :other :value.',
    'required_if_accepted' => 'Polje :attribute je obavezno kada je :other prihvaćeno.',
    'required_unless' => 'Polje :attribute je obavezno osim ako je :other u :values.',
    'required_with' => 'Polje :attribute je obavezno kada je :values prisutno.',
    'required_with_all' => 'Polje :attribute je obavezno kada su :values prisutni.',
    'required_without' => 'Polje :attribute je obavezno kada :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je obavezno kada ni jedan od :values nije prisutan.',
    'same' => 'Polje :attribute mora se podudarati s :other.',
    'size' => [
        'array' => 'Polje :attribute mora sadržavati :size stavki.',
        'file' => 'Polje :attribute mora biti :size kilobajta.',
        'numeric' => 'Polje :attribute mora biti :size.',
        'string' => 'Polje :attribute mora imati :size znakova.',
    ],
    'starts_with' => 'Polje :attribute mora početi s jednim od sljedećih vrijednosti: :values.',
    'string' => 'Polje :attribute mora biti tekst.',
    'timezone' => 'Polje :attribute mora biti ispravna vremenska zona.',
    'unique' => 'Polje :attribute već postoji.',
    'uploaded' => 'Polju :attribute nije uspjelo učitavanje.',
    'uppercase' => 'Polje :attribute mora biti upisano velikim slovima.',
    'url' => 'Polje :attribute mora biti ispravan URL.',
    'ulid' => 'Polje :attribute mora biti ispravan ULID.',
    'uuid' => 'Polje :attribute mora biti ispravan UUID.',

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

    'attributes' => [
        'name' => 'ime',
        'email' => 'email adresa',
        'password' => 'lozinka',
    ],

];
