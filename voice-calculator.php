<?php
header("Permissions-Policy: microphone=*");
echo "<!-- PHP funziona: " . phpversion() . " -->";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Voice Calculator – How to Use</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background: #020617;
      color: #e5e7eb;
      margin: 0;
      padding: 0;
    }
    .page {
      max-width: 960px;
      margin: 0 auto;
      padding: 24px 16px 40px;
    }
    h1, h2 {
      color: #f9fafb;
    }
    h1 {
      font-size: 1.8rem;
      margin-bottom: 0.5rem;
    }
    h2 {
      font-size: 1.2rem;
      margin-top: 1.8rem;
      margin-bottom: 0.4rem;
    }
    p {
      line-height: 1.6;
      margin: 0.4rem 0;
    }
    .lang-blocks {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 16px;
      margin-top: 16px;
    }
    .card {
      background: radial-gradient(circle at top, #111827 0%, #020617 60%);
      border-radius: 14px;
      padding: 16px 18px;
      border: 1px solid rgba(148, 163, 184, 0.35);
      box-shadow: 0 12px 25px rgba(15, 23, 42, 0.8);
    }
    ul {
      padding-left: 1.2rem;
      margin: 0.4rem 0 0.8rem;
    }
    li {
      margin: 0.25rem 0;
    }
    .badge {
      display: inline-block;
      padding: 2px 8px;
      border-radius: 999px;
      font-size: 0.7rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      background: rgba(37, 99, 235, 0.12);
      color: #bfdbfe;
      margin-bottom: 4px;
    }
    .screenshot {
      margin-top: 18px;
      text-align: center;
    }
    .screenshot img {
      max-width: 100%;
      border-radius: 12px;
      border: 1px solid rgba(148, 163, 184, 0.35);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.7);
    }
    .screenshot small {
      display: block;
      margin-top: 6px;
      color: #9ca3af;
      font-size: 0.8rem;
    }
  </style>
</head>
<body>
  <div class="page">
    <h1 id="page-title">Voice Calculator – Guide</h1>
    <p id="page-intro">
      This page is used by the <strong>Voice Calculator</strong> Chrome extension to request microphone
      access safely. Follow the steps below to enable and use the voice commands.
    </p>

    <div class="lang-blocks">
      <!-- ENGLISH BLOCK -->
      <div class="card" id="block-en">
        <div class="badge">English</div>
        <h2>How to use the extension</h2>
        <p><strong>1. Open this page</strong><br>
           When you click the extension icon, your browser will automatically open this page:
           <code>https://www.onlinegratis.net/voice-calculator.html</code>.
        </p>
        <p><strong>2. Allow microphone access</strong></p>
        <ul>
          <li>Look at the small popup at the top asking to use your microphone.</li>
          <li>Click <strong>“Allow while using this site”</strong> (or similar option).</li>
        </ul>

        <p><strong>3. Re-open the extension popup</strong></p>
        <ul>
          <li>Click again on the <strong>Voice Calculator</strong> icon in the Chrome toolbar.</li>
          <li>The calculator window will appear with all the buttons and a microphone icon.</li>
        </ul>

        <p><strong>4. Choose language &amp; click the mic</strong></p>
        <ul>
          <li>Select your language (IT / EN / ES / FR) from the small dropdown.</li>
          <li>Click on the <strong>🎤 microphone icon</strong> in the popup.</li>
          <li>Wait until you see the message <em>“Listening…”</em>.</li>
        </ul>

        <p><strong>5. Speak your operation</strong></p>
        <ul>
          <li>Say an operation, for example:
            <ul>
              <li><code>seven times eight</code></li>
              <li><code>five plus three</code></li>
              <li><code>four hundred thousand times four hundred thousand</code></li>
            </ul>
          </li>
          <li>The recognized text will appear under the title, and the result in the main display.</li>
        </ul>
      </div>

      <!-- ITALIAN BLOCK -->
      <div class="card" id="block-it">
        <div class="badge">Italiano</div>
        <h2>Come usare l'estensione</h2>
        <p><strong>1. Apri questa pagina</strong><br>
           Quando clicchi sull'icona dell'estensione, il browser apre automaticamente
           questa pagina:
           <code>https://www.onlinegratis.net/voice-calculator.html</code>.
        </p>
        <p><strong>2. Consenti l'accesso al microfono</strong></p>
        <ul>
          <li>In alto comparirà una finestra che chiede di usare il microfono.</li>
          <li>Clicca su <strong>“Consenti durante la visita al sito”</strong> (o opzione simile).</li>
        </ul>

        <p><strong>3. Riapri il popup dell'estensione</strong></p>
        <ul>
          <li>Clicca di nuovo sull'icona di <strong>Voice Calculator</strong> nella barra di Chrome.</li>
          <li>Si aprirà la calcolatrice con tutti i tasti e l'icona del microfono.</li>
        </ul>

        <p><strong>4. Scegli la lingua e clicca il microfono</strong></p>
        <ul>
          <li>Seleziona la lingua (IT / EN / ES / FR) dal menu a tendina.</li>
          <li>Clicca sull'icona <strong>🎤 microfono</strong> nel popup.</li>
          <li>Attendi il messaggio <em>“Listening…”</em> / <em>“In ascolto…”</em>.</li>
        </ul>

        <p><strong>5. Pronuncia l'operazione</strong></p>
        <ul>
          <li>Pronuncia un'operazione, ad esempio:
            <ul>
              <li><code>sette per otto</code></li>
              <li><code>cinque più tre</code></li>
              <li><code>quattrocentomila per quattrocentomila</code></li>
            </ul>
          </li>
          <li>Il testo riconosciuto apparirà sotto il titolo e il risultato nella calcolatrice.</li>
        </ul>
      </div>
    </div>

    <div class="screenshot">
      <img src="voice-calculator-permission.png" alt="Chrome microphone permission dialog">
      <small id="caption">
        Example of the Chrome dialog asking to allow microphone access for this site.
      </small>
    </div>
  </div>

  <script>
    (function () {
      var lang = (navigator.language || navigator.userLanguage || 'en').toLowerCase();
      var isIt = lang.startsWith('it');

      var blockIt = document.getElementById('block-it');
      var blockEn = document.getElementById('block-en');
      var title = document.getElementById('page-title');
      var intro = document.getElementById('page-intro');
      var caption = document.getElementById('caption');

      if (isIt) {
        document.documentElement.lang = 'it';
        if (blockIt) blockIt.style.display = 'block';
        if (blockEn) blockEn.style.display = 'none';
        if (title) title.textContent = 'Voice Calculator – Guida';
        if (intro) {
          intro.innerHTML = 'Questa pagina viene utilizzata dall\'estensione ' +
            '<strong>Voice Calculator</strong> per richiedere in modo sicuro l\'accesso al microfono. ' +
            'Segui i passaggi qui sotto per abilitare e usare i comandi vocali.';
        }
        if (caption) {
          caption.textContent = 'Esempio della finestra di Chrome che chiede di consentire l\'uso del microfono per questo sito.';
        }
      } else {
        document.documentElement.lang = 'en';
        if (blockIt) blockIt.style.display = 'none';
        if (blockEn) blockEn.style.display = 'block';
        // testo inglese già di default
      }
    })();
  </script>
</body>
</html>
