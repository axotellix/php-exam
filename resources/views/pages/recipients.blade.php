@extends('layouts.app')

@section('main')
<main class="thingpage">

    <!-- [ section: user info ] -->
    <section class = 'user'>

        <!-- user photo -->
        <div class="user-ava"><img src="/img/users/user1.png" alt="ava"></div>

        <!-- user name -->
        <p class="user-name">{{ Auth::user()->name }}</p>

        <!-- user controls -->
        <button class = 'user-logout'>logout</button>

    </section>

    <!-- [ section: user things ] -->
    <section class = 'thing-info'>
        @foreach($users as $user)
            <a href = '/give-to-user/{{$user->user_id}}/{{$thing_id}}' class = 'select-user'>
                <p class = ''>> {{ $user->name }}</p>
            </a>
        @endforeach
    </section>

</main>
@endsection
