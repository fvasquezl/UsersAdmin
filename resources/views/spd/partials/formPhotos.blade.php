@if ($spd->photos->count())
<div class="card">
   <div class="card-body shadow-sm card-outline card-success">
        <div class="row">
            @foreach ($spd->photos as $photo)
            <div class="col-md-1">
                <form method="POST" action="{{ route('photos.destroy',$photo)}}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-xs" style="position: absolute">
                        <i class="fas fa-times-circle"></i>
                    </button>
                    <img class="img-fluid" src="{{url($photo->url)}}">
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif