<div
    aria-labelledby="<?php echo e($getId()); ?>"
    id="<?php echo e($getId()); ?>"
    role="tabpanel"
    tabindex="0"
    x-bind:class="{ 'invisible h-0 overflow-y-hidden': step !== '<?php echo e($getId()); ?>' }"
    x-on:expand-concealing-component.window="
        error = $el.querySelector('[data-validation-error]')

        if (! error) {
            return
        }

        step = <?php echo \Illuminate\Support\Js::from($getId())->toHtml() ?>

        if (document.body.querySelector('[data-validation-error]') !== error) {
            return
        }

        setTimeout(() => $el.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'start' }), 200)
    "
    <?php echo e($attributes->merge($getExtraAttributes())->class(['focus:outline-none filament-forms-wizard-component-step'])); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/vendor/filament/forms/resources/views/components/wizard/step.blade.php ENDPATH**/ ?>