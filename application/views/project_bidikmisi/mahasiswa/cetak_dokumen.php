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
                
                <div style="float:left; width:50%; margin-right:60px; margin-left:30px;" class="text-center">
                    <h4>
                        <b style="line-height:1.5;">DOKUMEN PENDUKUNG BIDIKMISI UIN SUNAN GUNUNG DJATI BANDUNG TAHUN AKADEMIK <?php echo $thn_sekarang; ?>/<?php echo $thn_sesudah; ?></b>
                    </h4>
                </div>
                
                <div>
                    <img src="<?=base_url('assets/img/logo-resmi-bidikmisi.png'); ?>" style="width:15%; float:right;">
                </div>

                <div class="clear"></div>
                <br/>
                <table class="table">
                    <?php foreach($data as $value) { ?>
                        <tr>
                        <td>No Pendaftaran</td>
                        <td>:<td>
                        <td><?php echo $value->no_pendaftaran; ?></td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:<td>
                        <td><?php echo $value->nama_mahasiswa; ?></td>
                    </tr>

                    <tr>
                        <td>Fakultas</td>
                        <td>:<td>
                        <td><?php foreach($fakultas as $x_fak){
                            if($value->fakultas == $x_fak->id_fakultas){
                                echo $x_fak->nama_fakultas;
                            }
                        } ?></td>
                    </tr>

                    <tr>
                        <td>Jurusan</td>
                        <td>:<td>
                        <td><?php foreach($jurusan as $x_jur){
                            if($value->jurusan == $x_jur->id_jurusan){
                                echo $x_jur->nama_jurusan;
                            }
                        } ?></td>
                    </tr>

                    <tr>
                        <td>No Telepon</td>
                        <td>:<td>
                        <td><?php echo $value->no_telp; ?></td>
                    </tr>
                    <?php } ?>
                </table>
                
                <!-- Foto Rumah Depan dan Kiri -->
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Foto Rumah Bagian Depan</th>
                            <th>Foto Rumah Bagian Kiri</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($data as $value) { ?>
                        <tr>
                            <td><img src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>" class="img-responsive img-fluid"></td>
                            <td><img src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>" class="img-responsive img-fluid"></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Foto Rumah Bagian Depan</th>
                            <th>Foto Rumah Bagian Kiri</th>
                        </tr>
                    </tfoot>
                </table>
                <!-- End Foto Rumah Depan dan Kiri -->

                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>

                <!-- Foto Rumah Kanan dan Dalam -->
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Foto Rumah Bagian Kanan</th>
                            <th>Foto Rumah Bagian Dalam</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($data as $value) { ?>
                        <tr>
                            <td><img src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>" class="img-responsive img-fluid"></td>
                            <td><img src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_dalam; ?>" class="img-responsive img-fluid"></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Foto Rumah Bagian Kanan</th>
                            <th>Foto Rumah Bagian Dalam</th>
                        </tr>
                    </tfoot>
                </table>
                <!-- End Foto Rumah Kanan dan Dalam -->

                <!-- Foto KTP dan KK -->
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Foto KTP</th>
                            <th>Foto Kartu Keluarga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($data as $value) { ?>
                        <tr>
                            <td><img src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_ktp; ?>" class="img-responsive img-fluid"></td>
                            <td><img src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kk; ?>" class="img-responsive img-fluid"></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Foto KTP</th>
                            <th>Foto Kartu Keluarga</th>
                        </tr>
                    </tfoot>
                </table> 
                <!-- End Foto KTP dan KK -->

                <br/>
                <br/>
                <br/>
                <br/>
                <br/>

                <!-- Foto PBB dan Rekening Listrik -->
                <table class="table table-bordered table-responsive"> 
                    <thead>
                        <tr>
                            <th>Foto PBB</th>
                            <th>Foto Rekening Listrik</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($data as $value) { ?>
                        <tr>
                            <td><img src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>" class="img-responsive img-fluid"></td>
                            <td><img src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>" class="img-responsive img-fluid"></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Foto PBB</th>
                            <th>Foto Rekening Listrik</th>
                        </tr>
                    </tfoot>
                </table>
                <!-- End Foto PBB dan Rekening Listrik -->
            </div>
        </div>
    </body>
</html>