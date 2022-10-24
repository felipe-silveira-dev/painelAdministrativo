<input
    <?php echo e($attributes->class([
        'block border-gray-300 rounded shadow-sm text-primary-600 focus:ring focus:ring-primary-200 focus:ring-opacity-50',
        'dark:bg-gray-700 dark:border-gray-600 dark:checked:bg-primary-600 dark:checked:border-primary-600' => config('tables.dark_mode'),
    ])); ?>

    wire:loading.attr="disabled"
    wire:target="<?php echo e(implode(',', \Filament\Tables\Table::LOADING_TARGETS)); ?>"
    type="checkbox"
/>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/tables/resources/views/components/checkbox/index.blade.php ENDPATH**/ ?>