@extends('layouts.app')

@section('main')
<main class="homepage">

    <!-- [ section: user info ] -->
    <section class = 'user'>

        <!-- user photo -->
        <div class="user-ava"><img src="/img/users/user1.png" alt="ava"></div>

        <!-- user name -->
        <p class="user-name">{{ Auth::user()->name }}</p>

        <!-- user controls -->
        <a href = '/logout' class = 'user-logout'>logout</a>

    </section>

    <!-- [ section: user things ] -->
    <section class = 'things'>
        <h2>My things</h2>
        <ul class = 'things-list'>
            <li class="thing add-thing"><a href="/create">+ new thing</a></li>
            @foreach($things as $thing)
                <li class="thing"><a href="/thing/{{ $thing->thing_id }}">thing</a></li>
            @endforeach
        </ul>
    </section>

</main>
@endsection
