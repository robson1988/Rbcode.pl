<?php

class Projects extends Dbh {

  protected function getProjects() {

    $sql = "SELECT * FROM realizacje";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();


    $results = $stmt->fetchAll();
    return $results;
  }
}
