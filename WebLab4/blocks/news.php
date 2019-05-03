<div class="main">
   <?php
      require_once "functions/PostNews.php";
      $news = getNews();
      for ($i = 0; $i < count($news); $i++){
         echo "<div class=\"post col-sm-10 offset-sm-1 col-md-8 offset-md-2\">
         <p class=\"post_title\">";
         echo $news[$i]["title"];
         echo "</p><p class=\"post_body\">";
         echo $news[$i]["text"];
         echo "</p></div>";
         if($i != count($news) - 1)
            echo "<hr>";
      }
   ?>
</div>