@php 
    $user  = \App\Helpers\UserHelper::getUserData();
    $image = \App\Helpers\UserHelper::getUserImage($user->id)
@endphp

<nav class="p-2 d-flex gap-2 align-items-center border-b-[1px] border-light-1 mb-2">
    <div class="d-flex w-100">
        <a class="navbar-brand" href="/home">Mercado Barato</a>
    </div>

    <div class="d-flex gap-2 align-items-center">
        <a href="/user/profile/{{$user->id}}" class="text-dark-0 no-underline d-flex align-items-center gap-1 pl-2 bg-light-1 border-1 border-light-2 rounded">
            {{$user->username}}
            <span class="d-flex align-items-center justify-content-center rounded p-1 bg-light-2 text-light-0">
                <img src="{{$image->arquivo_base64}}" width="40px" />
            </span>
        </a>
    </div>
</nav>