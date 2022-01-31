@extends('layouts.app')

@section('main')
<main class="createpgage">

    <!-- [ section: user info ] -->
    <section class = 'create'>

        <!-- user photo -->
        <div class="user-ava"><img src="/img/users/user1.png" alt="ava"></div>

        <!-- user name -->
        <p class="user-name">{{ Auth::user()->name }}</p>

        <!-- user controls -->
        <button class = 'user-logout'>logout</button>

    </section>

    <!-- [ section: user things ] -->
    <section class = 'things'>
        <h2>Create new thing</h2>
        <form class = 'custom mt-20' action="/create" method = 'POST'>
            @csrf

            <input type="text"   name = 'name'          placeholder="thing name ..." />
            <input type="text"   name = 'description'   placeholder="description ..." />
            <input type="text"   name = 'place'         placeholder="place ..." />
            <input type="number" name = 'wrnt'          placeholder="warranty ..." />

            <button>+ create</button>
        </form>
    </section>

</main>
@endsection
