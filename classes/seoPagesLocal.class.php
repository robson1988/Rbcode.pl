<?php

class SeoLocalPages extends Dbh {

  protected function getPages() {

    $sql = "SELECT rel_tags, rel_slug, rel_img, rel_url FROM realizacje ORDER BY RAND() LIMIT 4";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }


  protected function getOnePage($urlSlug) {

    $urlSlug = trim($urlSlug);
  	$urlSlug = htmlspecialchars($urlSlug, ENT_QUOTES, 'UTF-8');
  	$urlSlug = stripslashes($urlSlug);

    $sql = "SELECT * FROM seo_strony_lokalnie WHERE seo_slug = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$urlSlug]);

    $results = $stmt->fetchAll();

    if(empty($results)) {           //jeśli jest pusty array, realizacja nie istnieje
      $url = $_SERVER['HTTP_HOST']; //przekieruj na stronę główną
      header('Location: $url');
      exit();
    } else{
      return $results;              //jeśli projekt istnieje w bazie zwróć array z wartościami
    }
  }
}
