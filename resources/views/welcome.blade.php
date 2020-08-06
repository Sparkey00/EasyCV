@extends('layouts.app')
@section('content')
<div class="col-md-12">
    @csrf
    {{ Form::open(array('url' => '/welcome')) }}
        {{Form::input('name', 'vlaue')}}
    {{ Form::close() }}
</div>
@endsection
