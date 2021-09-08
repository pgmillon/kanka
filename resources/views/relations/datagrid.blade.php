<?php /** @var \App\Models\Relation $model */?>
@inject ('datagrid', 'App\Renderers\DatagridRenderer')

{!! $datagrid
    ->filters($filters)
    ->render(
    $filterService,
    // Columns
    [
        [
            'field' => 'owner_id',
            'label' => __('entities/relations.fields.owner'),
            'render' => function($model) {
                return '<a href="' . $model->owner->url() . '">' . $model->owner->name . '</a>';
            }
        ],
        [
            'field' => 'target_id',
            'label' => __('entities/relations.fields.target'),
            'render' => function($model) {
                return '<a href="' . $model->target->url() . '">' . $model->target->name . '</a>';
            }
        ],
        [
            'field' => 'is_star',
            'label' => '<i class="fas fa-star" title="' . __('entities/relations.fields.is_star') . '"></i>',
            'render' => function ($model) {
                return $model->is_star ? '<i class="fas fa-star"></i>' : null;
            }
        ],
        [
            'field' => 'relation',
            'label' => __('entities/relations.fields.relation'),
        ],
        [
            'field' => 'attitude',
            'label' => __('entities/relations.fields.attitude'),
        ],
    ],
    // Data
    $models,
    // Options
    [
        'route' => 'relations.index',
        'baseRoute' => 'relations',
        'trans' => 'relations.fields.',
        'campaign' => $campaign,
        'disableEntity' => true,
    ]
) !!}



@section('scripts')
    @parent
    <script src="/vendor/spectrum/spectrum.js" defer></script>
@endsection

@section('styles')
    @parent
    <link href="/vendor/spectrum/spectrum.css" rel="stylesheet">
@endsection
