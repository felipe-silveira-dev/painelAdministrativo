<div class="filament-page-select-action">
    <label for="<?php echo e($getId()); ?>" class="sr-only">
        <?php echo e($getLabel()); ?>

    </label>

    <select
        id="<?php echo e($getId()); ?>"
        wire:model="<?php echo e($getName()); ?>"
        <?php echo e($attributes->class([
            'text-gray-900 border-gray-300 invalid:text-gray-400 block w-full h-9 py-1 transition duration-75 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500',
            'dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 dark:focus:border-primary-500' => config('filament.dark_mode'),
        ])); ?>

    >
        <?php if(($placeholder = $getPlaceholder()) !== null): ?>
            <option value=""><?php echo e($placeholder); ?></option>
        <?php endif; ?>

        <?php $__currentLoopData = $getOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($value); ?>">
                <?php echo e($label); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/filament/resources/views/pages/actions/select-action.blade.php ENDPATH**/ ?>