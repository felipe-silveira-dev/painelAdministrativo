<?php
    $state = $getState();
?>

<div
    <?php echo e($attributes
            ->merge($getExtraAttributes())
            ->class(['filament-tables-color-column relative ml-4 flex h-6 w-6 rounded-md'])); ?>

    <?php if($state): ?>
        style="background-color: <?php echo e($state); ?>"
        <?php if($isCopyable()): ?>
            x-on:click="
                window.navigator.clipboard.writeText(<?php echo \Illuminate\Support\Js::from($state)->toHtml() ?>)
                $tooltip(<?php echo \Illuminate\Support\Js::from($getCopyMessage())->toHtml() ?>, { timeout: <?php echo \Illuminate\Support\Js::from($getCopyMessageDuration())->toHtml() ?> })
            "
        <?php endif; ?>
    <?php endif; ?>
>
</div>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/tables/resources/views/columns/color-column.blade.php ENDPATH**/ ?>