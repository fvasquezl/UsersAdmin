@extends('layouts.master')


@section('content-header')
@include('layouts.partials.contentHeader',$info =[
'title' =>'Sku Parent Data',
'subtitle' => 'List',
'breadCrumbs' =>['spd','index']
])
@stop


@section('content')
<div class="row ">
    <div class="col-lg-12 my-3">
        <div class="card mb-4 shadow-sm card-outline card-success">
            <div class="card-header">
                <h3 class="card-title mt-1">
                    Skus list Administration
                </h3>

                <div class="card-tools">
                    <a href="{{ route('spd.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        Create Sku
                    </a>
                </div>

            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered table-hover display nowrap" id=skusTable
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>SKU</th>
                            <th>TitleShort</th>
                            <th>TitleLong</th>
                            <th>DescriptionShort</th>
                            <th>DescriptionLong</th>
                            <th>Bullet1</th>
                            <th>Bullet2</th>
                            <th>Bullet3</th>
                            <th>Bullet4</th>
                            <th>Bullet5</th>
                            <th>Category</th>
                            <th>SubCategory</th>
                            <th>Keywords</th>
                            <th>Language</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skus as $sku)
                        <tr>
                            <td>
                                <a href="{{ route('spd.show',$sku)}}" class="btn btn-sm btn-default">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('spd.edit',$sku) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('spd.destroy', $sku) }}" method="POST" style="display:inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure delete this sku?')">
                                        <i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td>{{$sku->SKU }}</td>
                            <td>{{$sku->TitleShort }}</td>
                            <td>{{$sku->TitleLong }}</td>
                            <td>{{$sku->DescriptionShort }}</td>
                            <td>{{$sku->DescriptionLong}}</td>
                            <td>{{$sku->Bullet1}}</td>
                            <td>{{$sku->Bullet2}}</td>
                            <td>{{$sku->Bullet3}}</td>
                            <td>{{$sku->Bullet4}}</td>
                            <td>{{$sku->Bullet5}}</td>
                            <td>{{$sku->Category}}</td>
                            <td>{{$sku->SubCategory}}</td>
                            <td>{{$sku->Keywords}}</td>
                            <td>{{$sku->Language}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


<script>
    $(document).ready(function () {
            $('#skusTable').DataTable({
                stateSave: true,
                scrollX: true
            });
        });
</script>
@endpush