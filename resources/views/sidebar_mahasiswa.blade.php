<!-- Contoh -->
<<<<<<< HEAD
<li
=======
<<<<<<< HEAD
<li
@if($page == 'jadwal-sidang')
{!! 'class="active"'!!}
@endif
>
<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Jadwal Sidang</a>
<!-- sub menu jadwal -->
<ul class="treeview-menu">
	<!-- Sub menu jadwal sidang proposal -->
	<li
	@if($page == 'jadwal-sidang')
	{!! 'class="active"'!!}
	@endif
	> <a href="#"><i class="fa fa-circle-o"></i>Proposal</a>/li>

	<!-- Sub menu jadwal sidang skripsi -->
	<li
	@if($page == 'jadwal-sidang')
	{!! 'class="active"'!!}
	@endif
	> <a href="#"><i class="fa fa-circle-o"></i>Skripsi</a>/li>


</ul>

=======
<!--  <li
>>>>>>> aca8e6c67014e4dcaacdbabe0f0c7e94ea046771
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
<<<<<<< HEAD
</li>


<li
@if($page == 'hasil-sidang')
{!! 'class="active"'!!}
@endif
>
<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>Hasil Sidang</a>
<!-- sub menu -->
<ul class="treeview-menu">
	<!-- hasil sidang proposal -->
	<li
	@if($page == 'hasil-sidang-proposal')
	{!! 'class="active"'!!}
	@endif
	> <a href="#"><i class="fa fa-circle-o"></i>Proposal</a>/li>

	<!-- hasil sidang skripsi -->
	<li
	@if($page == 'jadwal-sidang-skripsi')
	{!! 'class="active"'!!}
	@endif
	> <a href="#"><i class="fa fa-circle-o"></i>Skripsi</a>/li>


</ul>

=======
</li> -->

<li
@if($page == 'biodata-mahasiswa')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/biodata-mahasiswa') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Biodata Mahasiswa</a>
<a href="{{url('kegiatan/dokumentasi')}}">Dokumentasi</a>
<a href="{{url('/pengelolaan-kegiatan/uploadDokumentasi')}}">Upload</a>
</li>
<li
@if($page == 'penelitian')
{!! 'class="active"'!!}
@endif
>
<!-- Href menuju ke url mahasiswa/biodata -->
<a href="{{ url('/mahasiswa/penelitian') }}"><i class='fa fa-book'></i> <span> Penelitian</span></a>
</li>
<li
@if($page == 'prestasi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/prestasi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Prestasi</a>
</li>

	<li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'skripsi')
            {!! 'class="active"'!!}
            @endif>

            <a href="{{ url('mahasiswa/monitoring-skripsi/konsultasi') }}"><i class='fa fa-book'></i><span> Konsultasi</span></a>
            </li>
    
<li
@if($page == 'skripsi')
{!! 'class="active"'!!}
@endif>

<a href="{{ url('mahasiswa/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
</li>
</ul>
</li>
<li>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Peminjaman</a>
</li>

<li
@if($page == 'memohon-ruangan')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('memohon-ruangan') }}"><i class="fa fa-book" aria-hidden="true"></i>Memohon Ruangan</a>
>>>>>>> e21acc7da72d96e6ce26f2a5d8b100fa53d9e969
>>>>>>> aca8e6c67014e4dcaacdbabe0f0c7e94ea046771
</li>