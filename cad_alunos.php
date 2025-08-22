<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos | Etec Antonio Devisate</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .form-container {
            max-width: 450px;
            margin: 50px auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="mb-4 text-center">Cadastro de Alunos</h2>
        <form action="processa_aluno.php" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required minlength="3" maxlength="50" pattern="[A-Za-zÀ-ÿ ']+">
                <div class="invalid-feedback">Por favor, insira um nome válido (apenas letras, mínimo 3 caracteres).</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">Por favor, insira um email válido.</div>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required minlength="6">
                <div class="invalid-feedback">A senha deve ter pelo menos 6 caracteres.</div>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required pattern="\(\d{2}\) \d{4,5}-\d{4}">
                <div class="invalid-feedback">Formato esperado: (99) 99999-9999</div>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" id="sexo" name="sexo" required>
                    <option value="" selected disabled>Selecione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
                <div class="invalid-feedback">Por favor, selecione o sexo.</div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
    <!-- Bootstrap JS + Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Validação Bootstrap
    (() => {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
    // Máscara telefone
    document.getElementById('telefone').addEventListener('input', function(e) {
      let x = e.target.value.replace(/\D/g, '').slice(0, 11);
      let formatted = '';
      if (x.length > 0) formatted += '(' + x.substring(0,2);
      if (x.length >= 3) formatted += ') ' + x.substring(2, x.length >= 7 ? 7 : x.length);
      if (x.length >= 7) formatted += '-' + x.substring(7,11);
      e.target.value = formatted;
    });
    </script>
</body>
</html>