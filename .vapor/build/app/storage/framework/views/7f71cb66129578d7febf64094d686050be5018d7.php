<div
    aria-labelledby="<?php echo e($getId()); ?>"
    id="<?php echo e($getId()); ?>"
    role="tabpanel"
    tabindex="0"
    x-bind:class="{ 'invisible h-0 p-0 overflow-y-hidden': tab !== '<?php echo e($getId()); ?>', 'p-6': tab === '<?php echo e($getId()); ?>' }"
    x-on:expand-concealing-component.window="
        error = $el.querySelector('[data-validation-error]')

        if (! error) {
            return
        }

        tab = <?php echo \Illuminate\Support\Js::from($getId())->toHtml() ?>

        if (document.body.querySelector('[data-validation-error]') !== error) {
            return
        }

        setTimeout(() => $el.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'start' }), 200)
    "
    <?php echo e($attributes->merge($getExtraAttributes())->class(['filament-forms-tabs-component-tab focus:outline-none'])); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/forms/resources/views/components/tabs/tab.blade.php ENDPATH**/ ?>