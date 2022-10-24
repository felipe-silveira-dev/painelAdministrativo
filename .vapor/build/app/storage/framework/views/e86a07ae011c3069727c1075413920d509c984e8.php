<div
    <?php echo e($attributes
            ->merge($getExtraAttributes())
            ->class([
                'flex',
                match ($getFromBreakpoint()) {
                    'sm' => 'flex-col gap-1 sm:gap-3 sm:items-center sm:flex-row',
                    'md' => 'flex-col gap-1 md:gap-3 md:items-center md:flex-row',
                    'lg' => 'flex-col gap-1 lg:gap-3 lg:items-center lg:flex-row',
                    'xl' => 'flex-col gap-1 xl:gap-3 xl:items-center xl:flex-row',
                    '2xl' => 'flex-col gap-1 2xl:gap-3 2xl:items-center 2xl:flex-row',
                    default => 'gap-3 items-center',
                },
            ])); ?>

>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'tables::components.columns.layout','data' => ['components' => $getComponents(),'record' => $getRecord(),'recordKey' => $recordKey]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables::columns.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['components' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getComponents()),'record' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getRecord()),'record-key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($recordKey)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/tables/resources/views/columns/layout/split.blade.php ENDPATH**/ ?>