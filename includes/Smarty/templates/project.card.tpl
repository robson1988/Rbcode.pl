<div class="col-md-6 col-sm-12">
  <div class="card realization-card">
    <div class="pb-2"><img src="images/Projekty/{$image}.png" class="card-img-top" alt="{$image}" title="{$title}"></div>
      <div class="card-body text-center">
        <div class="realization-tags d-inline-block mb-3">
          {foreach $tags as $tag} <small class="text-muted">{$tag}</small> {/foreach}</div>
          	<h3 class="card-title"><a href="https://{$url}" rel="nofollow" target="_blank" title="{$title}" class="realization-title " >{$url}</a></h3>
          <p class="card-text">{$text}</p>
          <div class="slide-in d-flex justify-content-center mx-auto" id="slide-in">
            <a itemprop="url" href="/" class="btn btn-wycena" role="button" aria-pressed="true" title="Dowiedz się więcej na temat projektu" >Dowiedz się więcej</a>
            <div class="slide-eff"></div>
          </div>
      </div>
  </div>
</div>
