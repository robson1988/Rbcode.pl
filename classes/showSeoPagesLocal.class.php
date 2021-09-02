<?php

class SeoLocalPagesView extends SeoLocalPages {

  public function showPages() {


    $results = $this->getPages();

    //wywołanie wszystkich projektów
    foreach($results as $result){

      //załadowanie biblioteki szablonów Smarty
      include_once 'includes/Smarty/libs/Smarty.class.php';

        $smarty = new Smarty;

        // tworzymy zmienne
        $slug = $result['rel_slug'];
        $image = $result['rel_img'];
        $url = $result['rel_url'];
        $tags = $result['rel_tags'];


        //podzielenie tagów osobno
        //$tag = explode(",", $tags);

        // przypisujemy zmienne do szablonu
        $smarty->assign('slug', $slug);
        $smarty->assign('image', $image);
        $smarty->assign('url', $url);
        $smarty->assign('tags', $tags);


        //załadowanie templatki do wyświetlenia
        $smarty->display('includes/Smarty/templates/pages.card.tpl');
      }
   }

   public function showOnePage($urlSlug) {

     $results = $this->getOnePage($urlSlug);

  //załadowanie biblioteki szablonów Smarty
  include_once 'includes/Smarty/libs/SmartyBC.class.php';

    $smarty = new SmartyBC();

    $homeUrl = dirname($_SERVER);

    foreach($results as $result){

    // tworzymy zmienne
    //$tags  = $result['rel_tags'];
    $pageTitle = $result['seo_seoTitle'];
    $pageDescription = $result['seo_seoDescription'];
    $pageKeywords = $result['seo_seoKeywords'];
    $pageH1 = str_replace("-", " ", $result['seo_slug']);
    $pageSlug = $result['seo_slug'];
    $imageOne = $result['seo_img'];
    //$imageTwo = $result['rel_img2'];
    //$imageThree = $result['rel_img3'];
    //$imageFour = $result['rel_img4'];
    //$imageFive = $result['rel_img5'];
    //$url = $result['rel_url'];
    $titleText2 = $result['seo_textTitle'];
    $textOne = $result['seo_textPage'];
    $textTwo = $result['seo_textPageTwo'];
    //$textThree = $result['rel_text3'];

    // przypisujemy zmienne do szablonu
    $smarty->assign('homeUrl', $homeUrl);
    //$smarty->assign('tags', $tag);
    $smarty->assign('pageDescription', $pageDescription);
    $smarty->assign('pageTitle', $pageTitle);
    $smarty->assign('pageKeywords', $pageKeywords);
    $smarty->assign('pageH1', $pageH1);
    $smarty->assign('pageSlug', $pageSlug);
    $smarty->assign('imageOne', $imageOne);
    //$smarty->assign('imageTwo', $imageTwo);
    //$smarty->assign('imageThree', $imageThree);
    //$smarty->assign('imageFour', $imageFour);
    //$smarty->assign('imageFive', $imageFive);
    //$smarty->assign('url', $url);
    $smarty->assign('titleText2', $titleText2);
    $smarty->assign('textOne', $textOne);
    $smarty->assign('textTwo', $textTwo);
    //$smarty->assign('textThree', $textThree);

    $smarty->display('includes/Smarty/templates/seo.lokalne.page.tpl');
}
    }

}
