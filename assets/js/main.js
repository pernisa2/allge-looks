// assets/js/main.js
document.addEventListener("DOMContentLoaded", () => {
  // Marcar link ativo no topo
  const current = location.pathname.split("/").pop() || "index.php";
  document.querySelectorAll(".main-nav a").forEach(a => {
    if (a.getAttribute("href") === current) a.classList.add("active");
  });

  // ====== Formulário de promoções (form.php) ======
  const form = document.getElementById("promo-form");
  if (!form) return; // se não estiver na página do formulário, para aqui

  const statusEl = document.getElementById("form-status");

  function setError(input, msg) {
    const small = input.parentElement.querySelector(".error");
    if (small) small.textContent = msg || "";
    input.classList.toggle("invalid", !!msg);
  }

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    // Reset do estado visual da mensagem
    statusEl.textContent = "";
    statusEl.classList.remove("success", "error-text");
    statusEl.classList.add("muted");

    // Campos principais
    const name    = form.name;
    const email   = form.email;
    const consent = form.consent;

    // Limpa erros
    setError(name, "");
    setError(email, "");
    const consentHelp = document.querySelector('[data-for="consent"]');
    if (consentHelp) consentHelp.textContent = "";

    // Validações
    let ok = true;
    if (!name.value.trim() || name.value.trim().length < 3) {
      setError(name, "Informe seu nome (mín. 3 caracteres).");
      ok = false;
    }
    if (!email.validity.valid) {
      setError(email, "Informe um e-mail válido.");
      ok = false;
    }
    if (!consent.checked) {
      if (consentHelp) consentHelp.textContent = "É necessário aceitar para participar.";
      ok = false;
    }
    if (!ok) return;

    // Envio
    const fd = new FormData(form);
    try {
      const res  = await fetch("api/subscribe.php", { method: "POST", body: fd });
      const data = await res.json();

      if (res.ok && data.ok) {
        statusEl.textContent = "✅ Sua resposta foi salva com sucesso!";
        statusEl.classList.remove("muted");
        statusEl.classList.add("success");
        form.reset();
        setTimeout(() => (statusEl.textContent = ""), 4000);
      } else {
        statusEl.textContent = (data && data.error) ? data.error : "Erro ao enviar. Tente novamente.";
        statusEl.classList.remove("muted");
        statusEl.classList.add("error-text");
      }
    } catch (_) {
      statusEl.textContent = "⚠️ Falha de conexão. Verifique se o Apache está ligado.";
      statusEl.classList.remove("muted");
      statusEl.classList.add("error-text");
    }
  });
});


