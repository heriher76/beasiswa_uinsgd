<?php
    $kosong = null;
    $data_kosong = 'Data Kosong';
    echo "<script language='JavaScript' type='text/javascript'>window.print();</script>";
    $thn_sekarang = date('Y');// pendefinisian tanggal awal
    $thn_sesudah = date('Y', strtotime('+1 years', strtotime($thn_sekarang)));
    foreach($data as $value) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Lembar Survey Validasi <?php echo $value->no_pendaftaran; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo-uin-bandung.png'); ?>">
        <!-- Bootstrap 3.3.4 -->
        <link href="<?php echo base_url(); ?>assets/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />  
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <img src="<?php echo base_url('assets/img/Logo UIN Bandung.png'); ?>" style="width:130px; height:130px; float:left">
                <h3 class="text-center">
                    <b style="line-height:1.5;">
                        LEMBAR SURVEY/VALIDASI MAHASISWA CALON PENERIMA BEASISWA BIDIKMISI UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI BANDUNG TAHUN AKADEMIK <?php echo $thn_sekarang; ?>/<?php echo $thn_sesudah; ?>
                    </b>
                </h3>
                <br/>
                <br/>
                <table class="table table-responsive">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $value->nama_mahasiswa; ?></td>
                    </tr>

                    <tr>
                        <td>Fakultas/Prodi/Jurusan</td>
                        <td>:</td>
                        <td>
                        <?php 
                            foreach($fakultas as $x_fak){
                                if($value->fakultas == $x_fak->id_fakultas){
                                    echo $x_fak->nama_fakultas;
                                }
                            } 
                        ?> 
                        / 
                        <?php
                            foreach($jurusan as $x_jur){
                                if($value->jurusan == $x_jur->id_jurusan){
                                    echo $x_jur->nama_jurusan;
                                }
                            }
                        ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Alamat Asal/No.HP</td>
                        <td>:</td>
                        <td><?php echo $value->alamat; ?> / <?php echo $value->no_telp; ?></td>
                    </tr>
                </table>

                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">NO.</th>
                            <th class="text-center">URAIAN</th>
                            <th class="text-center">HASIL SURVEY/VALIDASI</th>
                            <th class="text-center">SESUAI</th>
                            <th class="text-center">TIDAK SESUAI</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Foto Rumah</td>
                            <td>* Sesuai/Tidak Sesuai</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>Kepemilikan Rumah</td>
                            <td><?php echo $value->kepemilikan_rumah; ?></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>Luas Bangunan</td>
                            <td><?php 
                                if($value->luas_rumah == '1'){
                                    echo "> 120 Meter Persegi";
                                }else if($value->luas_rumah == '2'){
                                    echo "81 - 120 Meter Persegi";
                                }else if($value->luas_rumah == '3'){
                                    echo "41 - 80 Meter Persegi";
                                }else if($value->luas_rumah == '4'){
                                    echo "< 40 Meter Persegi";
                                }
                            ?></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>Jenis Dinding Tempat Tinggal</td>
                            <td><?php echo $value->jenis_dinding; ?></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td>Fasilitas Toilet</td>
                            <td><?php echo $value->fasilitas_jamban; ?></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>6.</td>
                            <td>Sumber Penerangan</td>
                            <td><?php echo $value->sumber_penerangan; ?></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>7.</td>
                            <td>Sumber Air</td>
                            <td><?php echo $value->sumber_air; ?></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>8.</td>
                            <td>Bahan Bakar Dapur</td>
                            <td><?php echo $value->bahan_bakar_dapur; ?></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>9.</td>
                            <td>Nama Orang Tua : Ayah / Ibu</td>
                            <td>
                                1. Ayah : <?php echo $value->nama_ayah; if($value->almarhum == 40) {echo "(Almarhum)";}?>
                                <br/>
                                2. Ibu : <?php echo $value->nama_ibu; if($value->almarhumah == 20) {echo "(Almarhumah)";}?>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>Pekerjaan Orang Tua : Ayah / Ibu</td>
                            <td>
                            1. Ayah : <?php
                                if($value->pekerjaan_ayah == '1'){
                                    echo "PNS/TNI/POLRI";
                                }else if($value->pekerjaan_ayah == '2'){
                                    echo "Wiraswasta";
                                }else if($value->pekerjaan_ayah == '3'){
                                    echo "Tukang";
                                }else if($value->pekerjaan_ayah == '4'){
                                    echo "Buruh Tani/Petani";
                                }
                            ?>
                            <br/>
                            2. Ibu : <?php echo $value->pekerjaan_ibu; ?>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>11.</td>
                            <td>Jumlah Penghasilan Ayah</td>
                            <td>
                            <?php
                                if($value->penghasilan_ayah == '1'){
                                    echo "Lebih dari 1.000.000";
                                }else if($value->penghasilan_ayah == '2'){
                                    echo "751.000 - 1.000.000";
                                }else if($value->penghasilan_ayah == '3'){
                                    echo "501.000 s/d 750.000";
                                }else if($value->penghasilan_ayah == '4'){
                                    echo "< 500.000";
                                }
                            ?>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>     

                        <tr>
                            <td>12.</td>
                            <td>Pendidikan : Ayah / Ibu</td>
                            <td>
                            1. Ayah: <?php
                                if($value->pendidikan_ayah == '1'){
                                    echo "> Sarjana";
                                }else if($value->pendidikan_ayah == '2'){
                                    echo "SLTA/Sederajat";
                                }else if($value->pendidikan_ayah == '3'){
                                    echo "SLTP/Sederajat";
                                }else if($value->pendidikan_ayah == '4'){
                                    echo "SD/Tidak Sekolah";
                                }
                            ?>
                            <br/>
                            2. Ibu : <?php echo $value->pendidikan_ibu; ?>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>14.</td>
                            <td>Jarak dari Pusat Kota / Kabupaten</td>
                            <td><?php echo $value->jarak; ?></td>
                            <td></td>
                            <td></td>
                        </tr>    

                        <tr>
                            <td>15.</td>
                            <td>Kondisi Jalan Menuju Rumah</td>
                            <td><?php echo $value->kondisi_jalan; ?></td>
                            <td></td>
                            <td></td>
                        </tr>     

                        <tr>
                            <td>16.</td>
                            <td>Jumlah Pembayaran PBB dan Rekening Listrik</td>
                            <td>
                                1. PBB : <?php
                                    if($value->pbb == '1'){
                                        echo "> 100.000";
                                    }else if($value->pbb == '2'){
                                        echo "76.000 - 100.000";
                                    }else if($value->pbb == '3'){
                                        echo "26.000 - 75.000";
                                    }else if($value->pbb == '4'){
                                        echo "< 25.000";
                                    }
                                ?>
                                <br/>
                                2. Rekening Listrik/Bulan : <?php
                                    if($value->rek_listrik_per_bulan == '1'){
                                        echo "> 100.000";
                                    }else if($value->rek_listrik_per_bulan == '2'){
                                        echo "76.000 - 100.000";
                                    }else if($value->rek_listrik_per_bulan == '3'){
                                        echo "26.000 - 75.000";
                                    }else if($value->rek_listrik_per_bulan == '4'){
                                        echo "< 25.000";
                                    }
                                ?>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>  

                        <tr>
                            <td>17.</td>
                            <td>Mata Pencaharian Masyarakat Pada Umumnya</td>
                            <td>
                                <?php
                                    echo $value->mata_pencaharian;
                                ?>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td colspan="4">
                                <div style="padding-bottom:50px;">
                                    <b>Catatan Hasil Survey : <b>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <b><i>* Coret yang tidak sesuai</i></b>
                <br/>
                <br/>
                <div>
                    <div style="float:left;">
                        <p>Mengetahui :</p>
                        <p style="padding-bottom:100px;">Kepala Desa/Lurah/Camat,</p>
                        <p>(.........................................................)</p>
                        <p>NIP.</p>
                    </div>

                    <div style="margin-left:770px;">
                        <p>Bandung,............................................<?php echo date('Y'); ?></p>
                        <p style="padding-bottom:100px;">Petugas,</p>
                        <p>(...................................................................)</p>
                        <p>NIP.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php } ?>