{if isset($bad_inscription)}
    <div class="alert alert-error" id="notif">
      {$bad_inscription}
  </div>
  {/if}
    
<form action="inscription.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
    <div class="clearfix">
        <label for="nom">Votre nom: *</label>
        <div class="input">
            <input type="text" name="nom" id="nom" value=""/>
        </div>    
    </div>
    <div class="clearfix">
        <label for="prenom">Votre prénom: *</label>
        <div class="input">
            <input type="text" name="prenom" id="prenom" value=""/>
        </div>    
    </div>    
        <div class="clearfix">
            <label for="email">email: *</label>
            <div class="input">
                <input type="text" name="email" id="email" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="mot_de_passe">mot de passe: *</label>
            <div class="input">
                <input type="password" name="mot_de_passe" id="mot_de_passe"/>
            </div>
        </div>
        
        
        <div class="form-actions">
            <input type="submit" name="inscription" value="inscription" class="btn btn-large btn-primary"/>
        </div>
    </form>
