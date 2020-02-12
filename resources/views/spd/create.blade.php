@extends('layouts.master')


@section('content-header')

@include('layouts.partials.contentHeader',$info =[
'title' =>'Sku Parent Data',
'subtitle' => 'Create',
'breadCrumbs' =>['spd','create']
])
@stop


@section('content')

<form method="POST" action="{{ route('spd.store') }}">
    @include('spd.partials.form')

</form>


@endsection
