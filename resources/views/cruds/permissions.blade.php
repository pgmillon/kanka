<?php
/**
 * entities/<id>/permissions
 * @var \App\Models\Entity $entity
 * @var \App\Models\CampaignRole $role
 * @var \App\Models\CampaignUser $member
 */
?>
@extends('layouts.' . ($ajax ? 'ajax' : 'app'), [
    'title' => __('crud.permissions.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => Breadcrumb::index($entity->pluralType()), 'label' => __($entity->pluralType() . '.index.title')],
        ['url' => route($entity->pluralType() . '.show', $entity->child->id), 'label' => $entity->name],
        __('crud.edit'),
    ]
])
@inject('campaign', 'App\Services\CampaignService')

@section('content')
    @inject('permissionService', 'App\Services\PermissionService')
@php
/** @var \App\Services\PermissionService $permissionService */
$permissions = $permissionService->type($entity->type_id)->entityPermissions($entity);
@endphp
    {!! Form::open(['route' => ['entities.permissions', $entity->id], 'method'=>'POST', 'data-shortcut' => "1"]) !!}

    <div class="panel panel-default">
        @if ($ajax)
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4>{{ __('crud.permissions.title', ['name' => $entity->name]) }}</h4>
            </div>
        @endif
        <div class="panel-body">
            <p class="help-block">
                {!! __('crud.permissions.helpers.setup', [
                    'allow' => '<code>' . __('crud.permissions.actions.bulk_entity.allow') . '</code>',
                    'deny' => '<code>' . __('crud.permissions.actions.bulk_entity.deny') . '</code>',
                    'inherit' => '<code>' . __('crud.permissions.actions.bulk_entity.inherit') . '</code>',
                ]) !!}
            </p>

            @include('partials.errors')


            @include('cruds.permissions.permissions_table')
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-success">{{ __('crud.save') }}</button>
        </div>
    </div>


    {!! Form::hidden('entity_id', $entity->id) !!}
    {!! Form::close() !!}
@endsection
