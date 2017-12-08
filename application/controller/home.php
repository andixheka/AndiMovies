<?php
class Home extends Controller
{
    public function index(){ 
        $nextPage='home/page/1';
        $query = $this->db->prepare("SELECT * FROM movies order by id desc limit 12");
        $query->execute();
        require APP . 'view/_templates/header.php';
        require APP . 'view/_category/header.php';
        while ($row=$query->fetch(PDO::FETCH_ASSOC)) { 
            require APP . 'view/_category/body.php';
        }
        require APP . 'view/_category/footer.php';
        require APP . 'view/_templates/footer.php';
    }

    public function page($page=0){
        $pager=12*$page;
        $nextPage=$page+1;
        $query = $this->db->prepare("SELECT * FROM movies order by id desc limit $pager , 12");
        $query->execute();
        require APP . 'view/_templates/header.php';
        require APP . 'view/_category/header.php';
        while ($row=$query->fetch(PDO::FETCH_ASSOC)) { 
            require APP . 'view/_category/body.php';
        }
        require APP . 'view/_category/footer.php';
        require APP . 'view/_templates/footer.php';
    }
}
?>
