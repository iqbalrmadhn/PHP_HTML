<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content = "5">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Alarm Thermolator </title>
<link rel = "icon" type = "image/png" href = "icon.png">
<link rel='stylesheet' href='format.css'>
</head>

<body style="background-color:#E7E7E9;">
<div class="head">
<img src="http://10.100.2.130/Thermolator/VEA.png" class="gbr">
<div id="mySidenav" class="sidenav">
  <b href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</b>
  <a href="index.php?mode=read">HOME</a>
  <a href="index.php?mode=history">HISTORY</a>
</div>
<div class="menu" onclick="openNav()">&#9776;</div>
</div>

<script type="text/javascript">

function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  document.getElementById("hilang").style.zIndex = "0";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0px";
  document.getElementById("hilang").style.zIndex = "1";
}
</script>

<?php
class Thermolator
{
    private $connection;
    public $query_string; 

    function __construct()
    {
        $this->cors();
        $this->connection = $this->open_connection();
    }

    function read_data()
    {
         $sql_query = "SELECT * FROM thermolator";
         $this->execute_query($sql_query, [], true);
    }
     
    function create_time_machine1($problem)
    {
        $sql_query = "INSERT INTO t1 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine2($problem)
    {
        $sql_query = "INSERT INTO t2 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine3($problem)
    {
        $sql_query = "INSERT INTO t3 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine4($problem)
    {
        $sql_query = "INSERT INTO t4 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine5($problem)
    {
        $sql_query = "INSERT INTO t5 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine6($problem)
    {
        $sql_query = "INSERT INTO t6 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine7($problem)
    {
        $sql_query = "INSERT INTO t7 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine8($problem)
    {
        $sql_query = "INSERT INTO t8 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine9($problem)
    {
        $sql_query = "INSERT INTO t9 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine10($problem)
    {
        $sql_query = "INSERT INTO t10 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine11($problem)
    {
        $sql_query = "INSERT INTO t11 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine12($problem)
    {
        $sql_query = "INSERT INTO t12 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine13($problem)
    {
        $sql_query = "INSERT INTO t13 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine14($problem)
    {
        $sql_query = "INSERT INTO t14 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine15($problem)
    {
        $sql_query = "INSERT INTO t15 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine16($problem)
    {
        $sql_query = "INSERT INTO t16 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine17($problem)
    {
        $sql_query = "INSERT INTO t17 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
        
    function create_time_machine18($problem)
    {
        $sql_query = "INSERT INTO t18 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
        
    function create_time_machine19($problem)
    {
        $sql_query = "INSERT INTO t19 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
        
    function create_time_machine20($problem)
    {
        $sql_query = "INSERT INTO t20 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
         
    function create_time_machine21($problem)
    {
        $sql_query = "INSERT INTO t21 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine22($problem)
    {
        $sql_query = "INSERT INTO t22 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine23($problem)
    {
        $sql_query = "INSERT INTO t23 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine24($problem)
    {
        $sql_query = "INSERT INTO t24 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine25($problem)
    {
        $sql_query = "INSERT INTO t25 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine26($problem)
    {
        $sql_query = "INSERT INTO t26 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine27($problem)
    {
        $sql_query = "INSERT INTO t27 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine28($problem)
    {
        $sql_query = "INSERT INTO t28 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine29($problem)
    {
        $sql_query = "INSERT INTO t29 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine30($problem)
    {
        $sql_query = "INSERT INTO t30 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine31($problem)
    {
        $sql_query = "INSERT INTO t31 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine32($problem)
    {
        $sql_query = "INSERT INTO t32 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine33($problem)
    {
        $sql_query = "INSERT INTO t33 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine34($problem)
    {
        $sql_query = "INSERT INTO t34 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine35($problem)
    {
        $sql_query = "INSERT INTO t35 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine36($problem)
    {
        $sql_query = "INSERT INTO t36 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine37($problem)
    {
        $sql_query = "INSERT INTO t37 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
        
    function create_time_machine38($problem)
    {
        $sql_query = "INSERT INTO t38 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
        
    function create_time_machine39($problem)
    {
        $sql_query = "INSERT INTO t39 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
        
    function create_time_machine40($problem)
    {
        $sql_query = "INSERT INTO t40 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
         
    function create_time_machine41($problem)
    {
        $sql_query = "INSERT INTO t41 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine42($problem)
    {
        $sql_query = "INSERT INTO t42 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine43($problem)
    {
        $sql_query = "INSERT INTO t43 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine44($problem)
    {
        $sql_query = "INSERT INTO t44 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }

    function create_time_machine45($problem)
    {
        $sql_query = "INSERT INTO t45 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine46($problem)
    {
        $sql_query = "INSERT INTO t46 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine47($problem)
    {
        $sql_query = "INSERT INTO t47 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine48($problem)
    {
        $sql_query = "INSERT INTO t48 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine49($problem)
    {
        $sql_query = "INSERT INTO t49 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine50($problem)
    {
        $sql_query = "INSERT INTO t50 (problem) VALUES ('".$problem."')";
        $this->execute_query($sql_query);
    }
    
    function create_time_machine51($problem)
    {
        $sql_query = "INSERT INTO t51 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine52($problem)
    {
        $sql_query = "INSERT INTO t52 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine53($problem)
    {
        $sql_query = "INSERT INTO t53 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine54($problem)
    {
        $sql_query = "INSERT INTO t54 (problem) VALUES ('".$problem."')";
        echo $this->execute_query($sql_query);
    }
    
    function create_time_machine55($problem)
    {
        $sql_query = "INSERT INTO t55 (problem) VALUES ('".$problem."')";
        $this->execute_query($sql_query);
    }

    function history()
    {
         $sql_query = "SELECT * FROM t1 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo1()
    {
         $sql_query = "SELECT * FROM t1 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo2()
    {
         $sql_query = "SELECT * FROM t2 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo3()
    {
         $sql_query = "SELECT * FROM t3 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo4()
    {
         $sql_query = "SELECT * FROM t4 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo5()
    {
         $sql_query = "SELECT * FROM t5 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo6()
    {
         $sql_query = "SELECT * FROM t6 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo7()
    {
         $sql_query = "SELECT * FROM t7 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo8()
    {
         $sql_query = "SELECT * FROM t8 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo9()
    {
         $sql_query = "SELECT * FROM t9 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo10()
    {
         $sql_query = "SELECT * FROM t10 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo11()
    {
         $sql_query = "SELECT * FROM t11 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo12()
    {
         $sql_query = "SELECT * FROM t12 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo13()
    {
         $sql_query = "SELECT * FROM t13 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo14()
    {
         $sql_query = "SELECT * FROM t14 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo15()
    {
         $sql_query = "SELECT * FROM t15 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo16()
    {
         $sql_query = "SELECT * FROM t16 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo17()
    {
         $sql_query = "SELECT * FROM t17 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo18()
    {
         $sql_query = "SELECT * FROM t18 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo19()
    {
         $sql_query = "SELECT * FROM t19 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo20()
    {
         $sql_query = "SELECT * FROM t20 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo21()
    {
         $sql_query = "SELECT * FROM t21 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo22()
    {
         $sql_query = "SELECT * FROM t22 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo23()
    {
         $sql_query = "SELECT * FROM t23 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo24()
    {
         $sql_query = "SELECT * FROM t24 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo25()
    {
         $sql_query = "SELECT * FROM t25 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo26()
    {
         $sql_query = "SELECT * FROM t26 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo27()
    {
         $sql_query = "SELECT * FROM t27 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo28()
    {
         $sql_query = "SELECT * FROM t28 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo29()
    {
         $sql_query = "SELECT * FROM t29 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo30()
    {
         $sql_query = "SELECT * FROM t30 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo31()
    {
         $sql_query = "SELECT * FROM t31 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo32()
    {
         $sql_query = "SELECT * FROM t32 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo33()
    {
         $sql_query = "SELECT * FROM t33 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo34()
    {
         $sql_query = "SELECT * FROM t34 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo35()
    {
         $sql_query = "SELECT * FROM t35 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo36()
    {
         $sql_query = "SELECT * FROM t36 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo37()
    {
         $sql_query = "SELECT * FROM t37 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo38()
    {
         $sql_query = "SELECT * FROM t38 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo39()
    {
         $sql_query = "SELECT * FROM t39 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo40()
    {
         $sql_query = "SELECT * FROM t40 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo41()
    {
         $sql_query = "SELECT * FROM t41 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo42()
    {
         $sql_query = "SELECT * FROM t42 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo43()
    {
         $sql_query = "SELECT * FROM t43 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo44()
    {
         $sql_query = "SELECT * FROM t44 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo45()
    {
         $sql_query = "SELECT * FROM t45 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo46()
    {
         $sql_query = "SELECT * FROM t46 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo47()
    {
         $sql_query = "SELECT * FROM t47 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo48()
    {
         $sql_query = "SELECT * FROM t48 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo49()
    {
         $sql_query = "SELECT * FROM t49 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo50()
    {
         $sql_query = "SELECT * FROM t50 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo51()
    {
         $sql_query = "SELECT * FROM t51 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function h_thermo52()
    {
         $sql_query = "SELECT * FROM t52 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo53()
    {
         $sql_query = "SELECT * FROM t53 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo54()
    {
         $sql_query = "SELECT * FROM t54 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }
    
    function h_thermo55()
    {
         $sql_query = "SELECT * FROM t55 ORDER BY jam DESC";
         $this->execute_query1($sql_query, [], true);
    }

    function update_ket($id,$ket)
    {
        $sql_query = "UPDATE thermolator SET keterangan = '$ket' WHERE id = '$id'";
        $this->execute_query($sql_query);
    }

    function update_data($id,$dev,$bcr,$err)
    {
        $sql_query = "UPDATE thermolator SET sinyal1 = '$dev', sinyal2 = '$bcr', sinyal3 = '$err'  WHERE id = '$id'";
        $this->execute_query($sql_query);
    }

    function error_handler($params = [])
    {
        $data = [];
        foreach($params as $param => $rules) {
            $data[$param] = $rules;
        }
        $data['status'] = false;
        $data['message'] = 'error on operation';
        return json_encode($data);
    }

    function is_url_query($string_value)
    {
        $query = array();
        parse_str($this->query_string, $query);
        if (array_key_exists($string_value, $query)) {
            return true;
        }
        return false;
    }

    function get_url_query_value($string_value)
    {
        $query = array();
        parse_str($this->query_string, $query);
        return $query[$string_value];
    }

    private function open_connection()
    {
        $servername = "Localhost";
        $username = "root";
        $password = "";
        $dbname = "monitoring";
        $conn = new mysqli($servername, $username, $password, $dbname) or die("Failed connect: %s\n" . $conn->error);
        return $conn;
    }

    private function close_connection()
    {
        $this->connection->close();
    }

    public function execute_query($sql, $data = [], $is_read = null)
    {
        $executed = $this->connection->query($sql);
        if ($executed == TRUE)
        {
            if (!is_null($is_read) && $is_read)
            {
                if($executed->num_rows != 0)
                {
                  echo'
                  <div id="hilang" class="judul">HOME</div>
                  <div class="t1">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //--------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //-------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //--------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //--------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //--------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //--------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //--------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //-------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //--------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>';
                  //--------------------------------------------------------------------------------------
                  echo'
                  <div style="height:10px;">
                  </div>
                  <table>
                    <tr>';
                    for ($x = 0; $x < 5; $x++)
                    {
                        $row = $executed->fetch_assoc();
                        echo '
                        <td style="text-align:center">
                        <table>
                        <th colspan = "2">Thermolator '.$row['no_mesin'].'</th>
                        <tr>
                          <td class ="lebar1">THERMOLATOR DEVIASI</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">'; 
                          if($row['sinyal1'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
    
                        <tr>
                          <td style="border-left: 1px solid #000000;"> THERMOLATOR BOCOR</td>
                          <td style="text-align:center;border-right: 1px solid #000000;">';
                          if($row['sinyal2'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>

                        <tr>
                          <td style="border-left: 1px solid #000000;border-Bottom: 1px solid #000000;"> THERMOLATOR PUMP FAIL</td>
                          <td style="text-align:center;border-right: 1px solid #000000;border-bottom: 1px solid #000000;">';
                          if($row['sinyal3'] == 0) {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L1.png"></div>';}
                          else {echo '<div class="border"><img src="http://10.100.2.130/Thermolator/L2.png"></div>';}
                          echo'
                          </td>
                        </tr>
                        </table>
                        </td>
                        <td class="lebar">
                        </td>';
                    }
                      echo'
                      </tr>
                    </table>
                  <div style="height:28px;">
                  </div>
                  <footer>
                  <p>&copy;PT Vision Ease Asia, 2021</p>
                  </footer>';      
                }
            }
            return json_encode($data);
        }

        $data['status'] = false;
        $data['message'] = 'data operation failed';
        return json_encode($data);
    }
    
    public function execute_query1($sql, $data = [], $is_read = null)
    {
        $executed = $this->connection->query($sql);
        if ($executed == TRUE)
        {
            if (!is_null($is_read) && $is_read)
            {
                if($executed->num_rows != 0)
                {
                  $y=0;
                  echo'
                  <div id="hilang" class="judul">HISTORY</div>
                  <div class="t2">
                  </div>
                  <table style="width:100%;">
                    <tr>
                      <td style="border-right:3px solid #000000; width:50%">';
                        for ($x = 1; $x <= 5; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 6; $x <= 10; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 11; $x <= 15; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 16; $x <= 20; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 21; $x <= 25; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 26; $x <= 30; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 31; $x <= 35; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 36; $x <= 40; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 41; $x <= 45; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 46; $x <= 50; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                        <div class="t3">
                        </div>';
                        for ($x = 51; $x <= 55; $x++) 
                        {
                          echo "<a class='but' href='index.php?history=thermo${x}'>Thermolator ${x}</a>";
                        }
                        echo'
                      </td>
                      <td>
                        <table style="margin-left: auto; margin-right: auto; width: 450px;">
                          <thead style="display:table; width:100%;">
                            <tr>
                              <th style = "width:4%; padding:8px;">No</th>
                              <th style = "width:32%; padding:8px;">Alarm</th>
                              <th style = "width:33%; padding:8px;">Waktu</th>
                            </tr>
                          </thead>
                          <tbody style="display:block; overflow:auto; height:500px; float:left; width:100%;>';
                          while($row = $executed->fetch_assoc())
                          {
                            $y=$y+1;
                            echo '<tr style="display:table-row-group; width:100%;">';
                              echo "<td style='border: 1px solid #000000;text-align: center; width:7.5%; padding:8px;'>" . $y . "</td>";
                              echo "<td style='border: 1px solid #000000;text-align: center; width:35%; padding:8px;'>" . $row['problem'] . "</td>";
                              echo "<td style='border: 1px solid #000000;text-align: center; width:33%; padding:8px;'>" . $row['jam'] . "</td>";
                            echo "</tr>";
                          }
                        echo'
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <div class="t3">
                  </div>
                  <footer>
                  <p>&copy;PT Vision Ease Asia, 2021</p>
                  </footer>';      
                }
            }
            return json_encode($data);
        }

        $data['status'] = false;
        $data['message'] = 'data operation failed';
        return json_encode($data);
    }

    private function cors() {
        // Allow from any origin
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
            // you want to allow, and if so:
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }
    
        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                // may also be using PUT, PATCH, HEAD etc
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
    
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    
            exit(0);
        }
    }
}
?>

</body>
</html>