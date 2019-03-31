<?php
//cetak notifikasi
if($this->session->flashdata('success')){
  echo '<div class="alert alert-success"><i class="fa fa-check"></i>';
  echo $this->session->flashdata('success');
  echo '</div>';
}
echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open_multipart(base_url('admin/konfigurasi/logo'));
?>

<input type="hidden" name="id" value="<?php echo $konfigurasi->id ?>">

<div class="col-md-4">
  <?php if($konfigurasi->logo == "") {?>
  <div class="alert alert-success text-center">
    <i class="fa fa-warning"></i>Belum ada logo yang di upload

  </div>
<?php }else {?>
  <img class="img img-thumbnail img-responsive" src="<?php echo base_url('assets/upload/image/'.$konfigurasi->logo) ?>" alt="<?php echo $konfigurasi->namaweb ?>">
<?php } ?>

</div>

<div class="col-md-8">
  <input type="hidden" name="id" value="<?php echo $konfigurasi->id ?>">

  <div class="form-group">
    <label>Upload Logo Baru</label>
    <input type="file" name="logo" class="form-control" required="required">
  </div>
<br>
<br>
	<button type="Submit" name="Submit" value="Save Configuration" class="btn btn-primary btn-lg"><i class="fa fa-upload"> Simpan Konfigurasi</i></button>
</div>



<?php echo form_close() ?>
