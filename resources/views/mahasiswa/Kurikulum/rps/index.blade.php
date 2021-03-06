@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Rencana Pembelajaran Semester 
@endsection

@section('contentheader_title')
Rencana Pembelajaran Semester
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>

  <!-- Href ini biar diklik masuk ke form tambah -->
  <div class="box box-danger">

<div class="box-body">
<table id="data-table" class="table table-bordered table-striped">
    <thead>
<tr>
    <th style="text-align:center">No.</th>
    <th style="text-align:center">Kode Mata Kuliah</th>
    <th style="text-align:center">Nama Mata Kuliah</th>
    <th style="text-align:center">Aksi</th>
  </tr>
  </thead>

  <tbody>
  @forelse($mata_kuliah as $i => $mk) 
  <tr>
   <td width="2%" style="text-align:center">{{ $i+1 }}</td>
    <td width="15%" style="text-align:center"><a href="{{url('/mahasiswa/kurikulum/rps/detail/'.$mk->id_mk)}}">{{$mk->kode_matkul}}</a></td>
    <td width="25%" style="text-align:center">{{$mk->nama_matkul}}</td>

    <td width="15%" style="text-align:center">
        <a target="__blank" href="{{url('/mahasiswa/kurikulum/rps/pdf/'.$mk->id_mk)}}" class="btn btn-info btn-xs">
        <i class="fa fa-file-text-o" aria-hidden="true"></i> Download PDF</a>
        </td>

    @empty
    <tr>
      <td colspan="6"><center>Belum ada RPS</center></td>
    </tr>

    @endforelse
  </tbody>
</table>

</div>

</div>
@endsection

@section('code-footer')
<script type="text/javascript">
  $(document).ready(function(){
      $('#data-table').DataTable();
  });
</script>
@endsection