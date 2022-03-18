<div>
    @livewire('hello-controller')
    @if ($var != null)
        <div class="flex items-center justify-center mt-5">
            <h1 class="text-2xl font-bold text-white">
                {{ $var }}
            </h1>
        </div>
    @endif
</div>
