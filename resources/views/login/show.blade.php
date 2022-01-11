@extends('base')

@section('content')
    <div class="container-login">
        <form class="login" method="POST">
            <h2>login</h2>
            <label for="">username</label>
            <input type="text" name="email" placeholder="username...">
            <label for="">password</label>
            <input type="text" name="password" placeholder="password...">
            <button>login</button>
        </form>
    </div>

@endsection