<?php

return [
    'create'        => [
        'description'   => 'Create a new organisation',
        'success'       => 'Organisation \':name\' created.',
        'title'         => 'New Organisation',
    ],
    'destroy'       => [
        'success'   => 'Organisation \':name\' removed.',
    ],
    'edit'          => [
        'success'   => 'Organisation \':name\' updated.',
        'title'     => 'Edit Organisation :name',
    ],
    'fields'        => [
        'image'     => 'Image',
        'location'  => 'Location',
        'members'   => 'Members',
        'name'      => 'Name',
        'relation'  => 'Relation',
        'organisation' => 'Parent Organisation',
        'type'      => 'Type',
    ],
    'helpers' => [
        'descendants'   => 'This list contains all organisations which are descendants of this organisation, not only those directly under it.',
    ],
    'index'         => [
        'add'           => 'New Organisation',
        'description'   => 'Manage the organisations of :name.',
        'header'        => 'Organisations of :name',
        'title'         => 'Organisations',
    ],
    'members'       => [
        'actions'       => [
            'add'   => 'Add a member',
        ],
        'create'        => [
            'description'   => 'Add a member to the organisation',
            'success'       => 'Member added to the organisation.',
            'title'         => 'New Organisation Member for :name',
        ],
        'destroy'       => [
            'success'   => 'Member removed from the organisation.',
        ],
        'edit'          => [
            'success'   => 'Organisation member updated.',
            'title'     => 'Update Member for :name',
        ],
        'fields'        => [
            'character' => 'Character',
            'role'      => 'Role',
        ],
        'hint'          => 'Most organisations require members to run successfully.',
        'placeholders'  => [
            'character' => 'Choose a character',
            'role'      => 'Leader, Member, High Septon, Spymaster',
        ],
    ],
    'placeholders'  => [
        'location'  => 'Choose a location',
        'name'      => 'Name of the organisation',
        'type'      => 'Cult, Gang, Rebellion, Fandom',
    ],
    'show'          => [
        'description'   => 'A detailed view of an organisation',
        'tabs'          => [
            'members'   => 'Members',
            'relations' => 'Relations',
            'quests'    => 'Quests',
            'organisations' => 'Organisations',
        ],
        'title'         => 'Organisation :name',
    ],
    'quests' => [
        'title' => 'Organisation :name Quests',
        'description' => 'Quests the organisation is a part of.',
    ]
];
