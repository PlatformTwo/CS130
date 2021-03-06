<?php 
/**
 * @author Andrew Lin
 * @version 1.0
 * The functions in this file are part of our PHLibrary, or our Post Handling Library. 
 * The functions currently included are PrintSocietyPosts, getSocID, getQuery, and curQtr. 
 * More specific documentation is available below.
 * While some of these functions call on each other, their interface is not expected to change, and newly introduced options are not expected to affect the logic behind any function other than the one that actually uses it.
*/


include_once "functions/functions.php";
/**
 * @api
 * @param type $socName 
 * @return 
 */
function printWithoutSortingorFiltering($socName)
{
    PrintSocietyPosts($socName);
}
function printOnlySort($socName, $sortOpt)
{
    PrintSocietyPosts($socName, $sortOpt);
}
function printOnlyFilter($socName, $filterOpt, $filterArg="none")
{
    PrintSocietyPosts($socName, $filterOpt, $filterArg);
}
function printSortAndFilter($socName, $sortOpt, $filterOpt, $filterArg ="none")
{
    PrintSocietyPosts($socName, $sortOpt, $filterOpt, $filterArg);
}


/**
 * Displaying Posts
 * PrintSocietyPosts prints out the discussion posts from a society.
 * 
 * @param string $socName A string of the name of the society whose posts you want to print.
 * @param string $sortOpt A string representing the sorting option. The default is
 * @param string $filterOpt A string representing the filtering option chosen by the user.
 * @param string $filterArg A string representing the argument for the chosen filter option.
 * @return void The function does not return a value. It just prints posts.
 */
    function PrintSocietyPosts($socName, $sortOpt="none", $filterOpt="none", $filterArg="none")
    {
        global $con;
        $socID = getSocID($socName);
        $query = getQuery($socID, $sortOpt);
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($result))
        {
            $poster_query="select * from users where user_id = $row[poster_id]";
            $poster_result=mysqli_query($con,$poster_query);
            $poster=mysqli_fetch_assoc($poster_result);

            if(filterPosts($filterOpt, $filterArg, $row, $poster)){
                print "$row[title]<br>";
                print "Posted on $row[date] by $poster[user_name]";
                print "<br><br>";
            }


        }
        return;
    }


/**
 * getSocID converts a society's name to a society's ID 
 * Looks it up in our societies table in our database.
 * 
 * @param string $soc_name The EXACT name of the society that you want to get the ID for.
 * @return int Returns the integer ID of the society passed in.
 */

    function getSocID($soc_name){
        global $con;
        $query="select id from societies where name='$soc_name'";
        $result=mysqli_query($con,$query);
        if(!$result)
        {
            print "getSocID query failed";
        }
        $socID = mysqli_fetch_assoc($result)[id];
        $result->close();
        return $socID;
    }
    

/**
 * Provides a SQL query for all the posts of a given society, sorted in a given manner
 * 
 * The current possible sorting options are 
 * DesDate - Descending Date, or Most Recent Posts first
 * AscDate - Ascending Date, or Oldest Posts first
 * AscUN - Ascending Username, or Alphabetically sorted by Username
 * DesUN - Descending Username, or Reverse Alphabetically sorted by Username
 * AscTitle - Ascending Title, or Alphabetically sorted by Title
 * DesTitle - Descending Title, or reverse alphabetically sorted by title.
 * 
 * 
 * The sorting option is specified by the user client.
 * The client has a prompt for the user, telling them what sorting options they can input. If a new sorting option is added, the client's prompt needs to reflect that change.
 * However, no logic in the system needs to be changed.
 * 
 * @param int $id The society id for the society you want to retrieve the posts from.
 * @param string $sortOpt The string representing the sorting option.
 * @return string A string containing a SQL query for all the posts in a given Society, sorted in a specified manner.
 */
    function getQuery($id, $sortOpt)
    {
        global $con;
        $query;
        switch($sortOpt)
        {
            case DesDate:
                print "Descending Date Sorting:<br>";
                $query = "select * from posts where society_id=$id order by date desc";
                break;
            case AscDate:
                print "Ascending Date Sorting:<br>";
                $query = "select * from posts where society_id=$id order by date asc";
                break;
            case AscUN:
                print "Ascending Name Sorting:<br>";
                $query = "select * from posts, users where posts.society_id=$id and users.user_id = posts.poster_id order by users.user_name asc";
                break;
            case DesUN:
                print "Descending Name Sorting:<br>";
                $query = "select * from posts, users where posts.society_id=$id and users.user_id = posts.poster_id order by users.user_name desc";
                break;
            case AscTitle:
                print "Ascending Title Sorting:<br>";
                $query = "select * from posts where society_id=$id order by title asc";
                break;
            case desTitle:
                print "Descending Title Sorting:<br>";
                $query = "select * from posts where society_id=$id order by title desc";
                break;
            default:
                print "No valid sorting option provided, using default sorting.<br>";
                $query = "select * from posts where society_id=$id";
                break;
        }

        return $query;
    }

/**
 * Takes in a tuple for a post and its poster and filters it out if it doesn't match a filter option and argument.
 * 
 * The filter option is a predefined string corresponding to an implemented filtering option, and the filter argument is an argument for that filtering option.
 * 
 * Filter Options are:
 * curQtr: Only show posts from the current quarter
 * 
 * username: Only show posts from a user whose username matches the given filtering argument.
 * 
 * @param string $filterOpt A string representing the filtering option chosen by the user.
 * @param string $filterArg A string representing the argument for the chosen filter option.
 * @param mysqli_result $post a MySQL tuple from the posts table containing the information of a post.
 * @param mysqli_result $poster a MySQL tuple from the users table containing the information for the poster corresponding to the tuple from $post.
 * @return boolean Returns true if the post should be displayed, or false otherwise.
 */
    function filterPosts($filterOpt, $filterArg, $post, $poster)
    {
        global $con;
        switch($filterOpt)
        {
            case none:
                return true;
                break;
            case curQtr:
                if(strtotime($post[date])<strtotime(getCurrentQuarter()))
                {
                    print $post[date];
                    print getCurrentQuarter();
                    return false;
                }
                break;
            case username:
                if($poster[user_name]!=$filterArg)
                {
                    if($filterArg == "none")
                    {
                        return true;
                    }
                    return false;
                }
                break;
        }
        return true;
    }

?>