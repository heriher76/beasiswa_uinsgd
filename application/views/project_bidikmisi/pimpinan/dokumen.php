<!DOCTYPE html>
<html>
	<body>
		<?php foreach($foto as $value) { ?>
		<embed src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>">
		<embed src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>">
		<embed src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>">
		<embed src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>">
		<embed src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>">
		<?php } ?>
	</body>
</html>