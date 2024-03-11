@props(['icon', 'width'])

@php
    $icons = [
        'cart'        => 'heroicon-s-shopping-cart',
        'money'       => 'carbon-money',
        'fruit'       => 'carbon-fruit-bowl',
        'clean'       => 'carbon-clean',
        'freeze'      => 'carbon-ice-accretion',
        'user'        => 'heroicon-s-user',
        'bell'        => 'heroicon-o-bell',
        'eye-open'    => 'heroicon-s-eye',
        'eye-close'   => 'heroicon-s-eye-slash',
        'calc'        => 'heroicon-s-calculator',
        'calendar'    => 'heroicon-s-calendar',
        'qr-code'     => 'heroicon-o-qr-code',
        'plus'        => 'heroicon-o-plus',
        'lock-closed' => 'heroicon-s-lock-closed',
        'lock-open'   => 'heroicon-s-lock-open',
        'at'          => 'heroicon-c-at-symbol',
        'trash'       => 'heroicon-s-trash',
        'pencil'      => 'heroicon-s-pencil',
        'camera'      => 'heroicon-s-camera',
        'home'        => 'heroicon-s-home',
        'magnify'     => 'heroicon-o-magnifying-glass',
        'info'        => 'carbon-information-filled',
    ];
@endphp

@if(array_key_exists($icon, $icons))
    @svg($icons[$icon], [
        'width' => isset($width) ? $width : '1rem'
    ])
@else
    Ícone não encontrado.
@endif