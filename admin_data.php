<?php
error_reporting(0);
if (!$acc) {
    exit("not allowed");
} else 
if ($acc) {
    include 'header_of_data.php';
    // appoiment tablei
    include 'php/table_appo.php';
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    if ($conn->connect_error) {
        die("Connection Failed:" . $conn->connect_error);
    }
    $sql = "SELECT `sr_no`, `first_name`, `last_name`, `city`, `speciailty`, `perfect-time`, `zip_code`, `appo_date`, `current_time` FROM `appointment`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["sr_no"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td> <td>" . $row["city"] . "</td><td>" . $row["speciailty"] . "</td> <td>" . $row["perfect-time"] . "</td><td>" . $row["zip_code"] . "</td> <td>" . $row["appo_date"] . "</td></tr>";
            // echo '<tr class="table_data"><td>' . $row["sr_no"] . "</td> <td>" . $row["first_name"] . "</td> <td>" . $row["last_name"] . "</td> <td>" . $row["city"] . "</td><td>" . $row["speciailty"] . "</td> <td>" . $row["perfect_time"] . "</td><td>" . $row["zip_code"] . "</td> <td>". $row["appo_date"]."</td> </tr>";
        }
        echo "</table>";
    } else {
        echo " 0 result found";
    }
    $conn->close();
    echo '</div>';




    //    Delete recordes 
    // include 'php/delete_recoreds.php';
    // $record = false;
    // if (isset($_POST['id_no'])) {
    //     $server = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $db = "hospital";
        
    //     $con = mysqli_connect($server, $username, $password, $db);

    //     if (!$con) {
    //         die("connection not sucesss" . mysqli_connect_error());
    //     }
    //     $data_table = $_POST['data_delete'];
    //     $user_id = $_POST['id_no'];
    //     $appo = "appointment";
    //     $contac_us = "contact_us";


    //     if ($data_table == $appo) {
    //         $query = "DELETE FROM `appointment` WHERE `appointment`.`sr_no` = $user_id";
    //         $result = mysqli_query($con, $query);

    //         if ($result) {
    //             $record = true;
    //         } else {

    //             echo "Data Not Found";
    //         }
    //     } else if ($data_table == $contac_us) {

    //         $query = "DELETE FROM `contact_us` WHERE `contact_us`.`sr_no` = $user_id";

    //         $result = mysqli_query($con, $query);

    //         if ($result) {
    //             $record = true;
    //         } else {

    //             echo "Data Not Found22";
    //         }
    //     } else {
    //         echo '<h1 style="color: red;">Please insert Valid Data</h1>';
    //     }
    //     $con->close();
    // }
    // echo '</div>
    //             </div>';


    // Contac us table 


    include 'php/table_contac.php';
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    if ($conn->connect_error) {
        die("Connection Failed:" . $conn->connect_error);
    }
    $sql = "SELECT `sr_no`, `first_name`, `last_name`, `mobile_no`, `current_time` FROM `contact_us`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["sr_no"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["mobile_no"] . "</td><td>" . $row["mobile_no"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo " 0 result found";
    }
    $conn->close();
    echo '</div>';

    // footer
    include 'footer.php';
}
?>
