@props(['icon', 'width'])

@php
    $icons = [
        'fruit'       => 'carbon-fruit-bowl',
        'clean'       => 'gmdi-cleaning-services-o',
        'freeze'      => 'phosphor-ice-cream-bold',
        'dot'         => 'phosphor-dot-outline-fill',
        'user'        => 'heroicon-s-user',
        'bell'        => 'heroicon-s-bell',
        'eye-open'    => 'heroicon-s-eye',
        'eye-close'   => 'heroicon-s-eye-slash',
        'cart'        => 'bx-cart',
        'calc'        => 'heroicon-s-calculator',
        'calendar'    => 'heroicon-s-calendar',
        'qr-code'     => 'heroicon-o-qr-code',
        'plus'        => 'heroicon-o-plus',
        'lock-closed' => 'heroicon-s-lock-closed',
        'lock-open'   => 'heroicon-s-lock-open',
        'at'          => 'heroicon-c-at-symbol',
        'money'       => 'bx-money',
        'trash'       => 'heroicon-s-trash',
        'pencil'      => 'heroicon-s-pencil',
        'camera'      => 'heroicon-s-camera'
    ];
@endphp

@if(array_key_exists($icon, $icons))
    @svg($icons[$icon], [
        'width' => isset($width) ? $width : '20px'
    ])
@else
    Ícone não encontrado.
@endif