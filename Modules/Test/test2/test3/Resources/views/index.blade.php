@extends('test/test2/test3::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('test/test2/test3.name') !!}
    </p>
@endsection
