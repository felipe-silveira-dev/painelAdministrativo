<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament-support::components.actions.group','data' => ['actions' => $getActions(),'darkMode' => config('filament.dark_mode'),'color' => $getColor(),'icon' => $getIcon(),'label' => $getLabel(),'size' => $getSize(),'tooltip' => $getTooltip()]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-support::actions.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getActions()),'dark-mode' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('filament.dark_mode')),'color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getColor()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getIcon()),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getLabel()),'size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getSize()),'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getTooltip())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/resources/views/vendor/filament/pages/actions/group.blade.php ENDPATH**/ ?>