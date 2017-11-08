  <div class="row justify-content-around">
    <?php
      $equipe=fopen('./files/equipe.txt', 'r');

      while (!feof($equipe)){
        $ligne=fgets($equipe);
        $ligne_explode=explode("|", $ligne);
        echo'
          <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 border border-dark jumbotron text-center">
          <img src=./images/'.$ligne_explode[0].' alt="Avatar" class="avatar">
          <h2>'.$ligne_explode[1].'</h2>
          <p>'.$ligne_explode[2].'</p>
          </br>
          <a href="https://twitter.com/'.$ligne_explode[3].'" target="_blank" title="'.$ligne_explode[3].'" class="link">
          <img src="./images/logotwitter.png" alt="Twitter" class="logo"></a>
          <a href="https://www.facebook.com/'.$ligne_explode[4].'" target="_blank" title="'.$ligne_explode[4].'" class="link">
          <img src="./images/logofacebook.png" alt="Facebook" class="logo"></a>
          </div>
        ';
      }
    ?>
  </div>