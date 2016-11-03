<?php
    /* PHP warns you if you are using an undeclared variable. This happens very often if you are referencing columns from MySQL Search Results, so we turn that off here -Andrew */
    error_reporting(E_ALL ^ E_NOTICE);


    $con=mysqli_connect("127.0.0.1","root","","social_network") or die ("Connection was not established");
    
/**
 * Returns the starting date of the current quarter.
 * Defines the start of each quarter as:
 * Summer Quarter: June 20th
 * Fall Quarter: September 1st
 * Winter Quarter: January 1st
 * Spring Quarter: April 1st
 * These are not exact dates since they vary by year 
 * The dates are in fact a little early, but people will likely start discussing the following quarter before the quarter starts.
 * 
 * @return date The starting date of the current, or most recent quarter.
 */
    function getCurrentQuarter()
    {

        $FallQtrStart = date('Y/09/01 00:00:00');
        $SpringQtrStart = date('Y/04/01 00:00:00');
        $SummerQtrStart = date('Y/06/20 00:00:00');
        $WinterQtrStart = date('Y/01/01 00:00:00');



        $cur_date = date('Y/m/d H:i:s');
        if(strtotime($cur_date) < strtotime($SpringQtrStart))
        {
            return $WinterQtrStart;
        }
        elseif(strtotime($cur_date) < strtotime($SummerQtrStart))
        {
            return $SpringQtrStart;
        }
        elseif(strtotime($cur_date) < strtotime($FallQtrStart))
        {
            return $SummerQtrStart;
        }
        else
        {
            return $FallQtrStart;
        }
    }

?>
