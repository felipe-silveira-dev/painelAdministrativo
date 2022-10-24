<?php foreach($attributes->onlyProps([
    'components',
    'record',
    'recordKey' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'components',
    'record',
    'recordKey' => null,
]); ?>
<?php foreach (array_filter(([
    'components',
    'record',
    'recordKey' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $getHiddenClasses = function (\Filament\Tables\Columns\Column | \Filament\Tables\Columns\Layout\Component $layoutComponent): ?string {
        if ($breakpoint = $layoutComponent->getHiddenFrom()) {
            return match ($breakpoint) {
                'sm' => 'sm:hidden',
                'md' => 'md:hidden',
                'lg' => 'lg:hidden',
                'xl' => 'xl:hidden',
                '2xl' => '2xl:hidden',
            };
        }

        if ($breakpoint = $layoutComponent->getVisibleFrom()) {
            return match ($breakpoint) {
                'sm' => 'hidden sm:block',
                'md' => 'hidden md:block',
                'lg' => 'hidden lg:block',
                'xl' => 'hidden xl:block',
                '2xl' => 'hidden 2xl:block',
            };
        }

        return null;
    };
?>

<?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layoutComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $layoutComponent->record($record);

        $isColumn = $layoutComponent instanceof \Filament\Tables\Columns\Column;
    ?>

    <?php if(! $layoutComponent->isHidden()): ?>
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'flex-1 w-full' => $isColumn ? $layoutComponent->canGrow() : true,
            $getHiddenClasses($layoutComponent),
        ]) ?>">
            <?php if($isColumn): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'tables::components.columns.column','data' => ['column' => $layoutComponent->inline(),'record' => $record,'recordKey' => $recordKey]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables::columns.column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['column' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->inline()),'record' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($record),'record-key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($recordKey)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php else: ?>
                <?php echo e($layoutComponent->viewData(['recordKey' => $recordKey])); ?>

            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/tables/resources/views/components/columns/layout.blade.php ENDPATH**/ ?>