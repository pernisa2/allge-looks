<!-- includes/header.php (layout restaurado: categorias à esquerda, páginas à direita) -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Allge Looks — Loja de Roupas</title>

  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

  <!-- CSS principal -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- JS principal (seu) -->
  <script defer src="assets/js/main.js"></script>
</head>
<body class="light">

  <!-- TOP STRIP / AVISOS -->
  <div class="top-strip">
    <div class="container">
      <div class="strip-item">Inverno até 50% OFF</div>
      <div class="strip-item hide-mobile">Até 12x sem juros</div>
      <div class="strip-item hide-mobile">Frete grátis em pedidos selecionados</div>
    </div>
  </div>

  <!-- HEADER: LOGO + BUSCA + AÇÕES -->
  <header class="header-lg">
    <div class="container header-row">
      <h1 class="logo">
        <a href="index.php">Allge <span>Looks</span></a>
      </h1>

      <form class="searchbar" action="list.php" method="get">
        <input name="q" type="search" placeholder="O que você procura?" />
        <button class="btn-search" aria-label="Buscar">🔍</button>
      </form>

      <div class="header-actions">
        <a href="form.php" class="action">Ajuda</a>
        <a href="#" class="action">Minha conta</a>
        <a href="#" class="action">🛒</a>
      </div>
    </div>
  </header>

  <!-- NAV: CATEGORIAS + PÁGINAS NA MESMA BARRA -->
  <nav class="top-nav">
    <div class="container nav-row">
      <!-- Categorias (esquerda) -->
      <ul class="cats">
        <li><a href="list.php?cat=camisas">Camisas</a></li>
        <li><a href="list.php?cat=calcas">Calças</a></li>
        <li><a href="list.php?cat=acessorios">Acessórios</a></li>
        <li><a href="list.php?cat=calcados">Calçados</a></li>
        <li><a href="list.php?cat=moletons">Moletons</a></li>
      </ul>

      <!-- Páginas (direita) -->
      <ul class="pages">
        <li><a href="index.php">Home</a></li>
        <li><a href="list.php">Coleção</a></li>
        <li><a href="form.php">Cadastro</a></li>
      </ul>
    </div>
  </nav>

  <!-- CONTEÚDO PRINCIPAL ABRE AQUI -->
  <main class="site-main container">


