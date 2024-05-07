<?php
include_once("connection.php");
include_once("models/team.class.php");
include_once("views/Team.view.php");

class TeamController {
  private $team;

  function __construct(){
    $this->team = new Team(Connection::$db_host, Connection::$db_user, Connection::$db_pass, Connection::$db_name);
  }

  public function index() {
    $this->team->open();
    $this->team->getTeam();
    $data = array();
    while($row = $this->team->getResult()){
      array_push($data, $row);
    }

    $this->team->close();

    $view = new TeamView();
    $view->render($data);
  }

  function addForm() {
    $view = new TeamView();
    $view->ADDTrender();
  }

  function editForm($id) {
    $this->team->open();
    $this->team->getTeamById($id);
    
    $data = array();
    while($row = $this->team->getResult()) {
      array_push($data, $row);
    }

    $this->team->close();

    $view = new TeamView();
    $view->EDITTrender($data);
  }

  function add($data){
    $this->team->open();
    $this->team->addTeam($data);
    $this->team->close();
    
    header("location:team.php");
  }

  function edit($id, $data){
    $this->team->open();
    $this->team->updateTeam($id, $data);
    $this->team->close();
    
    header("Location:team.php");
  }

  function delete($id){
    $this->team->open();
    $this->team->deleteTeam($id);
    $this->team->close();
    
    header("location:team.php");
  }
}