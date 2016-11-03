<?php
    // This php file is responsible for requests that involves handling the relationship between societies and members
    $con=mysqli_connect("127.0.0.1","root","","social_network") or die ("Connection was not established");

    // TODO: create APIs for join/ quit a society

    /**
    * This function prints the ids and names of all the members in a society given the society id.
    * @return void The function returns void and prints the member information of a certain society. 
    */
    function getSocietyMembers() {
        global $con;
        if(isset($_POST['getMembers'])) {
            $id = mysqli_real_escape_string($con,$_POST['s_id']);
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
    * This function prints the ids and names of all the societies that a member is in.
    * @return void The function returns void and prints all the societies that a user is in.
    */
    function getSocieties() {
        global $con;
        if(isset($_POST['getSocieties'])) {
            $id = mysqli_real_escape_string($con,$_POST['u_id']);
            $query = "select societies.id, societies.name from societies inner join user_society on user_id = $id and societies.id = user_society.id ";
            $result = mysqli_query($con,$query);
            $check = mysqli_num_rows($result);
            if($check < 1) {
                echo "No societies found for the user!";
            } else {
                while($row = mysqli_fetch_assoc($result)) {   
                    print"<br>";
                    print "$row[id] ";
                    print "$row[name]";
                    print "<br><br>";
                }
            }
        }
    }

    /**
    * This function returns the number of members in a society given a society id
    * @param int $societyId The id of the society
    * @return void The function returns void and prints the member information of a certain society. 
    */
    function getNumMembers($societyId) {
        global $con;
        echo "hey there";
        $query = "select count(user_society.user_id) as user_count from user_society inner join users on user_society.id = $societyId and user_society.user_id = users.user_id";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result);
        $count = $row[user_count];
        echo $count;
        return $count;
    }
?>