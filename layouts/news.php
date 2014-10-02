<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <article class="blog-post">
         <?php  $count = 1;
        foreach ($blog_news as $blog_post){
          if ($count >= 3){
            break;
          }
          $count ++;
            echo $blog_post ["post_title"] . "<br>" ;
            echo $blog_post ["post_excerpt"] . "<br>";
            echo $blog_post ["post_body"] . "<br>"; 
          }
        ?>
          </div>
        </article>

        <article class="blog-post">
          <h2 class="post-title">Pisike North West sammus Pariisis vapralt ema kõrval (1</h2>
          <div class="post-excerpt">
            <p>Kim Kardashian ja Kanye West saabusid Pariisi moenädalale koos 15 kuu vanuse tütre North Westiga.</p>
          </div>
          <div class="post-body">
            <p>«Hotellist lahkudes hakkas ta nutma ja me ei saanud teda maha jätta. See oli viimase hetke otsus,» põhjendas Kim, miks ta lapse üritusele kaasa võttis.</p>
          </div>
        </article>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
