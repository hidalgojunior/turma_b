<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Início | Etec Antonio Devisate</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <style>
                body {
                        background: #f8f9fa;
                }
                .main-content {
                        margin-top: 60px;
                }
                .card-menu {
                        transition: transform 0.2s, box-shadow 0.2s;
                }
                .card-menu:hover {
                        transform: translateY(-6px) scale(1.03);
                        box-shadow: 0 8px 32px rgba(0,0,0,0.12);
                }
        </style>
</head>
<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">Etec Antonio Devisate</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cad_alunos.php">Cadastro de Alunos</a>
                        </li>
                        <!-- Outros menus podem ser adicionados futuramente -->
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container main-content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bold">Bem-vindo ao Sistema de Cadastro</h1>
                        <p class="lead">Gerencie os cadastros de alunos de forma simples, rápida e segura.</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <a href="cad_alunos.php" class="text-decoration-none">
                                <div class="card card-menu h-100 shadow-sm">
                                    <div class="card-body text-center">
                                        <span class="fs-1 text-primary"><i class="bi bi-person-plus"></i></span>
                                        <h5 class="card-title mt-3">Cadastro de Alunos</h5>
                                        <p class="card-text">Cadastre novos alunos e mantenha os dados organizados.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Outros cards de menu podem ser adicionados aqui -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS + Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>