<?php

return [
    'age'               => [
        'description'   => 'Podes ligar unha personaxe a un calendario da campaña dende a lapela Lembretes na páxina da personaxe. Dende aí, engade un novo lembrete e establece o tipo como Nacemento ou Morte para que a idade da personaxe sexa calculada automaticamente. Se tanto o nacemento como a morte están presentes, ámbalas dúas serán mostradas, así como a idade no momento da morte. Se só está establecido o nacemento, mostraranse a data e a idade actual. Se só está establecida a morte, mostraranse a data e os anos que pasaron dende a súa morte.',
        'title'         => 'Idade e Morte da personaxe',
    ],
    'api-filters'       => [
        'description'   => 'Os seguintes filtros están dispoñíbeis no punto API :name.',
        'title'         => 'Filtros API',
    ],
    'attributes'        => [
        'con'               => 'Con',
        'description'       => 'Usa atributos para representar valores non textuais asociados a unha entidade. Podes referenciar entidades dentro de atributos usando a sintaxe de mencións avanzadas :mention. Tamén podes referenciar outros atributos usando a sintaxe :attribute.',
        'level'             => 'Nivel',
        'link'              => 'Opcións de atributos',
        'math'              => 'Tamén podes usar matemáticas básicas. Por exemplo, :example multiplicaría os atributos :level e :con desta entidade. Se queres arredondar cara arriba ou cara abaixo, podes usar :ceil ou :floor respectivamente.',
        'name'              => 'Podes referenciar o nome da entidade con :name. Se xa existe un atributo con ese nome, usarase ese atributo no seu lugar.',
        'pinned'            => 'Fixar un atributo usando a icona :icon fará que apareza no menú da entidade baixo a súa imaxe.',
        'private'           => 'Os atributos privados usando o :icon serán visíbeis só para a administración da campaña.',
        'random'            => 'Ao crear ou editar un padrón de atributos, podes definir atributos aleatorios. Estes poden ser un valor aleatorio entre dous números separados por :dash, ou un valor aleatorio dunha listaxe de valores separados por :comma. O valor do atributo é determinado ao aplicar o padrón a unha entidade, ou cando a entidade é gardada.',
        'random_examples'   => 'Por exemplo, se queres un número entre o 1 e o 100, usa :number. Se queres un valor de entre unha serie de opcións, usa :list.',
        'range'             => 'Os atributos de número poden ser configurados para só permitir valores nun rango numérico. Por exemplo, usa :example para limitar o atributo entre 1 e 10. Os valores do rango tamén poden referenciar outros atributos, por exemplo con :reference. Ao gardar un atributo, se o valor está fóra do rango, este axustarase automaticamente ao valor permitido máis próximo.',
        'title'             => 'Atributos',
    ],
    'dice'              => [
        'description'               => 'As tiradas de dados xenéricas pódense realizar escrebendo "d20", "4d4+4", "d%" para percentiles e "df" para dados "fudge".',
        'description_attributes'    => 'Tamén é posíbel obter un atributo dunha personaxe usando a sintaxe {character.nome_do_atributo}. Por exemplo, {character.nivel}d6+{character.sabiduria}.',
        'more'                      => 'Podes ver todas as opcións dispoñíbeis na páxina da extensión de tiradas de dados.',
        'title'                     => 'Tiradas de dados',
    ],
    'entity_templates'  => [
        'description'   => 'Ao crear novas entidades, podes crear unha basada nun padrón en vez de empezala dende cero. Para definir unha entidade como un padrón, ábrea e fai clic en :link no botón de :action arriba á dereita. Ao ver unha lista de entidades, os padróns dese tipo de entidade estarán dispoñíbeis xunto ao botón de :new. Podes ter múltiples padróns para cada tipo de entidade.',
        'link'          => 'Como definir padróns',
        'remove'        => 'Para eliminar unha entidade padrón, fai clic no botón de :remove que estará no lugar do :link previamente descrito.',
        'title'         => 'Padróns de entidade',
    ],
    'filters'           => [
        'attributes'    => [
            'exclude'   => '!Nivel',
            'first'     => 'Podes filtrar entidades segundo os seus atributos. Os campos de búsqueda deben coincidir exactamente co nome e/ou valor do atributo. Cando o valor non é especificado, búscanse entidades que teñan un atributo co nome especificado. Podes escribir ":exclude" para excluít entidades entidades cun atributo chamado "Nivel".',
            'second'    => 'O filtro non evalúa cálculos de atributos. Se un atributo ten un valor de :code, buscar polo resultado dese cálculo non é posíbel.',
        ],
        'clipboard'     => 'Cando os filtros están activos, o botón de copiar ao portapapeis tamén o está. Este botón copia os filtros ao teu portapapeis, e así podes usalos en filtros de complementos do taboleiro ou en filtros de accesos directos.',
        'description'   => 'Podes usar filtros para limitar o número de resultados que se mostran nas listas. Os campos de texto ofrecen opcións variadas para controlar en detalle o que é excluído polo filtro.',
        'empty'         => 'Escrebendo :tag nun campo buscará todas as entidades nas que ese campo está baleiro.',
        'ending_with'   => 'Colocando :tag ao final do texto, podes buscar todas as entidades que conteñen exactamente ese texto nese campo.',
        'multiple'      => 'Podes combinar opcións de búsqueda nos campos de texto escrebendo :syntax. Por exemplo, :example.',
        'session'       => 'Os filtros e as columnas ordenadas que definas nunha lista de entidades son guardadas na túa sesión, polo que namentres non te desconectes, non necesitas volver configuralos en cada páxina.',
        'starting_with' => 'Colocando :tag antes do texto, podes buscar calquera entidade que non conteña ese texto nese campo.',
        'title'         => 'Como usar os filtros',
    ],
    'link'              => [
        'advanced'          => [
            'title' => 'Mencións avanzadas',
        ],
        'anchor'            => 'A mención avanzada tamén pode especificar a áncora HTML coa que a ligazón debería ligar, usando :example.',
        'attribute'         => [
            'description'   => 'Tamén é posible referenciar atributos desta entidade. Escribe :code e tres letras ou máis para mostrar os atributos coincidentes na entidade.',
            'title'         => 'Atributos',
        ],
        'auto_update'       => 'As ligazóns a outras entidades serán actualizadas automaticamente cando o nome ou a descrición da entidade obxectivo cambie.',
        'description'       => 'Podes crea ligazóns a outras entidades facilmente usando os seguintes atallos.',
        'filtering'         => [
            'description'   => 'Filtrar para encontrar a entidade exacta que procuras é doado.',
            'exact'         => 'Escribe :code para encontrar unha entidade que ten exactamente ese nome.',
            'space'         => 'Escribe :code para encontrar unha entidade cun espazo no nome.',
            'title'         => 'Filtrado',
        ],
        'formatting'        => [
            'text'  => 'A lista de etiquetas e atributos HTML permitidas pode atoparse no noso :github.',
            'title' => 'Formatación',
        ],
        'friendly_mentions' => 'Crea ligazóns a outras entidades escrebendo :code e os primeiros caracteres dunha entidade para buscala. Isto insertará :example no editor de texto, e mostrarase como unha ligazón á entidade.',
        'mention_helpers'   => 'Se o nome da túa entidade contén un espazo, usa :example no lugar do espazo. Se queres buscar unha entidade con exactamente ese nome, escrebe :exact.',
        'mentions'          => 'Crea ligazóns a outras entidades escrebendo :code e os primeiros caracteres dunha entidade para buscala. Isto insertará :example no editor de texto. Para personalizar o nome co que se mostra a ligazón á entidade, podes escreber :example_name. Para establecer a subpáxina da entidade á que estás ligando, usa :example_page. Para establecer a lapela, usa :example_tab.',
        'mentions_field'    => 'Tamén podes mostrar un campo da entidade en lugar do seu nome na ligazón con :code.',
        'month'             => [
            'title' => 'Meses do calendario',
        ],
        'months'            => 'Escrebe :code para obter unha lista dos meses dos teus calendarios.',
        'options'           => 'Algunhas opcións son :options.',
        'overview'          => 'Liga facilmente entidades existentes escribindo :code e tres letras ou máis.',
        'title'             => 'Crear ligazóns a outras entidades e atallos.',
    ],
    'map'               => [],
    'pins'              => [
        'description'   => 'As entidades poden ter relacións e atributos fixados á dereita da súa vista de historia. Para fixar un elemento, edita a relación ou o atributo e márcao como fixado.',
        'title'         => 'Elementos fixados',
    ],
    'public'            => 'Aprende máis sobre campañas públicas vendo o vídeo tutorial en Youtube.',
    'troubleshooting'   => [
        'description'       => 'Un membro do equipo de Kanka envioute a esta páxina. Selecciona unha campaña para xerar un token para que poidamos unirnos temporalmente á túa campaña como admin.',
        'errors'            => [
            'token_exists'  => 'Xa existe un token para ":campaign".',
        ],
        'save_btn'          => 'Xerar token',
        'select_campaign'   => 'Selecciona unha campaña',
        'subtitle'          => 'Axuda, por favor!',
        'success'           => 'Copia o seguinte token e envíao a alguén do equipo de Kanka.',
        'title'             => 'Resolución de problemas',
    ],
    'widget-filters'    => [
        'description'   => 'Podes filtrar as entidades mostradas no complemento de "modificadas recentemente" proporcionando unha lista de campos da entidade e valores. Por exemplo, podes usar :example para filtrar as personaxes mortas do tipo NPC.',
        'link'          => 'filtros de complemento',
        'more'          => 'Podes copiar os valores da URL en listas de entidades. Por exemplo, ao ver as personaxes da campaña, filtra o tipo de personaxes que queres mostrar, e copia os valores que hai despois de :question na URL.',
        'title'         => 'Filtros para complementos de taboleiro',
    ],
];
