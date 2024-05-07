<?php

class MembersView{
    public function render($data){
        $no = 1;
        $dataMembers = null;
        $header = null;
        $header .="
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>JOINING DATE</th>
            <th>TEAM</yh>
            <th>ACTIONS</th>
        </tr>";
        foreach($data as $val){
            list($id, $nama, $email, $phone, $join_date, $team) = $val;
            $dataMembers .="
            <tr>
              <th>" . $no++ .  "</th>
              <td>$val[nama]</td>
              <td>$val[email]</td>
              <td>$val[phone]</td>
              <td>$val[join_date]</td>
              <td>$val[nama_team]</td>
              <td>
                        <a class='btn btn-success' href='index.php?action=editform&id=" . $id .  "'>Edit</a>
                        <a class='btn btn-danger' href='index.php?action=delete&id=" . $id . "'>Delete</a>
                      </td>
            </tr>";
        }

        $title = 'Members';
        $link = 'index.php?action=addform';
        $members = new Template("templates/skintabel.html");

        $members->replace("TITLE", $title);
        $members->replace("HEADER", $header);
        $members->replace("DATA_TABLE", $dataMembers);
        $members->replace("LINK", $link);

        $members->write();
    }

    public function ADDMrender($data = null){
        $dataTeam = null;
        foreach($data as $val) {
            list($id, $nama_team) = $val;
            $dataTeam .= "<option value='".$id."'>". $nama_team ."</option>";
        }

        $dataMembers = null;
            $dataMembers .="
            <form method='post' action='index.php'><br><br>
                <div class='card'>
                    <div class='card-header bg-primary'>
                        <h1 class='text-white text-center'>  Create New Member </h1>
                    </div><br>
                    <label> NAME: </label>
                    <input type='text' name='nama' class='form-control' required> <br>
                    <label> EMAIL: </label>
                    <input type='text' name='email' class='form-control' required> <br>
                    <label> PHONE: </label>
                    <input type='text' name='phone' class='form-control' required> <br>
                    <label> Join Date: </label>
                    <input type='date' name='join_date' class='form-control' requierd> <br>
                    <label for='team'>TEAM: </label><br>
                    <select name='team' class='form-select' required> 
                        <option selected disabled>Pilih team</option>
                        ' . $dataTeam . '
                    </select> <br>
                    <button class='btn btn-success' type='submit' name='submit'> Submit </button><br>
                    <a class='btn btn-info' type='submit' name='cancel' href='index.php'> Cancel </a><br>
                </div>
            </form>";
    
        $title = 'Members';
        $members = new Template("templates/skinform.html");

        $members->replace("TITLE", $title);
        $members->replace("DATA_FORM", $dataMembers);

        $members->write();
    }

    public function EditMrender($data){
        foreach($data['members'] as $val){
            list($id, $nama, $email, $phone, $join_date, $team) = $val;

            $idTeamPilih = $team;

            $dataTeam = "";
            foreach($data['team'] as $teamVal) {
                list($teamId, $nama_team) = $teamVal;
                $selected = ($teamId == $idTeamPilih) ? "selected" : ""; 
                $dataTeam .= "<option value='".$teamId."' $selected>". $nama_team ."</option>";
            }

            $dataMembers = "
                <form method='post' action='index.php?id=" . $id . "' enctype='multipart/form-data'><br><br>
                <input type='hidden' name='id' value='" . $id . "'>
                    <div class='card'>
                        <div class='card-header bg-primary'>
                            <h1 class='text-white text-center'> Edit Member </h1>
                        </div><br>
                        <label> NAME: </label>
                        <input type='text' name='nama' class='form-control' value='" . $nama . "' required> <br>
                        <label> EMAIL: </label>
                        <input type='text' name='email' class='form-control' value='" . $email . "' required> <br>
                        <label> PHONE: </label>
                        <input type='text' name='phone' class='form-control' value='" . $phone . "' required> <br>
                        <label> Join Date: </label>
                        <input type='date' name='joining_date' class='form-control' value='" . $join_date . "' required> <br>
                        <label for='team'>TEAM: </label><br>
                        <select name='team' class='form-select' required> 
                            <option disabled>Pilih Team</option>
                            " . $dataTeam . "
                        </select> <br>
                
                        <button class='btn btn-success' type='submit' name='submit'> Submit </button><br>
                        <a class='btn btn-info' type='submit' name='cancel' href='members.php'> Cancel </a><br>
                    </div>
                </form>";

            $title = 'Members';
            $members = new Template("templates/skinform.html");
            $members->replace("TITLE", $title);
            $members->replace("DATA_FORM", $dataMembers);
            $members->write();
        }
    }
}