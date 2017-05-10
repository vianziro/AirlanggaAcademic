<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('adminlte_lang::message.online')); ?></a>
                </div>
            </div>
        <?php endif; ?>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li 
            <?php if($page == 'home'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('home')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.home')); ?></span></a></li>
            
            <!-- Modul Mahasiswa -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Mahasiswa</span></a>
            <ul class="treeview-menu">
            <li
            <?php if($page == 'biodata'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
                <a href="<?php echo e(url('/mahasiswa/biodata')); ?>"><i class="fa fa-book"></i> Biodata</a>
            </li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/prestasi -->
                        <li><a href="<?php echo e(url('/mahasiswa/prestasi')); ?>"><i class="fa fa-edit"></i> Prestasi</a></li>
                <!-- $page nya sesuaiin sama yang di controller -->

            <li
            <?php if($page == 'biodatamahasiswa'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('mahasiswa/biodata-mahasiswa')); ?>"><i class='fa fa-book'></i> <span> Biodata Mahasiswa</span></a>
          
            </li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/penelitian -->
                        <li 
                        <?php if($page == 'penelitian'): ?>
                        <?php echo 'class="active"'; ?>

                        <?php endif; ?>
                        ><a href="<?php echo e(url('/mahasiswa/penelitian')); ?>"><i class="fa fa-edit"></i> Penelitian
                            </a>
                            </li>
                                    <!-- Href menuju ke url mahasiswa/kemahasiswaan/penelitian -->
                                    <li
                                    <?php if($page == 'detailpenelitian'): ?>
                                    <?php echo 'class="active"'; ?>

                                    <?php endif; ?>
                                    ><a href="<?php echo e(url('/mahasiswa/detailpenelitian')); ?>"><i class="fa fa-edit"></i>Detail Penelitian</a></li>
                                    <li><a href="<?php echo e(url('/mahasiswa/detailanggota')); ?>"><i class="fa fa-edit"></i>Detail Anggota</a></li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/prestasi -->
                        <li><a href="<?php echo e(url('/mahasiswa/prestasi')); ?>"><i class="fa fa-edit"></i> Prestasi</a></li>
                <!-- $page nya sesuaiin sama yang di controller -->
            <li
            <?php if($page == 'biodata'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
                <a href="<?php echo e(url('/mahasiswa/akun')); ?>"><i class="fa fa-book"></i> Akun Mahasiswa</a>
            </li> 
                </ul>
            </li>
             

<<<<<<< HEAD

=======
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            <!-- Modul Dosen -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Dosen</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li

<<<<<<< HEAD
            <li <?php if($page == 'pengmas'): ?>
=======
            <?php if($page == 'pengmas'): ?>
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/pengmas')); ?>"><i class='fa fa-book'></i> <span> Pengabdian Masyarakat</span></a></li>

           <li
            <?php if($page == 'konferensi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('dosen/konferensi')); ?>"><i class='fa fa-book'></i> <span> Konferensi</span></a>
            </li> 
            <li><a href="<?php echo e(url('/dosen/pengmas/index')); ?>">Pengabdian Masyarakat</a></li>

            <li><a href="<?php echo e(url('/dosen/konferensi/index')); ?>">Konferensi</a></li>
<<<<<<< HEAD

            <li><a href="<?php echo e(url('/dosen/pengmas/index')); ?>"><i class='fa fa-book'></i>Pengabdian Masyarakat</a></li>

          
            <li><a href="<?php echo e(url('/dosen/konferensi/index')); ?>"><i class='fa fa-book'></i>Konferensi</a></li>
            <li
            <?php if($page == 'penelitian'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/penelitian')); ?>"><i class='fa fa-book'></i>Penelitian</a>
            </li>                 
            <li><a href="<?php echo e(url('/dosen/jurnal/index')); ?>">Jurnal</a></li>  
=======

            <li><a href="<?php echo e(url('/dosen/pengmas/index')); ?>"><i class='fa fa-book'></i>Pengabdian Masyarakat</a></li>  
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            <li><a href="<?php echo e(url('/dosen/jurnal/index')); ?>"><i class='fa fa-book'></i>Jurnal</a></li>  
            <li

            <?php if($page == 'sktugas'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('dosen/sktugas')); ?>"><i class='fa fa-book'></i> <span> Surat Tugas</span></a>
<<<<<<< HEAD
            </li> 
            <li><a href="<?php echo e(url('/dosen/biodata/index')); ?>">Biodata</a></li>

=======
            </li>
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            <li
            <?php if($page == 'jurnal'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/jurnal')); ?>">Jurnal</a>
            </li>  
            <li><a href="<?php echo e(url('/dosen/sktugas/index')); ?>">SK Tugas</a></li>
            <li><a href="<?php echo e(url('/dosen/biodata/index')); ?>">Biodata</a></li>
<<<<<<< HEAD

=======
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            </ul>
            </li>

            <!-- Modul Kurikulum -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD

=======

            <li
            <?php if($page == 'biodata'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('kurikulum/kodecpmatkul')); ?>"><i class='fa fa-book'></i> <span> Kode CP Matkul</span></a>
            </li>

>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            <li
            <?php if($page == 'capaian-program'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url kurikulum/capaian-program -->
            <a href="<?php echo e(url('kurikulum/capaian-program')); ?>"><i class='fa fa-book'></i> <span> Capaian Program</span></a>

            <li
            <?php if($page == 'kategori-media-pembelajaran'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('kurikulum/kategori-media-pembelajaran')); ?>"><i class='fa fa-book'></i> <span>Kategori Media Pembelajaran</span></a>

            </li>

            <li 
            <?php if($page == 'prodi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/kurikulum/prodi')); ?>"><i class='fa fa-book'></i> <span> Prodi</span></a></li>
<<<<<<< HEAD
            </li> 
            <a href="<?php echo e(url('/kurikulum/universitas')); ?>"><i class='fa fa-book'></i> <span> Universitas</span></a>
            </li>        
=======
            </li>
            <li>
            <a href="<?php echo e(url('/kurikulum/universitas')); ?>"><i class='fa fa-book'></i> <span> Universitas</span></a>
            </li>       
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            </ul>
            </li>

            <!-- Modul Krs-Khs -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Krs-Khs</span></a>
            <ul class="treeview-menu">
<<<<<<< HEAD
            <!-- Sidebarnya ditaruh dibawah sini -->
            
=======
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li    
               <?php if($page == 'ruang'): ?>
                 <?php echo 'class="active"'; ?>

               <?php endif; ?>
                 >
             <!-- Href menuju ke url krs-khs/ruang/view -->
                 <a href="<?php echo e(url('krs-khs/ruang/view')); ?>"><i class='fa fa-book'></i> <span> Ruang</span></a>
                </li>
                <li>
                <a href="<?php echo e(url('krs-khs/jam/view')); ?>"><i class='fa fa-clock-o'></i> <span> Jam</span></a>
                </li>  
             <li
            <?php if($page == 'JadwalKuliah'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('krs-khs/JadwalKuliah')); ?>"><i class='fa fa-book'></i> <span>Jadwal Kuliah</span></a>
            </li>
            <li
            <?php if($page == 'JenisPenilaian'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('krs-khs/JenisPenilaian')); ?>"><i class='fa fa-book'></i> <span>JenisPenilaian</span></a>
<<<<<<< HEAD
            </li>        
            </ul>
            </li>

            <!-- Sidebarnya ditaruh dibawah sini -->
=======
            </li>

            <li
            <?php if($page == 'TahunAkademik'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('krs-khs/TahunAkademik')); ?>"><i class='fa fa-book'></i> <span>TahunAjaran</span></a>
            </li>
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            <li
            <?php if($page == 'khs'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url krs-khs/Khs -->
            <a href="<?php echo e(url('krs-khs/khs')); ?>"><i class='fa fa-book'></i> <span>Khs</span></a>
<<<<<<< HEAD
            </li>        
            </ul>
            </li>
           
=======
            </li>
            <li
            <?php if($page == 'Hari'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('krs-khs/Hari')); ?>"><i class='fa fa-book'></i> <span>Hari</span></a>
            </li>    
            </ul>
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            </li>

            <!-- Modul Monitoring Skripsi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            <?php if($page == 'skripsi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>>

            <a href="<?php echo e(url('monitoring-skripsi/skripsi')); ?>"><i class='fa fa-book'></i><span> Skripsi</span></a>
            </li>

<<<<<<< HEAD
=======

>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            <li
                <?php if($page == 'KBK'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >

                <a href="<?php echo e(url('monitoring-skripsi/KBK')); ?>"><i class='fa fa-book'></i><span> KBK </span></a>
            </li>
            <li
                <?php if($page == 'dosbing'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >

                <a href="<?php echo e(url('monitoring-skripsi/index-dosbing')); ?>"><i class='fa fa-book'></i><span>Dosen Pembimbing </span></a>
<<<<<<< HEAD
=======
            </li>

            <li
                <?php if($page == 'dosen_penguji'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >

                <a href="<?php echo e(url('monitoring-skripsi/index-dosen-penguji')); ?>"><i class='fa fa-book'></i><span>Dosen Penguji </span></a>
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            </li>

            <li
            <?php if($page == 'konsultasi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('monitoring-skripsi/konsultasi')); ?>"><i class='fa fa-book'></i>
            <span>Konsultasi</span></a>
            </li>
            </ul>
            </li>

            <!-- Modul Notulensi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            <?php if($page == 'notulen'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="<?php echo e(url('notulensi/notulen')); ?>"><i class='fa fa-book'></i> <span> Notulensi Rapat</span></a>
            </li>

            <li
            <?php if($page == 'dosenrapat'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('notulensi/dosenrapat')); ?>"><i class='fa fa-book'></i> <span>Dosen Rapat</span></a>
            </li>        
            </ul>
            </li>


            <!-- Modul Pengelolaan Kegiatan -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Pengelolaan Kegiatan</span></a>
            <ul class="treeview-menu">
                <li><a href="<?php echo e(url('/kegiatan/dokumentasi')); ?>">Dokumentasi</a></li>
                <li><a href="<?php echo e(url('/pengelolaan-kegiatan/uploadDokumentasi')); ?>">Upload</a></li>
            <!-- Sidebarnya ditaruh dibawah sini -->
            <!-- $page nya sesuaiin sama yang di controller -->
            <li
            <?php if($page == 'rincian_dana'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('pengelolaan-kegiatan/rincian_dana')); ?>"><i class='fa fa-book'></i> <span>Rincian Dana</span></a>
            </li>       
            <li

            <?php if($page == 'pengajuan'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->

            <a href="<?php echo e(url('pengelolaan-kegiatan/rundown')); ?>"><i class='fa fa-book'></i> <span> Rundown</span></a>
            </li>
            <li

            <?php if($page == 'pengajuan'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('pengelolaan-kegiatan/pengajuan')); ?>"><i class='fa fa-book'></i> <span> Pengajuan Kegiatan</span></a>
            </li>
             <!-- Sidebar laporan pelaksanaan -->
            <li
            <?php if($page == 'laporan_pelaksanaan'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url pengelolaan-kegiatan/laporan_pelaksanaan -->

            <a href="<?php echo e(url('pengelolaan-kegiatan/laporan_pelaksanaan')); ?>"><i class='fa fa-book'></i> <span> Laporan Pelaksanaan</span></a>
            </li>      
            </ul>
            </li>

            <!-- Modul PLA -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> PLA</span></a>
            <ul class="treeview-menu">
<<<<<<< HEAD
=======
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            <?php if($page == 'surat_mhs'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('pla/PermohonanSuratMhs')); ?>"><i class='fa fa-book'></i> <span> Permohonan Surat Mhs</span></a>
            </li> 
                <li
                <?php if($page == 'jadwal-permohonan'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >
            <!-- Href menuju ke url pla/jadwal-permohonan-ruangan/view -->
                <a href="<?php echo e(url('pla/jadwal-permohonan/view')); ?>"><i class='fa fa-book'></i> <span>Jadwal Permohonan</span></a>
                </li>
>>>>>>> 2aa00583008e5b1bdd8e381e50b738c91f56a38d
            <li
                <?php if($page == 'suratmasuk'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >
            <!-- Href menuju ke url -->
                <a href="<?php echo e(url('pla/surat-masuk')); ?>"><i class='fa fa-book'></i> <span> Surat Masuk</span></a>
                </li>   
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            <?php if($page == 'PermohonanRuang'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('pla/PermohonanRuang')); ?>"><i class='fa fa-book'></i> <span> Permohonan Ruang</span></a>
            </li>  
            </ul>
            </li>

            <!-- Modul Inventaris -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Inventaris</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <!-- Sidebarnya Asset -->
            <li
            <?php if($page == 'asset'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url inventaris/asset -->
            <a href="<?php echo e(url('inventaris/asset')); ?>"><i class='fa fa-book'></i> <span> Asset</span></a>
            </li>        

                <li><a href="<?php echo e(url('/index-asset')); ?>">all asset</a></li>
                <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
                <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
            </ul>
            </li>

            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>