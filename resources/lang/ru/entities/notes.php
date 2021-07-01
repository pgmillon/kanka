<?php

return [
    'actions'       => [
        'add'       => 'Новая заметка объекта',
        'add_user'  => 'Добавить пользователя',
    ],
    'create'        => [
        'description'   => 'Создание новой заметки объекта',
        'success'       => 'Заметка ":name" добавлена объекту ":entity"',
        'title'         => 'Новая заметка объекта :name',
    ],
    'destroy'       => [
        'success'   => 'Заметка ":name" объекта ":entity" удалена',
    ],
    'edit'          => [
        'description'   => 'Обновление существующей заметки объекта',
        'success'       => 'Заметка ":name" объекта ":entity" обновлена',
        'title'         => 'Обновление заметки объекта :name',
    ],
    'fields'        => [
        'collapsed' => 'Закрывать закрепленную заметку объекта по умолчанию',
        'creator'   => 'Создатель',
        'entry'     => 'Текст',
        'name'      => 'Название',
    ],
    'hint'          => 'Информацию, которая не подходит под стандартные поля объекта или должна быть приватной, можно добавить в заметки объекта.',
    'hints'         => [],
    'index'         => [
        'title' => 'Заметки объекта :name',
    ],
    'placeholders'  => [
        'name'  => 'Название заметки, наблюдения или поправки',
    ],
    'show'          => [
        'advanced'  => 'Дополнительные разрешения',
        'title'     => 'Заметка :name объекта :entity',
    ],
];
