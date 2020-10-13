<?php

class Dbh {
  private $host ="localhost";
  private $user = "robertb1_rbcode";
  private $pass ="tIUBGzzmMst2hKK";
  private $dbName = "robertb1_bskdrbcode";

  protected function connect() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}



/*CREATE TABLE realizacje (
  rel_id int NOT NULL AUTO_INCREMENT,
  rel_seoTitle varchar(255),
  rel_seoDescription varchar(255),
  rel_seoKeywords varchar(255),
  rel_slug varchar(255),
  rel_img text,
  rel_url varchar(255),
  rel_text text
  )


INSERT INTO realizacje (
  rel_seoTitle,rel_seoDescription,rel_seoKeywords,rel_slug,rel_img,rel_url,rel_text
  )
VALUES (
  'przewozy paczek do szwecji', 'paczka do szwecji ','przewozy','euroscandia','image','euroscandia.pl','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'
  )*/
