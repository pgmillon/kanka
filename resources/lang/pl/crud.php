<?php

return [
    'actions'                   => [
        'actions'           => 'Akcje',
        'apply'             => 'Zastosuj',
        'back'              => 'Cofnij',
        'bulk_templates'    => 'Zastosuj szablon cech',
        'copy'              => 'Kopiuj',
        'copy_mention'      => 'Kopiuj wzmiankę [ ]',
        'copy_to_campaign'  => 'Kopiuj do kampanii',
        'explore_view'      => 'Widok hierarchii',
        'export'            => 'Eksport (PDF)',
        'find_out_more'     => 'Więcej',
        'go_to'             => 'Idź do :name',
        'json-export'       => 'Eksport (JSON)',
        'manage_links'      => 'Zarządzaj odnośnikami',
        'move'              => 'Zmień lub przenieś',
        'new'               => 'Nowe',
        'new_post'          => 'Nowy komentarz',
        'next'              => 'Następne',
        'print'             => 'Drukuj',
        'reset'             => 'Reset',
        'transform'         => 'Przekształć',
    ],
    'add'                       => 'Dodaj',
    'alerts'                    => [
        'copy_attribute'    => 'Wzmianka cechy została skopiowana do schowka.',
        'copy_mention'      => 'Zaawansowana wzmianka elementu została skopiowana do schowka.',
    ],
    'boosted'                   => 'Doładowana',
    'boosted_campaigns'         => 'Doładowanie kampanie',
    'bulk'                      => [
        'actions'       => [
            'edit'  => 'Edytuj zaznaczone',
        ],
        'age'           => [
            'helper'    => 'Możesz dodać liczbę poprzedzoną znakiem + lub -, by zmienić wiek o tyle lat.',
        ],
        'delete'        => [
            'title'     => 'Usuwanie wielu elementów',
            'warning'   => 'Czy na pewno usunąć wybrane elementy?',
        ],
        'edit'          => [
            'tagging'   => 'Działania etykiety',
            'tags'      => [
                'add'       => 'Dodaj',
                'remove'    => 'Usuń',
            ],
            'title'     => 'Edycja wielu elementów',
        ],
        'errors'        => [
            'admin'     => 'Tylko administratorzy mogą zmieniać tajny status elementu.',
            'general'   => 'Podczas wykonywania akcji nastąpił błąd. Jeżeli będzie się powtarzał, skontaktuj się z nami. Komunikat błędu: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Zastąp',
            ],
            'helpers'   => [
                'override'  => 'Jeżeli pole jest zaznaczone, wybrane uprawnienia zastąpią dotychczasowe uprawnienia elementów. Jeżeli nie jest zaznaczone, wybrane uprawnienia zostaną dodane do istniejących.',
            ],
            'title'     => 'Zmień uprawnienia dla wielu elementów.',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count element został skopiowany do :campaign.|[2,3,4] :count elementy zostały skopiowane do :campaign.|[5,*] :count elementów zostało skopiowane do :campaign.',
            'editing'           => '{1} Zaktualizowano :count element .|[2,3,4] Zaktualizowano :count elementy .|[5,*] Zaktualizowano :count elementów.',
            'editing_partial'   => '{1} Zmieniono :count/:total element.|[2,3,4] Zmieniono :count/:total elementy.|[5,*] Zmieniono :count/:total elementów.',
            'permissions'       => '{1} Zmieniono uprawnienia dla :count elementu.|[2,*] Zmieniono uprawnienia dla :count elementów.',
            'private'           => '{1} :count element jest teraz tajny|[2,3,4] :count elementy są teraz tajne|[5,*] elementów jest teraz tajnych.',
            'public'            => '{1} :count element jest teraz jawny|[2,3,4] :count elementy są teraz jawne|[5,*] elementów jest teraz jawnych.',
            'templates'         => 'Zastosowano szablon do {1} :count elementu.|Zastosowano szablony do [2,*] :count elementów .',
        ],
    ],
    'bulk_templates'            => [
        'bulk_title'    => 'Zastosuj szablon do wielu elementów',
    ],
    'cancel'                    => 'Anuluj',
    'click_modal'               => [
        'close'     => 'Zamknij',
        'confirm'   => 'Potwierdź',
        'title'     => 'Potwierdź tę akcję',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Kopiuj elementy do innej kampanii',
        'panel'         => 'Kopiuj',
        'title'         => 'Kopiuj :name do innej kampanii',
    ],
    'create'                    => 'Stwórz',
    'datagrid'                  => [
        'empty' => 'Na razie nic tu nie ma.',
    ],
    'delete_modal'              => [
        'close'             => 'Zamknij',
        'delete'            => 'Usuń',
        'description'       => 'Czy na pewno usunąć :tag?',
        'description_final' => 'Czy na pewno chcesz usunąć :tag? Tego działania nie można cofnąć.',
        'mirrored'          => 'Usuń relację wzajemną.',
        'title'             => 'Potwierdzanie usunięcia',
    ],
    'destroy_many'              => [
        'success'   => 'Usunięto :count element|Usunięto :count elementy.|Usunięto :count elementów.',
    ],
    'edit'                      => 'Edytuj',
    'errors'                    => [
        'boosted'                       => 'Ta funkcja jest dostępna wyłącznie w doładowanych kampaniach.',
        'boosted_campaigns'             => 'By korzystać z tej funkcji, kampania musi być :boosted.',
        'node_must_not_be_a_descendant' => 'Niewłaściwy węzeł (etykieta, miejsce źródłowe): pochodziłby sam od siebie.',
        'unavailable_feature'           => 'Funkcja niedostępna',
    ],
    'events'                    => [
        'hint'  => 'Poniżej znajduje się lista kalendarzy, do których dodano wydarzenia zawierające ten element.',
    ],
    'export'                    => 'Eksportuj',
    'fields'                    => [
        'ability'               => 'Zdolność',
        'attribute_template'    => 'Szablon cech',
        'calendar'              => 'Kalendarz',
        'calendar_date'         => 'Data',
        'character'             => 'Postać',
        'child'                 => 'Pochodzenie',
        'closed'                => 'Zamknięta',
        'colour'                => 'Kolor',
        'copy_abilities'        => 'Kopiuj zdolności',
        'copy_attributes'       => 'Kopiuj cechy',
        'copy_inventory'        => 'Kopiuj wyposażenie',
        'copy_links'            => 'Kopiuj odnośniki elementu',
        'copy_notes'            => 'Kopiuj komentarze do elementu',
        'creator'               => 'Tworzenie',
        'dice_roll'             => 'Rzut kośćmi',
        'entity'                => 'Element',
        'entity_type'           => 'Rodzaj elementu',
        'entry'                 => 'Szczegóły',
        'event'                 => 'Wydarzenie',
        'excerpt'               => 'Fragment',
        'family'                => 'Rodzina',
        'files'                 => 'Pliki',
        'gallery_header'        => 'Nagłowek z galerii',
        'gallery_image'         => 'Obraz w galerii',
        'has_entity_files'      => 'Ma dołączone pliki',
        'has_entity_notes'      => 'Posiada komentarze',
        'has_image'             => 'Ma obraz',
        'header_image'          => 'Winieta',
        'image'                 => 'Obraz',
        'is_closed'             => 'Ta rozmowa zostanie zamknięta i nie będzie można dodawać do niej nowych wiadomości.',
        'is_private'            => 'Tajne',
        'is_private_v2'         => 'Pokazuj wyłącznie uczestnikom posiadającym rolę :admin-role.',
        'is_private_v3'         => 'Wyświetlaj tylko użytkownikom w roli :admin-role. To ustawienie zastępuje wszystkie inne.',
        'is_star'               => 'Przypięte',
        'item'                  => 'Przedmiot',
        'journal'               => 'Dziennik',
        'location'              => 'Miejsce',
        'locations'             => ':first w :second',
        'map'                   => 'Mapa',
        'name'                  => 'Nazwa',
        'organisation'          => 'Organizacja',
        'position'              => 'Kolejność',
        'privacy'               => 'Tajność',
        'race'                  => 'Rasa',
        'tag'                   => 'Etykieta',
        'tags'                  => 'Etykiety',
        'timeline'              => 'Historia',
        'tooltip'               => 'Dymek',
        'type'                  => 'Rodzaj',
        'visibility'            => 'Widoczność',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Kliknij by dodać lub przeciągnij plik',
            'manage'    => 'Zarządzaj plikami elementu',
        ],
        'errors'    => [
            'max'       => 'Osiągnięto maksymalną liczbę (:max) plików dla tego elementu.',
            'no_files'  => 'Brak plików.',
        ],
        'files'     => 'Dodano pliki',
        'hints'     => [
            'limit'         => 'Do każdego elementu można dodać maksymalnie :max plików.',
            'limitations'   => 'Dopuszczalne formaty: :formats. Maksymalny rozmiar: :size.',
        ],
        'title'     => 'Pliki elementu :name.',
    ],
    'filter'                    => 'Filtruj',
    'filters'                   => [
        'all'                       => 'Pokaż wszystkie elementy pochodne',
        'clear'                     => 'Usuń filtry',
        'copy_helper'               => 'Użyj skopiowanych do schowka filtrów by stworzyć filtry na pulpicie albo skróty.',
        'copy_helper_no_filters'    => 'By skopiować filtry do schowka, musisz je najpierw ustawić.',
        'copy_to_clipboard'         => 'Kopiuj filtry do schowka',
        'direct'                    => 'Pokaż elementy bezpośrednio pochodne',
        'filtered'                  => 'Wyświetlono :count z :total elementów.',
        'hide'                      => 'Ukryj filtry',
        'lists'                     => [
            'desktop'   => [
                'all'       => 'Pokaż wszystkie pochodne (:count)',
                'filtered'  => 'Pokaż bezpośrednio pochodne  (:count)',
            ],
            'mobile'    => [
                'all'       => 'Pokaż wszystkie  (:count)',
                'filtered'  => 'Pokaż bezpośrednie (:count)',
            ],
        ],
        'mobile'                    => [
            'clear' => 'Wyczyść',
            'copy'  => 'Schowek',
        ],
        'options'                   => [
            'exclude'   => 'Nie zawiera',
            'include'   => 'Zawiera',
            'none'      => 'Brak',
        ],
        'show'                      => 'Pokaż filtry',
        'sorting'                   => [
            'asc'       => ':field rosnąco',
            'desc'      => ':field malejąco',
            'helper'    => 'Określa kolejność wyświetlania rezultatów.',
        ],
        'title'                     => 'Filtry',
    ],
    'fix-this-issue'            => 'Napraw ten problem',
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Dodaj datę kalendarzową',
        ],
        'copy_options'  => 'Opcje kopiowania',
    ],
    'helpers'                   => [
        'copy_options'  => 'Skopiuj następujące elementy elementu źródłowego do nowego elementu.',
    ],
    'hidden'                    => 'Ukryte',
    'hints'                     => [
        'attribute_template'    => 'Zastosuj szablon cech bezpośrednio podczas tworzenia lub edycji tego elementu.',
        'calendar_date'         => 'Data kalendarzowa umożliwia łatwiejsze filtrowanie i sprawia, że dane wydarzenie zostaje przypisane do kalendarza.',
        'gallery_header'        => 'Jeżeli element nie ma nagłówka, wyświetla zamiast tego obraz z galerii kampanii.',
        'gallery_image'         => 'Jeżeli element nie posiada własnego obrazu, zamiast niego wyświetlany będzie wybrany obraz z galerii kampanii.',
        'header_image'          => 'Obraz umieszczony w nagłówku elementu. Użyj szerokiego obrazu by osiągnąć najlepszy efekt.',
        'image_limitations'     => 'Dozwolone formaty: :formats. Maksymalny rozmiar pliku :size.',
        'image_patreon'         => 'Zwiększyć limit rozmiaru pliku?',
        'is_private'            => 'Element oznaczony jako tajny jest widoczny tylko dla posiadaczy roli "administrator".',
        'is_star'               => 'Elementy przypięte pojawiają się w menu elementu.',
        'tooltip'               => 'Zastąp dymek z poradą generowaną automatycznie następującą zawartością.',
        'visibility'            => 'Opcja widoczności "Administrator" sprawia, że widzą to wszyscy administratorzy kampanii. Ustawienie widoczności "Ja" oznacza, że widzisz to wyłącznie ty.',
    ],
    'history'                   => [
        'created'       => 'Stworzone przez <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'created_date'  => 'Stworzone <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'       => 'Nieznane',
        'updated'       => 'Ostatnio modyfikowane przez <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'updated_date'  => 'Ostatnio modyfikowane <span data-toggle="tooltip" title=":realdate">:date</span>',
        'view'          => 'Zobacz dziennik elementu',
    ],
    'image'                     => [
        'error' => 'Nie udało nam się pozyskać wskazanego obrazu. Być może strona uniemożliwia pobieranie (na przykład Squarespace albo DeviantArt), albo odnośnik nie jest już aktywny. Upewnij się też, że obrazek nie jest większy niż :size.',
    ],
    'is_not_private'            => 'Ten element nie jest obecnie tajny.',
    'is_private'                => 'Ten element jest tajny, a zatem widoczny tylko dla uczestników posiadających rolę administratora.',
    'legacy'                    => 'Poprzednia wersja',
    'linking_help'              => 'Jak tworzyć linki do innych elementów?',
    'manage'                    => 'Zarządzaj',
    'move'                      => [
        'errors'        => [
            'permission'        => 'Nie masz uprawnień, by w tej kampanii tworzyć elementy tego rodzaju.',
            'same_campaign'     => 'Musisz wybrać kampanię, do której element ma zostać przeniesiony.',
            'unknown_campaign'  => 'Nieznana kampania.',
        ],
        'fields'        => [
            'campaign'  => 'Nowa kampania',
            'copy'      => 'Stwórz kopię',
            'target'    => 'Nowy rodzaj',
        ],
        'hints'         => [
            'campaign'  => 'Możesz również przenieść ten element do innej kampanii.',
            'copy'      => 'Wybierz tę opcję, by stworzyć kopię elementu w nowej kampanii.',
            'target'    => 'Pamiętaj, że podczas zmiany rodzaju elementu na inny część danych może zostać utracona.',
        ],
        'panels'        => [
            'change'    => 'Zmień rodzaj elementu',
            'move'      => 'Przenieś do innej kampanii',
        ],
        'success'       => 'Przeniesiono element \':name\'.',
        'success_copy'  => 'Skopiowano element \':name\'.',
        'title'         => 'Zmiana lub Przenoszenie :name',
    ],
    'navigation'                => [
        'cancel'    => 'anuluj',
        'or_cancel' => 'lub :cancel',
    ],
    'new_entity'                => [
        'error' => 'Sprawdź poprawność wartości.',
        'fields'=> [
            'name'  => 'Nazwa',
        ],
        'title' => 'Nowy element',
    ],
    'or_cancel'                 => 'lub <a href=":url">anuluj</a>',
    'panels'                    => [
        'appearance'            => 'Wygląd',
        'attribute_template'    => 'Szablon cech',
        'calendar_date'         => 'Data kalendarzowa',
        'entry'                 => 'Szczegóły',
        'general_information'   => 'Informacje ogólne',
        'move'                  => 'Przenieś',
        'system'                => 'System',
    ],
    'permissions'               => [
        'action'            => 'Akcja',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Zezwól',
                'deny'      => 'Zabroń',
                'ignore'    => 'Pomiń',
                'remove'    => 'Wyczyść',
            ],
            'bulk_entity'   => [
                'allow'     => 'Zezwól',
                'deny'      => 'Zabroń',
                'inherit'   => 'Kopiuj',
            ],
            'delete'        => 'Usuwaj',
            'edit'          => 'Edytuj',
            'entity_note'   => 'Komentuj',
            'read'          => 'Czytaj',
            'toggle'        => 'Przełącz',
        ],
        'allowed'           => 'Zezwolono',
        'fields'            => [
            'member'    => 'Uczestnik',
            'role'      => 'Rola',
        ],
        'helper'            => 'W tym menu określaj szczegółowo, jak role i użytkownicy działają na element. :allow',
        'helpers'           => [
            'setup' => 'Przy pomocy tej funkcji możesz dokładnie określić, jak role i uczestnicy kampanii mogą działać na ten element. :allow pozwala użytkownikowi albo roli wykonać dane działanie. :deny im to uniemożliwi. :inherit zastosuje uprawnienia roli głównej albo użytkownika. Użytkownik posiadający ustawienie :allow może działać na element, nawet jeżeli jego roli przypisano :deny.',
        ],
        'inherited'         => 'Ta rola posiada już ten typ uprawnień wobec tego rodzaju elementów.',
        'inherited_by'      => 'Ten użytkownik posiada rolę :role, która posiada już te uprawnienia dla tego rodzaju elementów.',
        'success'           => 'Zapisano uprawenienia.',
        'title'             => 'Uprawienia',
        'too_many_members'  => 'Kampania ma zbyt wielu uczestników (>10) by ich tu wyświetlić. Używaj przycisku Uprawienia w opisie elementu, by szczegółowo zarządzać uprawieniami.',
    ],
    'placeholders'              => [
        'ability'       => 'Wybierz zdolność',
        'calendar'      => 'Wybierz kalendarz',
        'character'     => 'Wybierz postać',
        'entity'        => 'Element',
        'event'         => 'Wybierz wydarzenie',
        'family'        => 'Wybierz rodzinę',
        'gallery_image' => 'Wybierz obraz z galerii kampanii',
        'image_url'     => 'Możesz również podać URL obrazu',
        'item'          => 'Wybierz przedmiot',
        'journal'       => 'Wybierz dziennik',
        'location'      => 'Wybierz miejsce',
        'map'           => 'Wybierz mapę',
        'note'          => 'Wybierz notatkę',
        'organisation'  => 'Wybierz organizację',
        'quest'         => 'Wybierz misję',
        'race'          => 'Wybierz rasę',
        'tag'           => 'Wybierz etykietę',
        'timeline'      => 'Wybierz historię',
    ],
    'relations'                 => [
        'actions'   => [
            'add'   => 'Dodaj relację',
        ],
        'fields'    => [
            'location'  => 'Miejsce',
            'name'      => 'Nazwa',
            'relation'  => 'Relacja',
        ],
        'hint'      => 'Relacje służą do opisu charakteru związków pomiędzy elementami kampanii.',
    ],
    'remove'                    => 'Usuń',
    'rename'                    => 'Zmień nazwę',
    'save'                      => 'Zapisz',
    'save_and_close'            => 'Zapisz i zamknij',
    'save_and_copy'             => 'Zapisz i skopiuj',
    'save_and_new'              => 'Zapisz i nowe',
    'save_and_update'           => 'Zapisz i edytuj',
    'save_and_view'             => 'Zapisz i pokaż',
    'search'                    => 'Szukaj',
    'select'                    => 'Wybierz',
    'superboosted_campaigns'    => 'Turbodoładowane kampanie',
    'tabs'                      => [
        'abilities'     => 'Zdolności',
        'assets'        => 'Zasoby',
        'attributes'    => 'Cechy',
        'boost'         => 'Doładowanie',
        'calendars'     => 'Kalendarze',
        'connections'   => 'Powiązania',
        'default'       => 'Domyślne',
        'events'        => 'Wydarzenia',
        'inventory'     => 'Wyposażenie',
        'links'         => 'Odnośniki',
        'map-points'    => 'Na mapach',
        'mentions'      => 'Wzmianki',
        'menu'          => 'Menu',
        'notes'         => 'Komentarze',
        'permissions'   => 'Uprawnienia',
        'profile'       => 'Profil',
        'quests'        => 'Misje',
        'relations'     => 'Relacje',
        'reminders'     => 'Ważne daty',
        'story'         => 'Podstawy',
        'timelines'     => 'Historie',
        'tooltip'       => 'Dymek',
    ],
    'tooltips'                  => [
        'boosted_feature'   => 'Dostępne po doładowaniu',
    ],
    'update'                    => 'Aktualizacja',
    'users'                     => [
        'unknown'   => 'Nieznany',
    ],
    'view'                      => 'Zobacz',
    'visibilities'              => [
        'admin'         => 'Administrator',
        'admin-self'    => 'Ja i administrator',
        'all'           => 'Wszyscy',
        'members'       => 'Uczestnicy',
        'self'          => 'Ja',
    ],
];
