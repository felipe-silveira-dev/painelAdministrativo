<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="<?php echo e(config('app.name')); ?>">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name')); ?></title>

        <style>[x-cloak] { display: none !important; }</style>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <?php echo \Livewire\Livewire::styles(); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>

        <?php echo $__env->yieldPushContent('scripts'); ?>
    </head>

    <body class="antialiased">
        <?php echo e($slot); ?>


        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notifications')->html();
} elseif ($_instance->childHasBeenRendered('OFpJHcT')) {
    $componentId = $_instance->getRenderedChildComponentId('OFpJHcT');
    $componentTag = $_instance->getRenderedChildComponentTagName('OFpJHcT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OFpJHcT');
} else {
    $response = \Livewire\Livewire::mount('notifications');
    $html = $response->html();
    $_instance->logRenderedChild('OFpJHcT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </body>
</html>
<?php /**PATH /home/felipe/Workspace/painelAdmin/painel-administrativo/.vapor/build/app/resources/views/layouts/app.blade.php ENDPATH**/ ?>