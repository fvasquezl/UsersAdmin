@extends('layouts.master')


@section('content-header')

@include('layouts.partials.contentHeader',$info =[
'title' =>'Sku Parent Data',
'subtitle' => 'Edit',
'breadCrumbs' =>['spd','edit']
])
@stop


@section('content')

    @include('spd.partials.form')
    @include('spd.partials.formPhotos')

@endsection