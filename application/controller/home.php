<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index(){

        $query = $this->db->prepare("SELECT * FROM movies order by id desc limit 12");
        $query->execute();
        require APP . 'view/_templates/header.php';
        require APP . 'view/_category/header.php';
        $row=$query->fetch(PDO::FETCH_ASSOC);
        $i=0;
        while ($i<12) { 
          require APP . 'view/_category/body.php';
          $i++;
        }
        require APP . 'view/_category/footer.php';
        require APP . 'view/_templates/footer.php';
    }//

}
