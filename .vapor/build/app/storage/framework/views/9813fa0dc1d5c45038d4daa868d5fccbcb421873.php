<?php foreach($attributes->onlyProps([
    'extraAttributes' => [],
    'isSortColumn' => false,
    'name',
    'sortable' => false,
    'sortDirection',
    'alignment' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'extraAttributes' => [],
    'isSortColumn' => false,
    'name',
    'sortable' => false,
    'sortDirection',
    'alignment' => null,
]); ?>
<?php foreach (array_filter(([
    'extraAttributes' => [],
    'isSortColumn' => false,
    'name',
    'sortable' => false,
    'sortDirection',
    'alignment' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<th <?php echo e($attributes->merge($extraAttributes)->class(['filament-tables-header-cell p-0'])); ?>>
    <button
        <?php if($sortable): ?>
            wire:click="sortTable('<?php echo e($name); ?>')"
        <?php endif; ?>
        type="button"
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'flex items-center w-full px-4 py-2 whitespace-nowrap space-x-1 rtl:space-x-reverse font-medium text-sm text-gray-600',
            'dark:text-gray-300' => config('tables.dark_mode'),
            'cursor-default' => ! $sortable,
            match ($alignment) {
                'left' => 'justify-start',
                'center' => 'justify-center',
                'right' => 'justify-end',
                default => null,
            },
        ]) ?>"
    >
        <span>
            <?php echo e($slot); ?>

        </span>

        <?php if($sortable): ?>
            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => $isSortColumn && $sortDirection === 'asc' ? 'heroicon-s-chevron-up' : 'heroicon-s-chevron-down'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\Support\Arr::toCssClasses([
                    'filament-tables-header-cell-sort-icon h-3 w-3',
                    'dark:text-gray-300' => config('tables.dark_mode'),
                    'opacity-25' => ! $isSortColumn,
                ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
        <?php endif; ?>
    </button>
</th>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/tables/resources/views/components/header-cell.blade.php ENDPATH**/ ?>