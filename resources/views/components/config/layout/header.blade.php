@php 
    $user  = \App\Helpers\UserHelper::getUserData();
    $image = \App\Helpers\UserHelper::getUserImage($user->id)
@endphp

<nav class="p-2 d-flex gap-2 align-items-center border-b-[1px] border-light-1 mb-2">
    <div class="d-flex w-100">
        <a class="navbar-brand" href="/home">Mercado Barato</a>
    </div>

    <div class="flex gap-2 align-items-center">

        <div>
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