<?php foreach($attributes->onlyProps([
    'unreadNotificationsCount',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'unreadNotificationsCount',
]); ?>
<?php foreach (array_filter(([
    'unreadNotificationsCount',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'notifications::components.modal.heading','data' => ['class' => 'relative']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notifications::modal.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'relative']); ?>
    <span>
        <?php echo e(__('notifications::database.modal.heading')); ?>

    </span>

    <?php if($unreadNotificationsCount): ?>
        <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'inline-flex absolute items-center justify-center top-0 ml-1 min-w-[1rem] h-4 rounded-full text-xs text-primary-700 bg-primary-500/10',
            'dark:text-primary-500' => config('tables.dark_mode'),
        ]) ?>">
            <?php echo e($unreadNotificationsCount); ?>

        </span>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/notifications/resources/views/components/database/modal/heading.blade.php ENDPATH**/ ?>