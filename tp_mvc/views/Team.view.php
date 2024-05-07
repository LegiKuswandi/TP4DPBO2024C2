<?php

class TeamView{
    public function render($data){
        $no = 1;
        $dataTeam = null;
        $header = null;
        $header .="
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>TAHUN BERDIRI</th>
            <th>ACTION</th>
        </tr>";
        foreach($data as $val){
            list($id, $nama_team, $tahun_berdiri) = $val;
            $dataTeam .="
            <tr>
                <th>" . $no++ .  "</th>
              <td>$val[nama_team]</td>
              <td>$val[tahun_berdiri]</td>
              <td>
                        <a class='btn btn-success' href='team.php?action=editform&id=" . $id .  "'>Edit</a>
                        <a class='btn btn-danger' href='team.php?action=delete&id=" . $id . "'>Delete</a>
                      </td>
            </tr>";
        }

        $title = 'Team';
        $link = 'team.php?action=addform';
        $team = new Template("templates/skintabel.html");

        $team->replace("TITLE", $title);
        $team->replace("HEADER", $header);
        $team->replace("DATA_TABLE", $dataTeam);
        $team->replace("LINK", $link);

        $team->write();
    }

    public function ADDTrender($data = null){
        $dataTeam = null;
            $dataTeam .="
            <form method='post' action='team.php'><br><br>
                <div class='card'>
                    <div class='card-header bg-primary'>
                        <h1 class='text-white text-center'>  Create New Team </h1>
                    </div><br>
                    <label> NAME: </label>
                    <input type='text' name='nama_team' class='form-control' required> <br>
                    <label> TAHUN BERDIRI: </label>
                    <input type='text' name='tahun_berdiri' class='form-control' required> <br>
            
                    <button class='btn btn-success' type='submit' name='submit'> Submit </button><br>
                    <a class='btn btn-info' type='submit' name='cancel' href='team.php'> Cancel </a><br>
                </div>
            </form>";
    
        $title = 'team';
        $team = new Template("templates/skinform.html");

        $team->replace("TITLE", $title);
        $team->replace("DATA_FORM", $dataTeam);

        $team->write();
    }

    public function EditTrender($data){
        $dataTeam = "";
        foreach($data as $val){
            list($id, $nama_team, $tahun_berdiri) = $val;
                $dataTeam .="
                <form method='post' action='team.php?id=" . $id . "' enctype='multipart/form-data'><br><br>
                <input type='hidden' name='id' value='" . $id . "'>
                    <div class='card'>
                        <div class='card-header bg-primary'>
                            <h1 class='text-white text-center'> Edit Team </h1>
                        </div><br>
                        <label> NAME: </label>
                        <input type='text' name='nama_team' class='form-control' value='" . $nama_team . "' required> <br>
                        <label> TAHUN BERDIRI: </label>
                        <input type='text' name='tahun_berdiri' class='form-control' value='" . $tahun_berdiri . "' required> <br>
                        
                        <button class='btn btn-success' type='submit' name='submit'> Submit </button><br>
                        <a class='btn btn-info' type='submit' name='cancel' href='team.php'> Cancel </a><br>
                    </div>
                </form>";
        
            $title = 'team';
            $team = new Template("templates/skinform.html");

            $team->replace("TITLE", $title);
            $team->replace("DATA_FORM", $dataTeam);

            $team->write();
        }
    }
}