@extends(cms_config('views.layout'))

@section('title', 'Dashboard :: Admin Page')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li>
            <a href="{{ cms_route(\Czim\CmsCore\Support\Enums\NamedRoute::HOME) }}">
                {{ ucfirst(cms_trans('common.home')) }}
            </a>
        </li>
        <li class="active">
            Dashboard :: Admin Page
        </li>
    </ol>
@endsection

@section('content')
    <div class="jumbotron">
        <h2>
            Dashboard Admin Page
        </h2>

        <p>
            Only admins with special rights should be able to see this.
        </p>
    </div>
@endsection
