<div
    x-data="{ error: undefined }"
    <?php echo e($attributes->merge($getExtraAttributes())->class([
        'filament-tables-checkbox-column',
    ])); ?>

>
    <input
        <?php if($getState()): echo 'checked'; endif; ?>
        <?php echo $isDisabled() ? 'disabled' : null; ?>

        type="checkbox"
        x-on:change="
            response = await $wire.setColumnValue(<?php echo \Illuminate\Support\Js::from($getName())->toHtml() ?>, <?php echo \Illuminate\Support\Js::from($recordKey)->toHtml() ?>, $event.target.checked)
            error = response?.error ?? undefined
        "
        x-tooltip="error"
        <?php echo e($attributes
                ->merge($getExtraInputAttributeBag()->getAttributes())
                ->class([
                    'ml-4 text-primary-600 transition duration-75 rounded shadow-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-500 disabled:opacity-70',
                    'dark:bg-gray-700 dark:checked:bg-primary-500' => config('forms.dark_mode'),
                ])); ?>

        x-bind:class="{
            'border-gray-300': ! error,
            'dark:border-gray-600': (! error) && <?php echo \Illuminate\Support\Js::from(config('forms.dark_mode'))->toHtml() ?>,
            'border-danger-600 ring-1 ring-inset ring-danger-600': error,
        }"
    />
</div>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/tables/resources/views/columns/checkbox-column.blade.php ENDPATH**/ ?>