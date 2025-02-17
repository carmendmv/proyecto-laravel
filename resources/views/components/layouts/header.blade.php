<!--diseño responsive-->
<header class=" hidden md:flex h-15v bg-header flex flex-row justify-between items-center p-3">
    <img class="max-h-full bg-white" src="{{asset('img/logo.png')}}" alt="logo">
    
    <h1 class="text-4xl text-white">GESTIÓN CENTRO</h1>
    @guest
    <div>
        <form action="{{route('login')}}" method="post">
            <a href="login" class="btn btn-primary btn-sm">Login</a>
            <!--<a href="{{route("login")}}" class="btn btn-primary btn-sm">Login</a> ES LO MISMO CUANDO SE UTILIZA EL METODO GET--->
            <a href="register" class="btn btn-sm">Register</a>   
        </form>
    </div>
    @endguest
    @auth
    {{auth()->user()->name}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-sm">
            {{ __('Log Out') }}
        </button>
    </form>
    @endauth
</header>