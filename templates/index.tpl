{foreach from=$tableauArticleSmarty item=tableau}

<img src=img/{$tableau['id']}.jpg alt="{$tableau['titre']}" width="200px"/>
<h2>{$tableau['titre']}</h2>
<p>{$tableau['texte']} </p>
<p>{$tableau['date_fr']}</p>


{/foreach}
<div class="pagination">
    <ul>
        {for $i=1 to $nbrpages}
            <li {if $i==$page_courante}class="active"{/if}><a href="index.php?page={$i}">{$i}</a></li>
            
            {/for}
    </ul>
</div>