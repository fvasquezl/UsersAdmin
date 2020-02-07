@extends('layouts.master')

@section('content-header')
    @include('layouts.partials.contentHeader',$info =[
           'title' =>'Dashboard',
           'subtitle' => 'Information Page',
           'breadCrumbs' =>['dashboard']
           ])
@endsection

@section('content')


@endsection
