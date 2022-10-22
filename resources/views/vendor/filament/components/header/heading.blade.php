<h1 {{ $attributes->class(['text-2xl font-bold tracking-tight md:text-3xl filament-header-heading']) }}>
    <div class="flex items-center">
        <div class="mr-2"><img src="/logo.png" alt="Logo" class="h-8 w-auto"></div>
        <div>        {{ $slot }}        </div>
    </div>
</h1>
