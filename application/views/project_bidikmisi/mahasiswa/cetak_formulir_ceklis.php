<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header2_mhs');
    echo "<script language='JavaScript' type='text/javascript'>window.print();</script>";
    $thn_sekarang = date('Y');// pendefinisian tanggal awal
    $thn_sesudah = date('Y', strtotime('+1 years', strtotime($thn_sekarang)));
    $no = 1;
?>


<!DOCTYPE html>
<html>
    <body>
        <div class="container">
            <div class="row">
                <img src="<?php echo base_url('assets/img/Logo UIN Bandung.png'); ?>" style=" margin-left:50px; margin-top:10px; width:90px; height:90px; float:left">

                <div style="font-family: 'Arial'; font-size: 14px; margin-left:20px; text-align: center;">
                    <h5><b style="line-height:1.5;">KEMENTERIAN AGAMA REPUBLIK INDONESIA<br>
                        UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI BANDUNG
                    </b><br>
                Jalan A.H. Nasution No. 105 Cibiru Bandung 40614<br>
Telp. (022) 7800525 Fax. (022) 7802844<br>
Website : <b>www.uinsgd.ac.id</b>, email: <b>info@uinsgd.ac.id</b>
</h5>

                </div>
<hr>
                <div style="font-family: 'Arial'; font-size: 5px; margin-left:0px; text-align: center;">
                    <h4><b style="line-height:1.5;">FORMULIR CEKLIS PENDAFTARAN PROGRAM BIDIKMISI <br>TAHUN AKADEMIK <?php echo $thn_sekarang; ?>/<?php echo $thn_sesudah; ?></h4>
                </div>

               

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
                        <td>Fakultas</td>
                        <td>:</td>
                        <td><?php
                        if($value->fakultas == '0' || $value->fakultas == null){
                            echo "-";
                        }

                        foreach($fakultas as $x_fak){
                            if($value->fakultas == $x_fak->id_fakultas){
                                echo $x_fak->nama_fakultas;
                            }
                        }
                        ?></td>
                    </tr>

                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><?php
                        if($value->jurusan == '0' || $value->jurusan == null){
                            echo "-";
                        }

                        foreach($jurusan as $x_jur){
                            if($value->jurusan == $x_jur->id_jurusan){
                                echo $x_jur->nama_jurusan;
                            }
                        }
                        ?></td>
                    </tr>
                <?php } ?>
                </table>

                <table class="table table-responsive table-bordered" border="0">
                    <thead>
                        <tr>
                            <th style="text-align:center;">No</th>
                            <th style="text-align:center;">Dokumen</th>
                            <th style="text-align:center;">Ada</th>
                            <th style="text-align:center;">Tidak Ada</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($data as $value) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Formulir print out hasil pendaftaran online</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Fotocopy Resi Pembayaran UKT dan surat penetapan pembayaran UKT</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Fotocopy Ijazah dan SKHUN (yang terdapat Nilainya)</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Surat Keterangan tentang peringkat siswa di kelas dan bukti pendukung prestasi lainnya di bidang ko-kurikuler dan ekstrakurikuler yang dilegalisir oleh Kepala Sekolah; (Sertifikat)</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Surat keterangan Penghasilan orang tua yang dikeluarkan oleh Kepala Desa yang ditandatangani dan di stempel asli</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Surat keterangan Tidak mampu yang dikeluarkan oleh kepala desa ditandatangani dan di stempel asli.</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Surat Keterangan Kematian Orang tua dari Desa/Kelurahan <b style="color:red;">(Apabila Orangtuanya sudah meninggal)</b></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Fotocopy rekening listrik bulan terakhir (apabila tersedia aliran listrik)</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Fotocopy bukti pembayaran PBB (apabila mempunyai bukti pembayaran)</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Fotocopy Kartu Keluarga, KTP yang bersangkutan, Bapak dan Ibu</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Poto Berlatar Merah terbaru 2 x 3 satu lembar</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Foto rumah/tempat tinggal dari tiga sisi </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>Surat Pernyataan Siap Menyelesaikan Kuliah selama 8 Semester Kontark Belajar</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>


            </div>
        </div>
    </body>
</html>