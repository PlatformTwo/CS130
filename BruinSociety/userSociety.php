<?php
    // This php file is responsible for requests that involves handling the relationship between societies and members
    $con=mysqli_connect("127.0.0.1","root","","social_network") or die ("Connection was not established");
    /**
    * This function prints the ids and names of all the members in a society given the society id.
    * @return void The function returns void and prints the member information of a certain society. 
    */
    function getSocietyMembers() {
        global $con;
        echo "aaa<br>";
        if(isset($_POST['getMembers'])) {
            $id = mysqli_real_escape_string($con,$_POST['s_id']);
            echo $id;
            $query = "select user_society.user_id, users.user_name from user_society inner join users on user_society.id = $id AND user_society.user_id = users.user_id";
            $result = mysqli_query($con,$query);
            $check = mysqli_num_rows($result);
            if($check < 1) {
                echo "No users found for the society!";
            } else {
                while($row = mysqli_fetch_assoc($result)) {   
                    print"<br>";
                    print "$row[user_id]<br>";
                    print "$row[user_name]";
                    print "<br><br>";
                }
            }
        }
    }

    /**
    * This function prints the ids and names of all the members in a society given the society id.
    * @return void The function returns void and prints the member information of a certain society. 
    */
    function getSocieties() {
        global $con;
        if(isset($_POST['getMembers'])) {
            $id = mysqli_real_escape_string($con,$_POST['s_id']);
            echo $id;
            $query = "select user_society.user_id, users.user_name from user_society inner join users on user_society.id = $id AND user_society.user_id = users.user_id";
            $result = mysqli_query($con,$query);
            $check = mysqli_num_rows($result);
            if($check < 1) {
                echo "No users found for the society!";
            } else {
                while($row = mysqli_fetch_assoc($result)) {   
                    print"<br>";
                    print "$row[user_id] ";
                    print "$row[user_name]";
                    print "<br><br>";
                }
            }
        }
    }


?>