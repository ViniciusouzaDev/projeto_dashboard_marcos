<div class="container mt-5 pt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold">Dashboard</h1>
            <h5 class="text-muted">Seja bem-vindo, <strong>{{ auth()->user()->name }}</strong> 👋</h5>
        </div>
    </div>

    <!-- Cards de resumo -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted">Usuários</h6>
                    <h3 class="fw-bold">245</h3>
                    <p class="text-success small">+12% este mês</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted">Novos Pedidos</h6>
                    <h3 class="fw-bold">78</h3>
                    <p class="text-success small">+8% em relação à semana passada</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted">Faturamento</h6>
                    <h3 class="fw-bold">R$ 12.500</h3>
                    <p class="text-danger small">-5% no comparativo mensal</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted">Alertas</h6>
                    <h3 class="fw-bold">3</h3>
                    <p class="text-warning small">Atenção necessária</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Gráfico e atalhos -->
    <div class="row g-4 mt-4">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title">Resumo do desempenho</h5>
                    <img src="{{ asset('images/dashboard-2.png') }}" alt="Logo" height="250" width="500">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title">Acessos rápidos</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#" class="text-decoration-none">📋 Ver Relatórios</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">🛒 Gerenciar Pedidos</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">👥 Usuários Ativos</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">⚙️ Configurações</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
