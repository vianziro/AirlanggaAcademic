<!-- REQUIRED JS SCRIPTS -->
<!-- REQUIRED JS SCRIPTS -->

<<<<<<< HEAD
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
=======
<!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
>>>>>>> dbb61662f9561b24d6d03ab77b8352a896db4069
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
 -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="<?php echo e(asset('/js/app.js')); ?>" type="text/javascript"></script>
<link href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<<<<<<< HEAD
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<link href="<?php echo e(asset('/css/lightbox.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/css/font-awesome.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('/js/lightbox.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap-tagsinput.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap-tagsinput-angular.js')); ?>"></script>
=======
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>

<!-- Latest compiled and minified Locales -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script> -->
<script src="<?php echo e(asset('/js/plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>

<!-- <script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
<!-- <link href="<?php echo e(asset('/css/lightbox.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/css/font-awesome.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('/js/lightbox.js')); ?>"></script> -->
<!-- <script src="<?php echo e(asset('/js/bootstrap-tagsinput.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap-tagsinput-angular.js')); ?>"></script> -->
>>>>>>> dbb61662f9561b24d6d03ab77b8352a896db4069
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>;
</script>
<<<<<<< HEAD
=======

>>>>>>> dbb61662f9561b24d6d03ab77b8352a896db4069
<?php echo $__env->yieldContent('code-footer'); ?>
