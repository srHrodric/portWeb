# Portfólio — Rodrigo Santos

Site estático responsivo em português e inglês, preparado para Firebase Hosting.

## Arquivos
- `index.html` / `projects.html`: versão em português
- `index-en.html` / `projects-en.html`: versão em inglês
- `styles.css`: estilos compartilhados
- `script.js`: detecção de idioma, seletor manual e menu mobile

## Idioma
Na primeira visita, o site verifica o idioma preferido do navegador:
- Navegador em inglês: abre a versão inglesa.
- Outros idiomas: abre português.
- O visitante pode trocar pelo seletor EN/PT no menu. A escolha manual fica salva no navegador.

A detecção usa `navigator.language` / `navigator.languages`, não geolocalização nem IP.

## Personalização antes de publicar
Os dados de contato já estão preenchidos nos arquivos HTML: e-mail, WhatsApp e LinkedIn.

Revise as descrições de Alli Solutions e Serlares. Elas estão marcadas como conteúdo a completar para não inventar atribuições ou resultados.

## Firebase Hosting
Copie os arquivos desta pasta para a pasta configurada como `public` no seu `firebase.json`. Preserve `firebase.json` e `.firebaserc`. Depois execute `firebase deploy`.

## Currículos
A pasta `curriculos/` é destinada aos dois arquivos PDF:
- `curriculo-pt.pdf`: currículo em português.
- `curriculo-en.pdf`: currículo em inglês.

Coloque os PDFs nessa pasta mantendo exatamente esses nomes. O botão **Baixar currículo / Download CV** seleciona o arquivo conforme o idioma preferido configurado no navegador (inglês para navegadores em inglês; português para os demais). Essa seleção é independente do idioma escolhido manualmente para visualizar o site.
