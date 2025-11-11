
# Portfólio — Estrutura e Arquitetura

Este repositório contém um pequeno site de portfólio implementado com PHP simples e componentes reutilizáveis. O objetivo deste README é descrever a arquitetura, explicar os arquivos principais, como executar localmente e como personalizar o site.

## Visão geral

- Linguagem principal: PHP (HTML + PHP para templates)
- Estilização: Tailwind CSS via CDN (arquivo incluído em `index.php`)
- Arquitetura: Arquivos PHP simples que incluem componentes (header, hero, projetos). Recursos como imagens ficam em `img/`.

O site é um projeto estático/dinâmico simples (sem framework) pensado para exibir projetos, perfis e links externos.

## Árvore de arquivos

```
/ (raiz)
├─ index.php          # Entrada principal - monta a página com includes
├─ server.php         # Variável HOME_PATH (router simples / placeholder)
├─ README.md
├─ componentes/       # Componentes PHP reutilizáveis
│  ├─ header.php      # Cabeçalho com menu dinâmico
│  ├─ hero.php        # Seção principal com apresentação e links sociais
│  └─ projetos.php    # Lista de projetos (array + render)
├─ img/               # Imagens e ícones (avatar, logos, projetos)
└─ .git/              # Git (não mostrado)
```

## Descrição dos arquivos

- `index.php`
	- Arquivo que monta a página HTML completa.
	- Inclui `componentes/header.php`, `componentes/hero.php` e `componentes/projetos.php`.
	- Carrega Tailwind via CDN: isso facilita estilos rápidos sem build.

- `componentes/header.php`
	- Gera o cabeçalho do site.
	- Tem um array `$itens` com links (Projetos, Linkedin, Github). Para alterar o menu, edite esse array.

- `componentes/hero.php`
	- Seção de apresentação com título, descrição e links sociais (ícones em `/img`).
	- Para mudar textos, edite o HTML/PHP do componente.

- `componentes/projetos.php`
	- Define um array `$projetos` com cada projeto (nome, descrição, finalizado, data, stack, imagem).
	- Faz render dinâmico dos projetos; fácil de adicionar/alterar projetos editando o array.

- `server.php`
	- Contém `$_SERVER['HOME_PATH'] = '~';` — atualmente usado apenas como placeholder/variável global.

- `img/`
	- Contém imagens referenciadas pelo projeto (avatar, logos, imagens de projetos, ícones de check).
	- Atenção: as referências no código usam caminhos iniciados por `/img/...` (raiz do servidor). Ao rodar localmente, certifique-se de servir a raiz do projeto.

## Contrato rápido (inputs/outputs)

- Inputs: arrays PHP nos componentes (`$itens`, `$projetos`) — strings e booleanos. Imagens referenciadas por caminho.
- Outputs: HTML renderizado para navegador; classes Tailwind para estilos.
- Erros comuns: imagem ausente (gera img quebrada), caminhos absolutos `/img` fora do root do servidor.

## Casos de borda / cuidados

- Se imagens não existirem, o layout pode quebrar visualmente.
- As classes Tailwind dependem da CDN; sem internet o CSS não será carregado.
- `<?= ?>` short echo tags são usadas (compatível com PHP moderno). Se houver problemas, verifique a configuração do PHP.

## Como rodar localmente (rápido)

Recomendado: usar o servidor embutido do PHP para testar localmente.

No terminal (a partir da raiz do projeto):

```bash
# inicia servidor embutido em http://localhost:8000
php -S localhost:8000 server.php
```

Depois abra `http://localhost:8000/index.php` ou apenas `http://localhost:8000/` (dependendo do roteamento). Como este projeto usa links com `/img/...`, servir a raiz do projeto garante que `/img` seja resolvido corretamente.

OBS: se preferir, pode usar `php -S localhost:8000` diretamente e abrir `index.php`.

## Como personalizar

- Alterar menu: editar o array `$itens` em `componentes/header.php`.
- Alterar apresentação: editar `componentes/hero.php` (texto, links, imagem do avatar em `img/avatar.svg`).
- Adicionar/editar projetos: editar o array `$projetos` em `componentes/projetos.php` (nome, descrição, finalizado, data, stack, img).
- Trocar estilos: hoje o projeto usa Tailwind via CDN; para customizar mais, adicione classes Tailwind ou inclua seu CSS próprio.
