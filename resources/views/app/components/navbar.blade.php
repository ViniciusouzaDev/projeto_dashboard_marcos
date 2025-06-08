<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            Residência dos Lagos
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            {{-- Itens da Esquerda --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                {{-- Produtos --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="produtosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produtos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="produtosDropdown">
                        <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="#">Visualizar</a></li>
                    </ul>
                </li>

                {{-- Pedidos --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pedidosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pedidos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="pedidosDropdown">
                        <li><a class="dropdown-item" href="#">Novo Pedido</a></li>
                        <li><a class="dropdown-item" href="#">Lista de Pedidos</a></li>
                    </ul>
                </li>

                {{-- Compras Coletivas --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Compras Coletivas</a>
                </li>

                {{-- Pagamentos --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Pagamentos</a>
                </li>

                {{-- Moradores --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Moradores</a>
                </li>

            </ul>

            {{-- Itens da Direita (Perfil) --}}
           <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('user.edit') }}">Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>