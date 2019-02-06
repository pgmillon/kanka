<?php

return [
    'create'        => [
        'description'   => 'Új dobás létrehozása',
        'success'       => ':name dobást létrehoztuk.',
        'title'         => 'Új dobás',
    ],
    'destroy'       => [
        'dice_roll' => 'A dobást eltávolítottuk.',
        'success'   => '\':name\' dobást eltávolítottuk.',
    ],
    'edit'          => [
        'description'   => 'Dobás szerkesztése',
        'success'       => '\':name\' dobást frissítettük.',
        'title'         => ':name dobás szerkesztése',
    ],
    'fields'        => [
        'created_at'    => 'Dobott',
        'name'          => 'Név',
        'parameters'    => 'Paraméterek',
        'results'       => 'Eredmények',
        'rolls'         => 'Dobások',
    ],
    'hints'         => [
        'parameters'    => 'Milyen kockákat használhatok?',
    ],
    'index'         => [
        'actions'       => [
            'dice'      => 'Dobások',
            'results'   => 'Eredmények',
        ],
        'add'           => 'Új dobás',
        'description'   => ':name dobás kezelése',
        'header'        => ':name dobásai',
        'title'         => 'Dobások',
    ],
    'placeholders'  => [
        'dice_roll' => 'Dobás',
        'name'      => 'Dobás megnevezése',
        'parameters'=> '4d6+3',
    ],
    'results'       => [
        'actions'   => [
            'add'   => 'Gurítás',
        ],
        'error'     => 'A dobás sikertelen. Nem tudjuk értelmezni a paramétereket.',
        'fields'    => [
            'creator'   => 'Létrehozó',
            'date'      => 'Dátum',
            'result'    => 'Eredmény',
        ],
        'hint'      => 'Ehhez a dobássablonhoz minden dobás kész van.',
        'success'   => 'Elgurítottad a kockákat.',
    ],
    'show'          => [
        'description'   => 'Egy dobás részleteinek megtekintése',
        'tabs'          => [
            'results'   => 'Eredmények',
        ],
        'title'         => ':name dobás',
    ],
];
