
<!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo URL_BASE . "assets/img/entidades/{$_SESSION[NOME_SESSION_LOGIN]["name"]}.png"; ?>" alt="person" class="img-fluid rounded-circle">
              <!-- EXIBE O NOME DO USUÁRIO LOGADO NO SISTEMA -->
              <h2 class="h5"><?php echo $_SESSION[NOME_SESSION_LOGIN]["name"]; ?></h2><span><?php echo $_SESSION[NOME_SESSION_LOGIN]["function"]; ?></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="/" class="brand-small text-center"> <strong>M</strong><strong class="text-primary">V</strong></a></div>
        </div>
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="<?php echo URL_BASE ?>"> <i class="fas fa-home"></i>Inicio</a></li>
            <li><a href="#aluno" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-user-graduate"></i>Aluno </a>
              <ul id="aluno" class="collapse list-unstyled ">
                <li><a href="<?php echo URL_BASE . "aluno/cadastrar/1";?>">Matrícula</a></li>
                <li><a href="#">Consulta</a></li>
                <li><a href="#">Frequência</a></li>
                <li><a href="#">Documetos</a></li>
              </ul>
            </li>
            <li><a href="#funcionario" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-user-tie"></i>Funcionário</a>
              <ul id="funcionario" class="collapse list-unstyled ">
                <li><a href="<?php echo URL_BASE . "funcionario/cadastrar/1";?>">Cadastro</a></li>
                <li><a href="<?php echo URL_BASE . "funcionario/listar/ativos";?>">Consulta</a></li>
                <li><a href="#">Ponto Mensal</a></li>
                <li><a href="#">Documetos</a></li>
              </ul>
            </li>
            <li><a href="#disciplina" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-chalkboard"></i>Disciplinas</a>
              <ul id="disciplina" class="collapse list-unstyled ">
                <li><a href="<?php echo URL_BASE . "disciplina/cadastrar/1";?>">Cadastro</a></li>
                <li><a href="<?php echo URL_BASE . "disciplina/listar";?>">Consulta</a></li>
                <li><a href="#">Documetos</a></li>
              </ul>
            </li>
            <li><a href="#escolas" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-school"></i>Escolas</a>
              <ul id="escolas" class="collapse list-unstyled ">
                  <li><a href="<?php echo URL_BASE . "escola/cadastrar/1";?>">Cadastro</a></li>
                  <li><a href="<?php echo URL_BASE . "escola/listar/ativos";?>">Consulta</a></li>
                <li><a href="#">Documetos</a></li>
              </ul>
            </li>
            <li><a href="#turma" aria-expanded="false" data-toggle="collapse"><i class="fas fa-chalkboard-teacher"></i>Turma</a>
              <ul id="turma" class="collapse list-unstyled ">
              <li><a href="<?php echo URL_BASE . "turma/cadastrar/1";?>">Cadastro</a></li>
                <li><a href="#">Consulta</a></li>
                <li><a href="#">Documetos</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>