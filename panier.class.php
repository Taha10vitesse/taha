<?php
class panier{

    private $DB;
    public function __construct($DB)
    {
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
        $this->DB = $DB;
        if(isset($_GET['delPanier'])){
            $this->del($_GET['delPanier']);
        }
    }
    public function total(){
        
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $items = array();
        }else{
            $items = $this->DB->query('SELECT id, price FROM items WHERE id IN ('.implode(',',$ids).')');
        }
        foreach($items as $item){
            $total += $item->price * $_SESSION['panier'][$item->id];
        }
        return $total;
    }

    public function count(){
        return array_sum($_SESSION['panier']);
    }


    public function add($item_id){
        if(isset($_SESSION['panier'][$item_id])){
            $_SESSION['panier'][$item_id]++;
        }else{
            $_SESSION['panier'][$item_id]=1;
        }
        
    }
    public function del($item_id){
        unset($_SESSION['panier'][$item_id]);
    }

}