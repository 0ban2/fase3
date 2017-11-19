<!-- About Section -->
<div id="about" class="section">
    @if (!Auth::guest())
        <div class="section-title"><i class="icon-user"></i><strong>{{ Auth::user()->name }}</strong>
            <p><a href="{{ url('/logout') }}" class="btn btn-none btn-block btn-sm" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Cerrar Sesion</a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form></p>
        </div>
    @else
        <div class="section-title"><i class="icon-user"></i><a href="{{ url('/login') }}"><strong>Iniciar Sesión</strong></a>
            <p><a href="{{ url('/register') }}">Registrarse</a></span></p>
        </div>
    @endif
 
  
</div>