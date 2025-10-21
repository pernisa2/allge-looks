<?php include 'includes/header.php'; ?>

<section class="form-card">
  <h2>Cadastre-se para promoções e sorteios 🎁</h2>
  <p class="muted">Receba cupons, novidades e participe de sorteios exclusivos da <strong>Allge Looks</strong>.</p>

  <form id="promo-form" novalidate>
    <div class="grid2">
      <label>
        Nome completo*
        <input type="text" name="name" required minlength="3" placeholder="Seu nome">
        <small class="error"></small>
      </label>

      <label>
        E-mail*
        <input type="email" name="email" required placeholder="seu@email.com">
        <small class="error"></small>
      </label>
    </div>

    <div class="grid2">
      <label>
        WhatsApp (opcional)
        <input type="tel" name="whatsapp" placeholder="(xx) xxxxx-xxxx">
      </label>

      <label>
        Gênero (opcional)
        <select name="gender">
          <option value="">Prefiro não informar</option>
          <option value="Feminino">Feminino</option>
          <option value="Masculino">Masculino</option>
          <option value="Outros">Outros</option>
        </select>
      </label>
    </div>

    <fieldset class="checkgroup">
      <legend>Interesses</legend>
      <label><input type="checkbox" name="interest[]" value="Feminino"> Feminino</label>
      <label><input type="checkbox" name="interest[]" value="Masculino"> Masculino</label>
      <label><input type="checkbox" name="interest[]" value="Acessórios"> Acessórios</label>
    </fieldset>

    <label class="consent">
      <input type="checkbox" name="consent" required>
      Concordo em receber comunicações e aceito a política de privacidade.
    </label>
    <small class="error" data-for="consent"></small>

    <button class="button primary" type="submit">Quero participar</button>
    <p id="form-status" class="muted" role="status" aria-live="polite"></p>
  </form>
</section>

<?php include 'includes/footer.php'; ?>
