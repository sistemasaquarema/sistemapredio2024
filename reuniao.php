
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/geral.css" rel="stylesheet">
        <title>Saquarema - Reunião</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Bruno Menossi">
        <html lang="pt-br">
        <script src='https://8x8.vc/vpaas-magic-cookie-c79b5d7f82e24753828119f005ecb00f/external_api.js' async></script>
        <style>html, body, #jaas-container { height: 100%; }</style>
        <script type="text/javascript">
          window.onload = () => {
            const api = new JitsiMeetExternalAPI("8x8.vc", {
              roomName: "vpaas-magic-cookie-c79b5d7f82e24753828119f005ecb00f/SampleAppLongTimeOutcomesInterruptSeamlessly",
              parentNode: document.querySelector('#jaas-container'),
              lang: 'br',
							// Make sure to include a JWT if you intend to record,
							// make outbound calls or use any other premium features!
							// jwt: "eyJraWQiOiJ2cGFhcy1tYWdpYy1jb29raWUtYzc5YjVkN2Y4MmUyNDc1MzgyODExOWYwMDVlY2IwMGYvNDJmYWY0LVNBTVBMRV9BUFAiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJqaXRzaSIsImlzcyI6ImNoYXQiLCJpYXQiOjE2ODQ3ODk5NjcsImV4cCI6MTY4NDc5NzE2NywibmJmIjoxNjg0Nzg5OTYyLCJzdWIiOiJ2cGFhcy1tYWdpYy1jb29raWUtYzc5YjVkN2Y4MmUyNDc1MzgyODExOWYwMDVlY2IwMGYiLCJjb250ZXh0Ijp7ImZlYXR1cmVzIjp7ImxpdmVzdHJlYW1pbmciOmZhbHNlLCJvdXRib3VuZC1jYWxsIjpmYWxzZSwic2lwLW91dGJvdW5kLWNhbGwiOmZhbHNlLCJ0cmFuc2NyaXB0aW9uIjpmYWxzZSwicmVjb3JkaW5nIjpmYWxzZX0sInVzZXIiOnsiaGlkZGVuLWZyb20tcmVjb3JkZXIiOmZhbHNlLCJtb2RlcmF0b3IiOnRydWUsIm5hbWUiOiJUZXN0IFVzZXIiLCJpZCI6Imdvb2dsZS1vYXV0aDJ8MTEzOTI3NjU3MjA1ODQ0MDU4MzI0IiwiYXZhdGFyIjoiIiwiZW1haWwiOiJ0ZXN0LnVzZXJAY29tcGFueS5jb20ifX0sInJvb20iOiIqIn0.Shm_fC9IveqN5XNANJZbvQ1Pw4tU2Mip30Pk9yiqzPLu-DXpgWUO-UE9DSFTa08RKhlEi6F34EfnWAqj_NZYsnuUnGyB8rsvrZidsQH6bVnorn8XDBKzzXY05_1BYEsYKzHCaul7XLNokUGWlmq5Ki0PKFY3d65q_Q1R0xr39l05vmGBVEenByazacdE8GUcskq7fWbsh9xR1ppcgXzB8XrBLyJOa46TWk5oflGHRX2cUxWgeNW8EvEMIj2gMLkwsDjOPvfiaCAuCm3CGJJxl2a0HE0_dXSDbNjtsL4EqhacvqErDTZ1mHkf8HuRX6uJtGKC2TgGfKrTYba10Csslg"
            });
          }
        </script>
      </head>
      <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Saquarema</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="painel.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link btn btn-outline-light" href="reuniao.php">Recarregar Reunião</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn btn-danger" href="painel.php">Sair da Reunião</a>
                    </li>
                  

                  </ul>
                </div>
              </div>
            </nav>
          </header>
          <div id="jaas-container" />
      </body>
    </html>
  