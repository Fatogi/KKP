@extends('main')

@section('title', 'Tambah')

@section('breadcrumb')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Agenda</h1>
            </div>
        </div>
    </div>
<div class="col-sm-8">
    <div class="page-header float-right">
        <div class="page-title">
            <ol class="breadcrumb text-right">
                <li><a href="/">Dashboard</a></li>
                <li><a href="/agenda">Agenda</a></li>
                <li class="active">Edit</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="pull-right">
            <a href="{{ '/agenda' }}">
                <i class="fa fa-undo"></i> Kembali</a>
           </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="{{ url('agenda/'.$agenda->id) }}" method="post">
                  @method('patch')
                    @csrf
                    <div class="form-group">
                        <label>Nama Acara</label>
                        <input type="text" name="name" value="{{ $agenda->nama_acara }}" class="form-control" autofocus required>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <textarea type="name" name="location" class="form-control" required>{{ $agenda->lokasi }}</textarea>
                    </div>
                    <div class="form-group">
                      <label >Tanggal</label>
                      <input type="date" id="date" name="date" value="{{ $agenda->tanggal }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>User</label>
                        <select name="hadir" class="form-control">
                            <option value="Walikota">Walikota</option>
                            <option value="Operator">Operator</option>
                            <option value="Admin">Admin</option>

                          </select>
                        {{-- <input type="text" name="hadir" value="{{ $agenda->hadirin }}" class="form-control" autofocus required> --}}
                    </div>
                    <button type="submit" class=" btn btn-success"><div class="fa fa-floppy-o"> Simpan</div> </button>
  
                </form>
            </div>
        </div>
      </div>
    </div>  
  </div>

  

  <script>
    $( function() {
      $( "#date" ).datepicker({
        dateFormat: "yy-mm-dd"
      });
    } );
    </script>

@endsection

