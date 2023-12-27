<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="text-center facet_sidebar" style="padding: 20px 0 10px 0">
            <a href="{{route('/')}}"><img src="{{asset('logoss.jpg')}}" alt="COMBE" class="img-responsive logo "></a>                
        </div>
        <div class="user-account">
            <img src="{{asset('img/use.jpg')}}" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Bienvenido,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{auth()->user()->name}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="#"><i class="icon-user"></i>Mi perfil</a></li>
                    <li><a href="#"><i class="icon-envelope-open"></i>Mensajes</a></li>
                    <li><a href="#"><i class="icon-settings"></i>Ajustes</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="icon-power"></i> {{ __('Salir') }}</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>               
        </ul>             
        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">                            
                        <li id="cliente-li">
                            <a href="#"  class="has-arrow"><i class="icon-home"></i> <span>PROVEEDORES</span></a>
                            <ul>
                                <li class="active" id="listado-li"><a href="{{route('proveedores.index')}}">Listado de Proveedores</a></li>
                                
                            </ul>
                        </li>
                        <li  id="personal-li">
                            <a href="#Personal" class="has-arrow"><i class="icon-globe"></i> <span>ADMINISTRACION</span></a>
                            <ul>
                                <li class="active" id="listado-rol"><a href="{{route('personas.index')}}">Roles y Permisos</a></li>
                                <li class="active"><a href="{{route('personas.index')}}">Personas</a></li>
                                <li class="active"><a href="{{route('usuarios.index')}}">Usuarios</a></li>
                                <li class="active"><a href="{{route('areas.index')}}">Áreas</a></li>
                                
                            </ul>
                        </li>
                        <li id="programa-li">
                            <a href="#Widgets" class="has-arrow"><i class="icon-puzzle"></i> <span>PROGRAMACIÓN</span></a>
                            <ul>
                                <li class="active"><a href="{{route('categorias.index')}}">Categorías</a></li>
                                <li class="active"><a href="{{route('unidades.index')}}">Unidad Medida</a></li>
                                <li class="active"><a href="{{route('productos.index')}}">Productos</a></li>
                                <li class="active"><a href="{{route('cotizaciones.index')}}">Cotizaciones</a></li>
                                <li class="active"><a href="{{route('requerimientos.index')}}">Requerimientos</a></li>
                                <li class="active"><a href="{{route('ingresoproductos.detalle')}}">Ingreso de Productos</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>               
        </div>          
    </div>
</div>