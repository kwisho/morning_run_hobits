<x-app>
  <x-slot name="nav">
    <nav class="navbar navbar-expand navbar-dark bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><i class="fas fa-running"></i>	ASARUN</a>
        <ul class="navbar-nav ml-auto">

          @auth
          <li class="nav-item">
            <a class="nav-link active" href="#">記録を見る</a>
          </li>
          @endauth

          @guest
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('login')}}">ログイン</a>
          </li>
          @endguest

          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" >
              @csrf
              <a class="nav-link active" href="route('logout')"
              onclick="event.preventDefault();
                          this.closest('form').submit();"
              >ログアウト</a>
            </form>
          </li>

        </ul>
      </div>
    </nav>
  </x-slot>
  <time-component></time-component>
</x-app>
