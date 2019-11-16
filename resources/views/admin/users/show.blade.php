@extends('layouts.app')

@section('title', $user->fullName)

@section('content')
<div class="container mx-auto">
    <div class="mb-4 md:flex md:justify-between md:items-center">
        {{-- Breadcrumb --}}
        <h1 class="m-0">
            <a href="{{ route('admin.users.index') }}">
                {{ trans('messages.users.plural') }}
            </a> › {{ $user->fullName }}
        </h1>

        <div class="actions">
            <a class="btn mr-2" href="{{ route('admin.users.edit', $user) }}">
                @svg('edit', trans('messages.cruds.actions.edit'), 'w-5 h-5 fill-current')
                @lang('messages.cruds.actions.edit')
            </a>

            <form method="POST" action="{{ route('admin.users.destroy', $user) }}" onsubmit="return confirm('{{ __('Confirm deleting :name?', ['name' => $user->fullName]) }}');">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    @svg('destroy', trans('messages.cruds.actions.destroy'), 'w-5 h-5 fill-current')
                    @lang('messages.cruds.actions.destroy')
                </button>
            </form>
        </div>
    </div>

    <div class="md:flex">
        {{-- User --}}
        <div class="card md:w-1/2 md:mr-2">
            <div class="card-header">
                {{ ucfirst(trans('messages.users.singular')) }}
            </div>

            <div class="card-body">
                <dl>
                    <dt>@lang('messages.users.fields.first_name')</dt>
                    <dd>{{ $user->first_name }}</dd>

                    <dt>@lang('messages.users.fields.last_name')</dt>
                    <dd>{{ $user->last_name }}</dd>

                    <dt>@lang('messages.users.fields.email')</dt>
                    <dd>
                        <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                    </dd>
                </dl>

                <dl class="mt-3">
                    <dt>@lang('messages.cruds.fields.id')</dt>
                    <dd>{{ $user->id }}</dd>

                    <dt>@lang('messages.cruds.fields.created_at')</dt>
                    <dd>{{ $user->created_at->format(config('boilerplate.time.default')) }}</dd>

                    <dt>@lang('messages.cruds.fields.updated_at')</dt>
                    <dd>{{ $user->updated_at->format(config('boilerplate.time.default')) }}</dd>
                </dl>
            </div>
        </div>

        {{-- Roles --}}
        <div class="card mt-4 md:w-1/2 md:mt-0 md:ml-2">
            <div class="card-header">
                {{ ucfirst(trans('messages.roles.singular')) }}
            </div>

            <div class="card-body">
                <dl>
                    <dt>@lang('messages.roles.fields.name')</dt>
                    <dd>@lang("messages.roles.{$user->roles->first()->name}")</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
@endsection