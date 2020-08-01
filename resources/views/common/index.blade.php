
@extends('layouts.app')

@section('content')
    <form enctype='multipart/form-data' action="/newthread" class="content" method="post" >
        @csrf

    </form>
@endsection
