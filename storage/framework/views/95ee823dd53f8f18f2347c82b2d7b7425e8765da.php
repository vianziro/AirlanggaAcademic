<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Input Kalender Kegiatan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Input Kalender Kegiatan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!DOCTYPE html>
<html>
<body>

<form>
  <tr>
  <td>Nama Kegiatan :</td>
  <br><input type="text" name="Nama Kegiatan" value="" required=""></br>
  </tr>
<br>
  <tr>
  <td>Tanggal Pelaksanaan :</td>
  <br><input type="text" name="Tanggal Pelaksanaan" value="" required=""></br>
  </tr>
<br>
  <tr>
  <td>Bulan Pelaksanaan :</td>
  <br><input type="text" name="Bulan Pelaksanaan" value="" required=""></br>
  </tr>
<br>
<tr>
<td>Tempat Pelaksanaan :</td>
<br><input type="text" name="Tempat Pelaksanaan" value="" required=""></br>
  </tr>
<br>
  <tr><td><button type="Submit" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Submit</button></td>
  </tr>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Notifikasi</h4>
        </div>
        <div class="modal-body">
          <p>Upload berhasil.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              </div>
</form> 

</body>
</html>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>