<?php

class Members extends DB{
    function getMembersJoin(){
        $query = "SELECT * FROM members JOIN team ON members.team=team.id_team ORDER BY members.id_member";
        return $this->execute($query);
    }

    function getMembers(){
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }

    function getMembersById($id){
        $query = "SELECT * FROM members JOIN team ON members.team=team.id_team WHERE id_member = $id";
        return $this->execute($query);
    }

    function addMembers($data){
        $nama = $data['nama'];
        $email = $data['email'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        $team = $data['team'];

        $query = "INSERT INTO members VALUES ('','$nama', '$email', '$phone', '$join_date', '$team')";
        return $this->execute($query);
    }

    function updateMembers($id, $data){
        $nama = $data['nama'];
        $email = $data['email'];
        $phone = $data['phone'];
        $join_date = $data['joining_date'];
        $team = $data['team'];

        $query = "UPDATE members SET nama='$nama', email='$email', phone='$phone', join_date='$join_date', team='$team' WHERE id_member=$id";
        return $this->execute($query);
    }


    function deleteMembers($id){
        $query = "DELETE FROM members WHERE id_member = '$id'";
        return $this->execute($query);
    }
}


?>