<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('core/setting::forms.form-content-only', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout ?? BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/baraa/Desktop/main/platform/core/setting/resources/views/forms/form.blade.php ENDPATH**/ ?>