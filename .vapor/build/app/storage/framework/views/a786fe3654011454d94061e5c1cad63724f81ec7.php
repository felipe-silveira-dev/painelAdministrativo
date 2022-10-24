<?php foreach($attributes->onlyProps([
    'record',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'record',
]); ?>
<?php foreach (array_filter(([
    'record',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<td
    wire:loading.remove.delay
    wire:target="<?php echo e(implode(',', \Filament\Tables\Table::LOADING_TARGETS)); ?>"
    <?php echo e($attributes->class(['filament-tables-actions-cell px-4 py-3 whitespace-nowrap'])); ?>

>
    <?php echo e($slot); ?>

</td>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/tables/resources/views/components/actions/cell.blade.php ENDPATH**/ ?>