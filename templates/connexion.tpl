{if isset($bad_connexion)}  
  <div class="alert alert-error" id="notif">
      {$bad_connexion}
  </div>
  {/if}
  <h2>Connectez vous !</h2>
<form action="connexion.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">

        <div class="clearfix">
            <label for="email">email: </label>
            <div class="input">
                <input type="text" name="email" id="email" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="mot_de_passe">mot de passe: </label>
            <div class="input">
                <input type="password" name="mot_de_passe" id="mot_de_passe"/>
            </div>
        </div>

        <div class="form-actions">
            <input type="submit" name="connexion" value="connexion" class="btn btn-large btn-primary"/>
        </div>
    </form>
