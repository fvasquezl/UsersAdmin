<form method="POST" action="{{ route('spd.update', $spd) }}">
    @csrf
    @method('PUT')
<div class="row ">
    <div class="col-lg-4">
        <div class="card shadow-sm card-outline card-success">

            <div class="card-body">

                <div class="form-group">
                    <label for="SKU">SKU:</label>
                    <input name='SKU' value="{{old('SKU',$spd->SKU) }}"
                        class="form-control @error('SKU') is-invalid @enderror" disabled>
                    @error('SKU')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="TitleShort">TitleShort:</label>
                    <input name="TitleShort" value="{{ old('TitleShort', $spd->TitleShort) }}"
                        class="form-control  @error('TitleShort') is-invalid @enderror">
                    @error('TitleShort')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>TitleLong:</label>
                    <textarea name="TitleLong" class="editor form-control @error('TitleLong') is-invalid @enderror"
                        placeholder="Type description">{{ old('TitleLong',$spd->TitleLong) }}</textarea>
                    @error('TitleLong')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="DescriptionShort">DescriptionShort:</label>
                    <input name="DescriptionShort" value="{{ old('DescriptionShort', $spd->DescriptionShort) }}"
                        class="form-control  @error('DescriptionShort') is-invalid @enderror">
                    @error('DescriptionShort')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>DescriptionLong:</label>
                    <textarea name="DescriptionLong"
                        class="editor form-control @error('DescriptionLong') is-invalid @enderror"
                        placeholder="Type description">{{ old('DescriptionLong',$spd->DescriptionLong) }}</textarea>
                    @error('DescriptionLong')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card mb-4 shadow-sm card-outline card-success">

            <div class="card-body">
                <div class="form-group">
                    <label for="Bullet1">Bullet1</label>
                    <input name="Bullet1" value="{{ old('Bullet1', $spd->Bullet1) }}"
                        class="form-control  @error('Bullet1') is-invalid @enderror">
                    @error('Bullet1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Bullet2">Bullet2</label>
                    <input name="Bullet2" value="{{ old('Bullet2', $spd->Bullet2) }}"
                        class="form-control  @error('Bullet2') is-invalid @enderror">
                    @error('Bullet2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Bullet3">Bullet3</label>
                    <input name="Bullet3" value="{{ old('Bullet3', $spd->Bullet3) }}"
                        class="form-control  @error('Bullet3') is-invalid @enderror">
                    @error('Bullet3')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Bullet4">Bullet4</label>
                    <input name="Bullet4" value="{{ old('Bullet4', $spd->Bullet4) }}"
                        class="form-control  @error('Bullet4') is-invalid @enderror">
                    @error('Bullet4')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Bullet5">Bullet5</label>
                    <input name="Bullet5" value="{{ old('Bullet5', $spd->Bullet5) }}"
                        class="form-control  @error('Bullet5') is-invalid @enderror">
                    @error('Bullet5')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Keywords:</label>
                    <textarea name="Keywords" class="editor form-control @error('Keywords') is-invalid @enderror"
                        placeholder="Type description">{{ old('Keywords',$spd->Keywords) }}</textarea>
                    @error('Keywords')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card mb-4 shadow-sm card-outline card-success">
            <div class="card-body">
                <div class="form-group">
                    <label for="Category">Category</label>
                    <input name="Category" value="{{ old('Category', $spd->Category) }}"
                        class="form-control  @error('Category') is-invalid @enderror">
                    @error('Category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="SubCategory">SubCategory</label>
                    <input name="SubCategory" value="{{ old('SubCategory', $spd->SubCategory) }}"
                        class="form-control  @error('SubCategory') is-invalid @enderror">
                    @error('SubCategory')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Language">Language:</label>
                    <input name="Language" value="{{ old('Language', $spd->Language) }}"
                        class="form-control  @error('Language') is-invalid @enderror">
                    @error('Language')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Images</label>
                    <div class="dropzone">

                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Store SKU</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>


@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>


<script>
    $(document).ready(function () {
        $('.editor').summernote({
            placeholder: 'Type here',

            height:'120px',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
            ]
        });
    });

    var myDropzone = new Dropzone('.dropzone',{
        url:"/spd/{{ $spd->SKU }}/photos",
         acceptedFiles: 'image/*',
         paramName:'photo',

        headers:{
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        dictDefaultMessage: 'Move here your images'

    });

    myDropzone.on('error',function(file,res){
         var msg = res.errors.photo[0];
         $('.dz-error-message:last > span').text(msg);
    });

    Dropzone.autoDiscover=false;
</script>
@endpush