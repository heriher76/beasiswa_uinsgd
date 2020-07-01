<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header2_mhs');
    echo "<script language='JavaScript' type='text/javascript'>window.print();</script>";
    $thn_sekarang = date('Y');// pendefinisian tanggal awal
    $thn_sesudah = date('Y', strtotime('+1 years', strtotime($thn_sekarang)));
?>
<!DOCTYPE html>
<html>
    <body>
        <div class="container">
            <div class="row">
                <div style="float:left;">
                    <img src="<?php echo base_url('assets/img/Logo UIN Bandung.png'); ?>" style="width:50%;">
                </div>
                
                <div style="float:left; width:50%; margin-right:60px; margin-left:30px;"" class="text-center">
                    <h4>
                        <b style="line-height:1.5;">SURAT PERNYATAAN PENERIMAAN DANA BANTUAN PROGRAM BIDIKMISI UIN SUNAN GUNUNG DJATI BANDUNG TAHUN AKADEMIK <?php echo $thn_sekarang; ?>/<?php echo $thn_sesudah; ?></b>
                    </h4>
                </div>
                
                <div>
                    <img src="<?=base_url('assets/img/logo-resmi-bidikmisi.png'); ?>" style="width:15%; float:right;">
                </div>

                <div class="clear"></div>
                <br/>
                <br/>
                <p>Pada Hari ini, tanggal <?php echo date('d'); ?> <?php echo date('M'); ?> <?php echo date('Y'); ?>, saya yang bertandatangan dibawah ini :</p>

                <table class="table">
                <?php foreach($data as $value) { ?>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $value->nama_mahasiswa; ?></td>
                    </tr>

                    <tr>
                        <td>No Pendaftaran</td>
                        <td>:</td>
                        <td><?php echo $value->no_pendaftaran; ?></td>
                    </tr>

                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td><?php echo $value->tempat_lahir; ?>, <?php echo $value->tanggal_lahir; ?></td>
                    </tr>

                    <!-- <tr>
                        <td>Tinggal di Pesantren</td>
                        <td>:</td>
                        <td>
                            <?php if($value->mondok == 'Ya') {
                                echo $value->nama_ponpes; 
                            }else if($value->mondok == 'Tidak') { 
                                echo "Tidak Mondok Pesentren";
                            } ?>
                        </td>
                    </tr> -->

                    <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td><?php 
                            foreach($jurusan as $x_jur){
                            if($value->jurusan == $x_jur->id_jurusan){
                                echo $x_jur->nama_jurusan;
                            }
                        } ?></td>
                    </tr>

                    <tr>
                        <td>Perguruan Tinggi</td>
                        <td>:</td>
                        <td>Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung</td>
                    </tr>

                    <tr>
                        <td>Telepon/Hp Mahasiswa</td>
                        <td>:</td>
                        <td><?php echo $value->no_telp; ?></td>
                    </tr>

                    <tr>
                        <td>Telepon/Hp Orang Tua</td>
                        <td>:</td>
                        <td><?php echo $value->no_telp_ortu; ?></td>
                    </tr>
                <?php } ?>
                </table>

                <p>dengan ini menyatakan bahwa :</p>
                <ol>
                    <li>Siap mengikuti kegiatan pembinaan dan pembelajaran serta bersedia mengikuti seluruh aturan program Bidikmisi PTKIN;</li>
                    <li>Bersedia melaporkan kepada pengelola apabila dana Bantuan telah masuk ke rekening, paling lambat 7 (tujuh) hari setelah dana diterima, sekaligus menandatangani SPJ, membawa photo copy buku rekening yang menunjukan uang masuk, transkrip nilai dan surat keterangan dari pesantren;</li>
                    <li>Siap ditempatkan di pondok pesantren, bersedia menyetorkan biaya penyelenggaraan pendidikan kepada Lembaga meliputi UKT (Uang Kuliah Tunggal), dan Pondok Pesantren selama 8 (delapan) semester;</li>
                    <li>Bersedia menggunakan biaya hidup sebaik - baiknya;</li>
                    <li>Bersedia melaporkan Indeks Prestasi (IP) setiap semesternya minimal 3,00 dan apabila tidak sesuai target maka bantuan beasiswa Bidikmisinya dihentikan (Surat Peringatan I, dan  Surat Keputusan Pemberhentian Bidikmisi);</li>
                    <li>Apabila Lolos menjadi penerima beasiswa bidikmisi, saya siap menyelesaikan perkuliahan selama 8 semester. Jika Lebih dari 8 semester saya siap dimasukan ke UKT Kategori 7 (tujuh);</li>
                     <li>Apabila saya melanggar point 1 s.d 6 bersedia menerima sanksi sesuai dengan ketentuan yang berlaku;</li>
                </ol>
                <p>Demikian Pernyataan ini saya buat dengan sebenar - benarnya, untuk dapat dipergunakan sebagaimana mestinya.</p>
                <br/>
                <br/>
                <div>
                    <div style="float:left;">
                        <p>Mengetahui :</p>
                        <p style="padding-bottom:100px;">Orang Tua Mahasiswa,</p>
                        <p>(.........................................................)</p>
                    </div>

                    <div style="margin-left:470px;">
                        <p>Yang Membuat Pernyataan,</p>
                        <p style="padding-bottom:45px; padding-top:50px; padding-left:90px;">materai 6000</p>
                        <p>(...................................................................)</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>