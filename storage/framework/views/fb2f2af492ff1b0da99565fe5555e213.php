<?php if($showLabel && $showField): ?>
    <?php if($options['wrapper'] !== false): ?>
        <div <?php echo $options['wrapperAttrs']; ?>>
    <?php endif; ?>
<?php endif; ?>

<?php
    $options['attr']['label'] = $options['label'];
    $isShowLabel = $showLabel && $options['label'] && $options['label_show'];

    if (!$isShowLabel) {
        unset($options['attr']['label']);
    }
?>

<?php if($showField): ?>
    <?php
        Arr::set($options['attr'], 'class', str_replace('form-control', '', $options['attr']['class']));
        Arr::set($options['attr'], 'helperText', $options['help_block']['text']);
    ?>
    <?php echo Form::onOffCheckbox($name, $options['value'], $options['attr']); ?>

<?php endif; ?>

<?php echo $__env->make('core/base::forms.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if($showLabel && $showField): ?>
    <?php if($options['wrapper'] !== false): ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/forms/fields/on-off-checkbox.blade.php ENDPATH**/ ?>