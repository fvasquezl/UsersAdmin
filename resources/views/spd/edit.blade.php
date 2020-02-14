@extends('layouts.master')


@section('content-header')

@include('layouts.partials.contentHeader',$info =[
'title' =>'Sku Parent Data',
'subtitle' => 'Edit',
'breadCrumbs' =>['spd','edit']
])
@stop


@section('content')

<div class="row">
    @foreach ($spd->photos as $photo)
     {{-- <form  method="POST" action="{{ route('photos.destroy',$photo)}}">
        @method('DELETE')
        @csrf --}}
        <div class="col-md-1">
            <button class="btn btn-danger btn-xs" style="position: absolute">
                <i class="fas fa-times-circle"></i>
            </button>
            <img class="img-fluid" src="{{url($photo->url)}}">
        </div>
    {{-- </form> --}}
    @endforeach
</div>
<form method="POST" action="{{ route('spd.update', $spd) }}">
    @csrf
    @method('PUT')
    @include('spd.partials.form')
</form>


@endsection