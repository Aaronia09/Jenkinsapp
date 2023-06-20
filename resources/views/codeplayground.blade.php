<!-- code_playground.blade.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Code Playground</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.min.css" type="text/css">
</head>
<body>

  <section data-bs-version="5.1" class="menu menu2 cid-tHD8Udggwg" once="menu" id="menu2-p">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="">
                        <img src="{{ asset('assets/images/mbr-96x84.webp') }}" alt="Mobirise Website Builder" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="">MyCoding</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="">Contact us</a></li>
                </ul>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-black display-4" href="{{ route('connexion') }}">Connexion</a></div>
            </div>
        </div>
    </nav>
    </section>
    <br><br>
    <br><br>
  <div id="editor" style="height: 300px; width: 100%;"></div>
  <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>

  <script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/javascript");

    function getCode() {
      return editor.getValue();
    }
  </script>
</body>
</html>
