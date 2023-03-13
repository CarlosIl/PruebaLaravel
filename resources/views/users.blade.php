{{-- @include('header') --}}

@extends('layout')

@section('content')
    <div class="row mt-3">
        <div class="col-8">
            <h1>{{ $title }}</h1>

            <hr>

            @unless(empty($users))
                <ul>
                    <!-- ?php foreach ($users as $user): ?
                            <li>?= e($user) ?</li>
                            ?php endforeach; ? -->

                    @foreach ($users as $user)
                        <li>{{ $user }}</li>
                    @endforeach
                </ul>
            @else
                <p>No hay usuarios registrados</p>
                @endif
        </div>
        <div class="col-4">
            {{-- <h2>Barra lateral</h2> --}}
            @include('sidebar')
        </div>
    </div>

    {{ time() }}
@endsection
    {{-- @include('footer') --}}
