<?php
//dung __dir__ lay chinh xac thu muc
require_once (__DIR__."/../model/Database.php");
class Controller{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function viewall()
    {
        include 'view/gamelist.php';
        $games = $this->db->getGameList();
        //include 'view/gamelist.php';
    }
    public function view()
    {
        $game = $this->db->getGame($_GET['title']);
        include 'view/viewgame.php';
    }
}
?>