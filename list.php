<?php include 'includes/header.php'; ?>

<section class="container">
  <h2>Coleção Allge Looks</h2>

  <div id="filters" class="filters">
    <button data-cat="all" class="chip active">Todos</button>
    <button data-cat="camisas" class="chip">Camisas</button>
    <button data-cat="calcas" class="chip">Calças</button>
    <button data-cat="acessorios" class="chip">Acessórios</button>
    <button data-cat="calcados" class="chip">Calçados</button>
    <button data-cat="moletons" class="chip">Moletons</button>
  </div>

  <div id="grid" class="product-grid" aria-live="polite"></div>
</section>

<script>
(async () => {
  const grid  = document.getElementById('grid');
  const chips = document.querySelectorAll('.chip');
  const urlCat = new URLSearchParams(location.search).get('cat') || 'all';

  // ativa chip inicial pela URL
  chips.forEach(c => c.classList.toggle('active', c.dataset.cat === urlCat));

  async function render(cat='all'){
    try{
      const res = await fetch('api/products.php');
      const items = await res.json();
      const filtered = (cat==='all') ? items : items.filter(p => p.category === cat);

      grid.innerHTML = filtered.map(p => `
        <article class="card product" data-cat="${p.category}">
          <div class="thumb"><img src="${p.image}" alt="${p.name}"></div>
          <div class="info">
            <h3>${p.name}</h3>
            <p class="muted">${p.description}</p>
            <div class="row">
              <strong>R$ ${Number(p.price).toFixed(2).replace('.', ',')}</strong>
              <a class="button small" href="details.php?id=${p.id}">Ver detalhes</a>
            </div>
          </div>
        </article>
      `).join('') || '<p class="muted">Nenhum produto nessa categoria.</p>';

      // marca chip ativo
      chips.forEach(c => c.classList.toggle('active', c.dataset.cat === cat));
    }catch(e){
      grid.innerHTML = '<p class="muted">Erro ao carregar os produtos.</p>';
    }
  }

  // eventos dos filtros
  chips.forEach(c => c.addEventListener('click', () => {
    const cat = c.dataset.cat;
    history.replaceState(null, '', `?cat=${cat}`);
    render(cat);
  }));

  // primeiro render
  render(urlCat);
})();
</script>

<?php include 'includes/footer.php'; ?>
