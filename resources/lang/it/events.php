<?php

return [
    'create'        => [
        'success'   => 'Evento \':name\' creato.',
        'title'     => 'Nuovo Evento',
    ],
    'destroy'       => [
        'success'   => 'Evento \':name\' rimosso.',
    ],
    'edit'          => [
        'success'   => 'Evento \':name\' aggiornato.',
        'title'     => 'Modifica Evento :name',
    ],
    'fields'        => [
        'date'      => 'Data',
        'image'     => 'Immagine',
        'location'  => 'Luogo',
        'name'      => 'Nome',
        'type'      => 'Tipo',
    ],
    'index'         => [
        'title' => 'Eventi',
    ],
    'placeholders'  => [
        'date'      => 'Una data per il tuo evento',
        'location'  => 'Scegli il luogo',
        'name'      => 'Nome dell\'evento',
        'type'      => 'Cerimonia, Festival, Disastro, Battaglia, Nascita',
    ],
    'show'          => [
        'tabs'  => [
            'events'    => 'Eventi',
        ],
    ],
    'tabs'          => [
        'calendars' => 'Elementi del Calendario',
    ],
];
