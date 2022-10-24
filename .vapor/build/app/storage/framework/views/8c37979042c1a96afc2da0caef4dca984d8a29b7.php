<?php foreach($attributes->onlyProps([
    'actions' => [],
    'details' => [],
    'title',
    'url',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions' => [],
    'details' => [],
    'title',
    'url',
]); ?>
<?php foreach (array_filter(([
    'actions' => [],
    'details' => [],
    'title',
    'url',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li <?php echo e($attributes->class(['filament-global-search-result'])); ?>>
    <div class="relative block px-6 py-4 focus:bg-gray-500/5 hover:bg-gray-500/5 focus:ring-1 focus:ring-gray-300">
        <a href="<?php echo e($url); ?>" class="">
            <p class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'font-medium',
                'dark:text-gray-200' => config('filament.dark_mode'),
            ]) ?>">
                <?php echo e($title); ?>

            </p>

            <p class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'text-sm space-x-2 rtl:space-x-reverse font-medium text-gray-500',
                'dark:text-gray-400' => config('filament.dark_mode'),
            ]) ?>">
                <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span>
                        <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                            'font-medium text-gray-700',
                            'dark:text-gray-200' => config('filament.dark_mode'),
                        ]) ?>">
                            <?php echo e($label); ?>:
                        </span>

                        <span>
                            <?php echo e($value); ?>

                        </span>
                    </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        </a>

        <?php if($actions): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.global-search.actions.index','data' => ['actions' => $actions]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::global-search.actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($actions)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>
</li>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/filament/resources/views/components/global-search/result.blade.php ENDPATH**/ ?>