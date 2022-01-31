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
        <p class = 'thing-name'>{{ $thing->name }}</p>
        <p class = 'thing-description'>{{ $thing->description }}</p>
        <p class = 'thing-place'>place: {{ $thing->place }}</p>

        <a href="/user-to-give/{{$thing->thing_id}}" class = 'give'>give away</a>
    </section>

</main>
@endsection
