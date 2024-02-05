<div class="alert-area">
    @foreach (['success', 'warning', 'danger'] as $type)
        <x-alert :type="$type" class="text-sm leading-5">
            @if ($type === 'warning')
                <div class="bg-warning text-dark p-3 rounded">
                    <i class="fa fa-exclamation-triangle"></i>
                    {{ $component->message() }}
                </div>
            @elseif ($type === 'danger')
                <div class="bg-danger text-white p-3 rounded">
                    <i class="fa fa-times"></i>
                    {{ $component->message() }}
                </div>
            @else
                <div class="bg-success text-white p-3 rounded">
                    <i class="fa fa-check"></i>
                    {{ $component->message() }}
                </div>
            @endif
        </x-alert>
    @endforeach
</div>

<!-- Alerts Javasctipt -->
<script src="/js/components/alert.js"></script>