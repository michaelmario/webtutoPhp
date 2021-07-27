<?php include_once('head.php'); ?>
<body>
    <header>
        <nav>
            <h1>MauriCode Academy Learning Channel<br> 
              <small>Tutoriel en créole Mauricien</small><h1>              
        </nav>        
    </header>
    <main>
        <?php include_once("template_pageTop.php"); ?>
        <section class="w3-container">
            <div class="w3-row">
                <div class="w3-col m4 s12">
                    <aside class="w3-container">
                    <p class="w3-center">
                        <strong>
                     Visiter le site MauricodeAcademy à l'url:<br>
                       mauricodeacademy.web.app
                    </strong>
                    </p>
                       <?php include_once('button.php'); ?>
                    </aside>
                </div>
                <div class="w3-col m8 s12">
                  <?php include_once('front_page.php'); ?> 
              </div>
        </section>
    </main>
    <?php include_once("template_pageBottom.php"); ?>
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">    
       <?php include 'js/main.js'; ?>
    </script>
    <script type="text/javascript">
    <?php include 'js/ajax.js'; ?>
    </script>
</body>

</html>