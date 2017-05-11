@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Data Skripsi
@endsection

@section('contentheader_title')
Tambah Data Skripsi
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>
	<!-- Ini buat menampilkan notifikasi -->
	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
	<p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
	{!!Session::forget('alert-' . $msg)!!}
	@endif
	@endforeach


<div class="row">
	<div class="col-md-12">
		<div class="">

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<br>
			<form id="tambahSkrispi" method="post" action="{{url('/karyawan/monitoring-skripsi/skripsi/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama_mhs" class="col-sm-2 control-label">Nama Mahasiswa</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" required>
					</div>
				</div>
				<div class="form-group">
					<label for="NIM_id" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="NIM_id" name="NIM_id" placeholder="Masukkan NIM" required>
					</div>
				</div>
				<div class="form-group">
                  <label for="kbk_id" class="col-sm-2 control-label">KBK</label>
                  <div class="col-md-8">
                  <select name="kbk_id" class="form-control">
                    <option id="kbk_id" name="kbk_id" value="1">Data Mining</option>
                    <option id="kbk_id" name="kbk_id" value="2">Sistem Pengambilan Keputusan</option>
                    <option id="kbk_id" name="kbk_id" value="3">Information System Engineering</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
					<label for="Judul" class="col-sm-2 control-label">Judul</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="Judul" name="Judul" placeholder="Masukkan Judul" required>
					</div>
					</div>

				<div class="form-group">
					<label for="nip_petugas_id" class="col-sm-2 control-label">NIP</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="nip_petugas_id" name="nip_petugas_id" placeholder="Masukkan NIP" required>
					</div>
				</div>

				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('code-footer') 
 <script type="text/javascript">
     
    $(document).ready(function () {

   $('#nama').autocomplete({


       source:'{!!url('ajax')!!}',

       // source:"{{ URL::to('autocomplete')}}",
       minlength:2,
       autoFocus:true,

          
             select: function (event, ui) {
             var item = ui.item;
                 if(item) {
                     $("#NIM").val(item.NIM);
                 }
             }

   });


});
 </script>
@endsection
