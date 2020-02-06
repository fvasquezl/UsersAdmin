@extends('layouts.master')

@section('content-header')
    @include('layouts.partials.contentHeader',$info =[
           'title' =>'Dashboard',
           'subtitle' => 'Information Page',
           'paths' =>[
               ['welcome','Home'],
               ['dashboard','Dashboard']
               ]
           ])
@endsection

@section('content')


@endsection
