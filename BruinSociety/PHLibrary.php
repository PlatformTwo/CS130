<?php
/**
 * Displaying Posts
 * PrintSocietyPosts prints out the discussion posts from a society.
 * 
 * @param string $socName A string of the name of the society whose posts you want to print.
 * @param string $sortOpt A string representing the sorting option. The default is
 * @param string $filterOpt A string representing the filter option. 
 * @return void The function does not return a value. It just prints posts.
 */
    function PrintSocietyPosts($socName, $sortOpt="", $filterOpt="")
    {
        global $con;
        $socID = getSocID($socName);


        $query = getQuery($sortOpt, $filterOpt);

        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($result))
        {
            $poster_query="select user_name from users where user_id = $row[poster_id]";
            $poster_result=mysqli_query($con,$poster_query);
            $poster=mysqli_fetch_assoc($poster_result)[user_name];
            print "$row[title]<br>";
            print "Posted on $row[date] by $poster";
            print "<br><br>";
        }
        return;
    }


/**
 * Description
 * @return int The function returns the integer 
 */
    function getSocID(){
        global $con;
        if(isset($_POST['search'])){
            $soc_name = mysqli_real_escape_string($con,$_POST['soc_name']);
            $query="select id from societies where name='$soc_name'";
            $result=mysqli_query($con,$query);
            if(!$result)
            {
                print "Query failed";
            }
            return mysqli_fetch_assoc($result)[id];

        }
    }





    function getQuery($sortOpt, $filterOpt)
    {
        switch($sortOpt)
        {
            case 0:
                print "Default Sorting:<br>";
                $query = "select * from posts where society_id=$id";
                break;
            case 1:
                print "Descending Date Sorting:<br>";
                $query = "select * from posts where society_id=$id order by date desc";
                break;
            case 2:
                print "Ascending Date Sorting:<br>";
                $query = "select * from posts where society_id=$id order by date asc";
                break;
            case 3:
                print "Ascending Name Sorting:<br>";
                $query = "select * from posts, users where posts.society_id=$id and users.user_id = posts.poster_id order by users.user_name asc";
                break;
            case 4:
                print "Descending Name Sorting:<br>";
                $query = "select * from posts, users where posts.society_id=$id and users.user_id = posts.poster_id order by users.user_name desc";
                break;
            default:
                print "Invalid sorting option provided.";
                $query = "select * from posts where society_id=$id";
                break;
        }
    }


?>