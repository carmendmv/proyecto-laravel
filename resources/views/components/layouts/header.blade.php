<header class="h-15v bg-header flex flex-row justify-between items-center p-3">
    <img class="max-h-full bg-white" src="{{asset('img/logo.png')}}" alt="logo">
    
    <h1 class="text-4xl text-white">GESTIÓN CENTRO</h1>
    @guest
    <div>
        <form action="">
            <button class="btn btn-primary btn-sm">Login</button>
            <button class="btn btn-sm">Register</button>   
        </form>
    </div>
    @endguest
    @auth
        {{ Auth::user()->name }}
        <button class="btn btn-sm">Logout</button> 
    @endauth
</header>