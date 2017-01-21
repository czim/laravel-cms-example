@extends(cms_config('views.layout'))

@section('title', 'Dashboard')

@section('content')
    <div class="jumbotron">
        <h1>
            Laravel Example CMS Dashboard
        </h1>

        <p>
            Example Dashboard Page.
        </p>
        <p>
            Welcome {{ cms_auth()->user()->getUsername() }}!
        </p>

        @if (cms_auth()->can('dashboard.admin'))
            <p>
                <a class="btn btn-primary btn-lg" href="{{ cms_route('dashboard.admin') }}" role="button">
                    Special Secret Dashboard Page
                </a>
            </p>
        @endif

    </div>
@endsection
