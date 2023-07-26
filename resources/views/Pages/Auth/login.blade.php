<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>
    <form class="w-96 m-56 p-4" method="post" action="{{ route('login-auth') }}">
        @method('post')
        @csrf
        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">What is your name?</span>
            </label>
            <input name="username" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
        </div>
        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Your Password</span>
            </label>
            <input name="password" type="password" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
        </div>
        <button class="btn btn-ghost" type="submit">Send</button>
    </form>
</body>
</html>