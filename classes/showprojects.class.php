<?php

class ProjectsView extends Projects {

  public function showProjects() {


    $results = $this->getProjects();

    //wywołanie wszystkich projektów
    foreach($results as $result){

      //załadowanie biblioteki szablonów Smarty
      include_once 'includes/Smarty/libs/Smarty.class.php';

        $smarty = new Smarty;

        // tworzymy zmienne
        $tags  = $result['rel_tags'];
        $title = $result['rel_seoTitle'];
        $slug = $result['rel_slug'];
        $image = $result['rel_img'];
        $url = $result['rel_url'];
        $text = $result['rel_text'];


        //skrócenie wyświetlanego tekstu na kafelku
        $shortText = substr($text,0,220)."...";

        //podzielenie tagów osobno
        $tag = explode(",", $tags);

        // przypisujemy zmienne do szablonu
        $smarty->assign('tags', $tag);
        $smarty->assign('title', $title);
        $smarty->assign('slug', $slug);
        $smarty->assign('image', $image);
        $smarty->assign('url', $url);
        $smarty->assign('text', $shortText);

        $smarty->display('includes/Smarty/templates/project.card.tpl');
      }
   }

   public function showOneProject($urlSlug) {

     $results = $this->getOneProject($urlSlug);

  //załadowanie biblioteki szablonów Smarty
  include_once 'includes/Smarty/libs/SmartyBC.class.php';

    $smarty = new SmartyBC();

    $homeUrl = dirname($_SERVER);

    foreach($results as $result){

    // tworzymy zmienne
    $tags  = $result['rel_tags'];
    $pageTitle = $result['rel_seoTitle'];
    $pageDescription = $result['rel_seoDescription'];
    $pageKeywords = $result['rel_seoKeywords'];
    $pageH1 = $result['rel_seoH1'];
    $pageSlug = $result['rel_slug'];
    $imageOne = $result['rel_img'];
    $imageTwo = $result['rel_img2'];
    $imageThree = $result['rel_img3'];
    $imageFour = $result['rel_img4'];
    $imageFive = $result['rel_img5'];
    $url = $result['rel_url'];
    $titleText2 = $result['rel_text2_title'];
    $textOne = $result['rel_text'];
    $textTwo = $result['rel_text2'];
    $textThree = $result['rel_text3'];


    //podzielenie tagów osobno
    $tag = explode(",", $tags);

    // przypisujemy zmienne do szablonu
    $smarty->assign('homeUrl', $homeUrl);
    $smarty->assign('tags', $tag);
    $smarty->assign('pageDescription', $pageDescription);
    $smarty->assign('pageTitle', $pageTitle);
    $smarty->assign('pageKeywords', $pageKeywords);
    $smarty->assign('pageH1', $pageH1);
    $smarty->assign('pageSlug', $pageSlug);
    $smarty->assign('imageOne', $imageOne);
    $smarty->assign('imageTwo', $imageTwo);
    $smarty->assign('imageThree', $imageThree);
    $smarty->assign('imageFour', $imageFour);
    $smarty->assign('imageFive', $imageFive);
    $smarty->assign('url', $url);
    $smarty->assign('titleText2', $titleText2);
    $smarty->assign('textOne', $textOne);
    $smarty->assign('textTwo', $textTwo);
    $smarty->assign('textThree', $textThree);

    $smarty->display('includes/Smarty/templates/realization.page.tpl');
}
    }

}
