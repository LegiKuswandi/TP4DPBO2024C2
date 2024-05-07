<?php
include_once("connection.php");
include_once("models/Members.class.php");
include_once("models/Team.class.php");
include_once("views/Members.view.php");

class MembersController {
  private $members;
  private $team;

  function __construct(){
    $this->members = new Members(Connection::$db_host, Connection::$db_user, Connection::$db_pass, Connection::$db_name);
    $this->team = new Team(Connection::$db_host, Connection::$db_user, Connection::$db_pass, Connection::$db_name);
  }

  public function index() {
    $this->members->open();
    $this->members->getMembersJoin();
    $data = array();
    while($row = $this->members->getResult()){
      array_push($data, $row);
    }

    $this->members->close();

    $view = new MembersView();
    $view->render($data);
  }

  function addForm() {
    $this->team->open();
    $this->team->getTeam();

    $data = array();
    while($row = $this->team->getResult()) {
      array_push($data, $row);
    }

    $this->team->close();

    $view = new MembersView();
    $view->ADDMrender($data);
  }

  function editForm($id) {
    $this->members->open();
    $this->members->getMembersById($id);

    $this->team->open();
    $this->team->getTeam();
    
    $data = array(
      'members' => array(),
      'team' => array()  
    );

    while($row = $this->members->getResult()) {
      array_push($data['members'], $row);
    }

    while($row = $this->team->getResult()) {
      array_push($data['team'], $row);
    }

    $this->members->close();

    $this->team->close();

    $view = new MembersView();
    $view->EDITMrender($data);
  }

  function add($data){
    $this->members->open();
    $this->members->addMembers($data);
    $this->members->close();
    
    header("location:index.php");
  }

  function edit($id, $data){
    $this->members->open();
    $this->members->updateMembers($id, $data);
    $this->members->close();
    
    header("Location: index.php");
  }

  function delete($id){
    $this->members->open();
    $this->members->deleteMembers($id);
    $this->members->close();
    
    header("location:index.php");
  }
}