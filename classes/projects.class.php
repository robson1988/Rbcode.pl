<?php

class Projects extends Dbh {

  protected function getProjects() {

    $sql = "SELECT rel_tags, rel_seoTitle, rel_slug, rel_img, rel_url, rel_text FROM realizacje";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }


  protected function getOneProject($urlSlug) {

    $urlSlug = trim($urlSlug);
  	$urlSlug = htmlspecialchars($urlSlug, ENT_QUOTES, 'UTF-8');
  	$urlSlug = stripslashes($urlSlug);

    $sql = "SELECT * FROM realizacje WHERE rel_slug = ?";
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
