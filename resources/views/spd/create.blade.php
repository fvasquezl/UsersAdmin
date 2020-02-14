<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Enter the short title for this SKU</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('spd.store','#create') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input name="TitleShort" id="post-TitleShort"
                            class="form-control @error('TitleShort') is-invalid @enderror" value="{{old('TitleShort')}}"
                            placeholder="Short title for the SKy" autofocus required>
                        @error('TitleShort')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Create SKU</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


@push('scripts')
<script>
    if(window.location.hash === '#create')
    {
        $('#myModal').modal('show');
    }

    $('#myModal').on('hide.bs.modal',function(){
        window.location.hash = '#'
    });

    $('#myModal').on('shown.bs.modal',function(){
        $('#post-title').focus()
        window.location.hash = '#create'
    });
</script>
@endpush