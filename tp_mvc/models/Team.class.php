<?php

class Team extends DB{
    function getTeam(){
        $query = "SELECT * FROM team";
        return $this->execute($query);
    }

    function getTeamById($id){
        $query = "SELECT * FROM team WHERE id_team = $id";
        return $this->execute($query);
    }

    function addTeam($data){
        $nama_team = $data['nama_team'];
        $tahun_berdiri = $data['tahun_berdiri'];

        $query = "INSERT INTO team VALUES ('','$nama_team', '$tahun_berdiri')";
        return $this->execute($query);
    }

    function updaTeteam($id, $data){
        $nama_team = $data['nama_team'];
        $tahun_berdiri = $data['tahun_berdiri'];

        $query = "UPDATE team SET nama_team='$nama_team', tahun_berdiri='$tahun_berdiri' WHERE id_team=$id";
        return $this->execute($query);
    }


    function deleteTeam($id){
        $query = "DELETE FROM team WHERE id_team = '$id'";
        return $this->execute($query);
    }
}
?>