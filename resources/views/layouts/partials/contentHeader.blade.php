<!-- Content Header (Page header) -->
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>{{$info['title']??''}}
                <small class="text-muted text-md">{{$info['subtitle']??''}}</small>
            </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                    @foreach($info['paths'] as $i=>$path)
                    @if($loop->last)
                        <li class="breadcrumb-item active">{{$path[1]}}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{route($path[0])}}">{{$path[1]}}</a></li>
                    @endif
                    @endforeach
            </ol>
        </div>
    </div>
</div><!-- /.container-fluid -->

