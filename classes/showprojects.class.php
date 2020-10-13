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
        $shortText = substr($text,0,250)."...";

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
}
