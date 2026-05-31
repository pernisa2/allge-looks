<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/JSON-000000?style=for-the-badge&logo=json&logoColor=white" alt="JSON" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
</p>

> 🚀 **E-commerce de Moda Back-End:** Uma aplicação dinâmica desenvolvida em PHP estruturado para simular um catálogo virtual de roupas masculinas e femininas com captura automatizada de leads.

---

## 📝 Sobre o Projeto

O **Allge Looks** é um projeto de desenvolvimento que une conceitos modernos de design de interface com uma arquitetura back-end funcional em PHP. O site funciona como uma vitrine virtual interativa de moda contemporânea, onde a listagem de produtos é gerada dinamicamente e os dados cadastrais dos usuários são manipulados e armazenados localmente em arquivos de dados estruturados.

## 🚀 Engenharia e Arquitetura Back-End

Diferente de um site estático comum, este projeto aplica boas práticas de desenvolvimento de software:
* **Modularização de Componentes:** Uso de diretivas `include` (`header.php` e `footer.php`) para reaproveitamento de código e facilidade de manutenção.
* **Manipulação de Arquivos JSON:** Simulação de persistência de dados. O sistema consome dados estruturados para renderizar os produtos na tela e manipula fluxos de entrada para gravação de novos cadastros.
* **Geração Dinâmica de Conteúdo:** Páginas de listagem processadas do lado do servidor antes do envio ao navegador.

## 📂 Estrutura de Arquivos

* `index.php`: Página inicial com banners de destaque, chamadas para ação (CTA) e depoimentos.
* `list.php` & `details.php`: Interfaces dinâmicas para listagem geral de produtos e visualização detalhada de peças específicas.
* `form.php`: Formulário de cadastro de clientes para recebimento de brindes e ofertas.
* `api/`: Camada de controle contendo scripts isolados como `subscribe.php` (validação e persistência de formulários) e `build_products.php`.
* `includes/`: Fragmentos estruturais reutilizáveis da interface.

## 🕹️ Como Rodar o Projeto Localmente (Ambiente PHP)

Por se tratar de uma aplicação que roda do lado do servidor (Back-End), você precisará de um ambiente local configurado:

1. Baixe e instale o gerenciador de servidores locais **XAMPP**.
2. Mova ou extraia a pasta do projeto `allge-looks` para dentro do diretório raiz do servidor (pasta `htdocs` do seu XAMPP).
3. Abra o **XAMPP Control Panel**.
4. **⚠️ Passo Obrigatório:** No painel, clique no botão **"Start"** ao lado de **Apache** e **MySQL**. Certifique-se de que ambos ficaram com o **fundo verde**. 
   *(Nota: Se você fechar o painel ou interromper esses serviços, o ambiente local deixará de funcionar imediatamente).*
5. Abra o seu navegador (certifique-se de que extensões de VPN estejam desativadas) e acesse o link oficial do projeto:
   👉 **[http://localhost/allge-looks/](http://localhost/allge-looks/)**

---

## 🧑‍💻 Desenvolvedor

* **GitHub:** [@pernisa2](https://github.com/pernisa2)

### 📐 Demonstração Visual

<p align="center">
* <img width="1600" height="562" alt="WhatsApp Image 2026-05-31 at 19 45 12" src="https://github.com/user-attachments/assets/16c8f6f6-0cce-44db-b63d-741acc2d90ef" />
</p>


