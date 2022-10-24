<div
    x-data="{ error: undefined }"
    <?php echo e($attributes->merge($getExtraAttributes())->class([
        'filament-tables-text-input-column',
    ])); ?>

>
    <input
        value="<?php echo e($getState()); ?>"
        type="<?php echo e($getType()); ?>"
        <?php echo $isDisabled() ? 'disabled' : null; ?>

        <?php echo ($inputMode = $getInputMode()) ? "inputmode=\"{$inputMode}\"" : null; ?>

        <?php echo ($placeholder = $getPlaceholder()) ? "placeholder=\"{$placeholder}\"" : null; ?>

        <?php echo ($interval = $getStep()) ? "step=\"{$interval}\"" : null; ?>

        x-on:change="
            response = await $wire.setColumnValue(<?php echo \Illuminate\Support\Js::from($getName())->toHtml() ?>, <?php echo \Illuminate\Support\Js::from($recordKey)->toHtml() ?>, $event.target.value)
            error = response?.error ?? undefined
        "
        x-tooltip="error"
        <?php echo e($attributes->merge($getExtraInputAttributes())->merge($getExtraAttributes())->class([
            'ml-0.5 text-gray-900 block transition duration-75 rounded-lg shadow-sm focus:ring-primary-500 focus:ring-1 focus:ring-inset focus:border-primary-500 disabled:opacity-70',
            'dark:bg-gray-700 dark:text-white dark:focus:border-primary-500' => config('forms.dark_mode'),
        ])); ?>

        x-bind:class="{
            'border-gray-300': ! error,
            'dark:border-gray-600': (! error) && <?php echo \Illuminate\Support\Js::from(config('forms.dark_mode'))->toHtml() ?>,
            'border-danger-600 ring-1 ring-inset ring-danger-600': error,
        }"
    />
</div>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/tables/resources/views/columns/text-input-column.blade.php ENDPATH**/ ?>