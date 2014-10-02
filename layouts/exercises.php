<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
  <link rel="stylesheet" href="../stylesheets/main.css?1">
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <?php 
           $random = rand(100, 200);
            if ($random < 150) {
              echo 'Juhuslik number '.$random.' on väiksem kui 150.';}
            elseif ($random > 150) {
              echo 'Juhuslik number '.$random.' on suurem kui 150.';}
            else
              echo 'Juhuslik number '.$random.' on 150.';
         ?>

        <h2>Juhuslik pilt</h2>
      <?php
            echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.rand(1, 12).'.jpg">';
          ?>

        <h2>Kõikide piltide väljastamine</h2>
          <?php 
          for ($img=1; $img < 13; $img++) { 
            echo '<img id="img_sz" src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.$img.'.jpg">';
          };

          ?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
