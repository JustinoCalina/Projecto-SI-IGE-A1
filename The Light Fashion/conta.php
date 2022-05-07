<?php
include('verificar_login.php');
?>
<html>
    <head>
        <title>The Light Fashion | Perfil</title>
        <meta charset="utf-8">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">The Light Fashion</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="categoria/imoveis.html">Imoveis</a></li>
                      <li><a class="dropdown-item" href="categoria/vestuarios.html">Vestuarios</a></li>
                      <li><a class="dropdown-item" href="categoria/acessorios.html">Acessorios</a></li>
                      <li><a class="dropdown-item" href="categoria/calcados.html">Calçados</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Prestações de Serviços</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="voucher.php">Voucher</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="compras.php">Minhas compras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="conta.php">Conta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">Terminar sessão</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Serviços ou Negócios" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Procurar</button>
                </form>
              </div>
            </div>
          </nav>

          <!--========== CONTENTS ==========-->
        <main>
            <section>

                <div class="card1">
                    <div class="card-header">
                      Perfil
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Dados da Conta</h5>
                      <form action="atualizar.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="foto" id="foto" style="visibility: hidden;">
                      <div class="mb-3">
                        <label for="nome" class="form-label">Nome do Cliente</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $_SESSION['nomedousuario'];?>" disabled>
                      </div>
                      <label for="numero" class="form-label">Número de telefone</label>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+244</span>
                        <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $_SESSION['numero'];?>" aria-label="numero" aria-describedby="basic-addon1" minlength="9" maxlength="9" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Morada</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['moradadousuario'];?>" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="genero" class="form-label">Genero</label>
                        <select class="form-select" aria-label="Default select example" id="genero" name="genero" value="<?php echo $_SESSION['genero'];?>" required>
                            <option value="Masculino" selected>Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                      </div>
                       <input type="submit" value="Apagar a Conta" id="apagar" name="apagar" class="btn btn-primary">
                      </form>
                    </div>
                  </div>
                  <br>
            </section>
        </main>

          <footer>
            <nav class="bg-dark">
                <center>
                <br>
                <p style="color: #fff">&copy; The Light Fashion 2022 | Todos os Direitos Reservados</p>
                <a href="#" style="color: #fff;font-size: 12;">Termos e Politicas de Privacidade</a>
                </center>
              </nav>
          </footer>
    </body>
</html>