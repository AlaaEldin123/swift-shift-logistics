<script type="text/javascript">
    var BotbleVariables = BotbleVariables || {};

    <?php if(Auth::guard()->check()): ?>
        BotbleVariables.languages = {
            tables: <?php echo e(Js::from(trans('core/base::tables'))); ?>,
            notices_msg: <?php echo e(Js::from(trans('core/base::notices'))); ?>,
            pagination: <?php echo e(Js::from(trans('pagination'))); ?>,
            system: {
                'character_remain': '<?php echo e(trans('core/base::forms.character_remain')); ?>'
            },
        };
        BotbleVariables.authorized =
            "<?php echo e(setting('membership_authorization_at') && Carbon\Carbon::now()->diffInDays(Carbon\Carbon::createFromFormat('Y-m-d H:i:s', setting('membership_authorization_at'))) <= 7 ? 1 : 0); ?>";
    <?php else: ?>
        BotbleVariables.languages = {
            notices_msg: <?php echo e(Js::from(trans('core/base::notices'))); ?>,
        };
    <?php endif; ?>
</script>

<?php $__env->startPush('footer'); ?>
    <?php if(Session::has('success_msg') || Session::has('error_msg') || (isset($errors) && $errors->any()) || isset($error_msg)): ?>
        <script type="text/javascript">
            $(function() {
                <?php if(Session::has('success_msg')): ?>
                    Botble.showSuccess('<?php echo e(session('success_msg')); ?>');
                <?php endif; ?>
                <?php if(Session::has('error_msg')): ?>
                    Botble.showError('<?php echo e(session('error_msg')); ?>');
                <?php endif; ?>
                <?php if(isset($error_msg)): ?>
                    Botble.showError('<?php echo e($error_msg); ?>');
                <?php endif; ?>
                <?php if(isset($errors)): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        Botble.showError('<?php echo e($error); ?>');
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            })
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/elements/common.blade.php ENDPATH**/ ?>