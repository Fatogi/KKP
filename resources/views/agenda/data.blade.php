@extends('main')
@section('title', 'Agenda')

@section('breadcrumb')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Menambah Agenda</h1>
            </div>
        </div>
    </div>
<div class="col-sm-8">
    <div class="page-header float-right">
        <div class="page-title">
            <ol class="breadcrumb text-right">
                <li><a href="/">Dashboard</a></li>
                <li class="active">Agenda</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <a href="{{ 'agenda/add' }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
<div class="card-body">
    <div class="card-body table-responsive">
        
        <tbody>
            <table class="table table-bordered">
                <thead class="text-center">
                    <th>No.</th>
                    <th>Nama Acara</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Kepada</th>
                    <th>Aksi</th>
                </thead>
            @foreach ($agenda as $item)
                <tr class="text-center">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_acara }}</td>
                    <td>{{ $item->lokasi }}</td>
                    {{ setlocale (LC_TIME, 'INDONESIA')}}
                    <td>{{ date('l, d-m-Y', strtotime($item->tanggal)) }}</td>
                    <td>{{ $item->hadirin }}</td>
                    
                    <td>
                        <a href="{{ url('agenda/edit/'.$item->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil" ></i></a>
                        <form action="{{ url('agenda/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('yakin ?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>    
                        </button>    
                        </form>                        
                    </td>

                   
                </tr>
            @endforeach
        </table>
        </tbody>
    </div>
</div>
</div>
    </div>

</div>
@endsection
