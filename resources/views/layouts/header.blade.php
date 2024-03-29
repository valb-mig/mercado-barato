@php 
    $user  = \App\Helpers\UserHelper::getUserData();
    $image = \App\Helpers\UserHelper::getUserImage($user->id)
@endphp

<nav class="p-2 flex gap-2 items-center border-b-[1px] border-light-1">

    <x-button.action onclick="$('#sidebar').toggle()">
        <i class="fa fa-solid fa-bars"></i>
    </x-button.action>
    
    <div class="flex w-full">
        <a class="navbar-brand" href="/home">Mercado Barato</a>
    </div>

    <div class="flex gap-2 items-center">
        <div class="flex items-center">
            @include('components.config.icon', [
                'icon'  => 'bell',
                'width' => '1em'
            ])
        </div>
        <a href="/user/profile/{{$user->id}}" class="flex items-center text-dark-0 bg-light-1 p-1 rounded no-underline">
            <p class="mr-1 mb-0">{{$user->username}}</p>
            <span class="flex w-[2rem] bg-light-2 p-1 rounded">
                <img src="{{$image->arquivo_base64}}" width="100%" />
            </span>
        </a>

    </div>
</nav>