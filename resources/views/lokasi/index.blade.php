@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lokasi</li>
              </ol>
            </nav>
            <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h2 class="box-title">Daftar Lokasi</h2>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                  <p><a class="btn btn-primary" href="{{ route('lokasi.create') }}">Tambah</a></p>
                       <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped display responsive nowrap compact" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Gudang</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($lokasi as $log)
                                    <tr>   
                                        <td>{{ $log->parent->nama }}</td>
                                        <td>
                                            {{ $log->nama }}
                                        </td>
                                        <td>
                                        @include('lokasi.action') 
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Gudang</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        
                    </div>

        </div>
    </div>
</div>
@endsection

@section('js')
    
    <script> console.log('Hi!'); </script>
@stop
