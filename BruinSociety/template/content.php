
<?php
<!--content area starts-->
        <div id="content">
            <div>
                <img src="images/images_home.png" style="float:left; margin-right:40px;"/>
            </div>
            <div id="form2">
                <form action="" method="post">
                    <h2>Sign Up Here</h2>
                    <table>
                        <tr>
                            <td align="right">UID:</td>
                            <td>
                            <input type="text" name="u_id" placeholder="Enter your university ID" required="required"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Name:</td>
                            <td>
                            <input type="text" name="u_name" placeholder="Enter your name" required="required"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td align="right">Password:</td>
                            <td>
                            <input type="text" name="u_pass" placeholder="Enter your password" required="required"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td align="right">Email:</td>
                            <td>
                            <input type="email" name="u_email" placeholder="Enter your email" required="required"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Year:</td>
                            <td>
                            <select type="text" name="u_year"  required="required">
                            <option>Select year</option>
                            <option>Freshman</option>
                            <option>Sophomore</option>
                            <option>Junior</option>
                            <option>Senior</option>
                            </select>
                            </td>
                        </tr>
//                        <tr>
//                            <td align="right">user agreement:</td>
//                            <td>
//                                
//                            <select type="Text" name="u_agree"  required="required">
//                            <option>Agree</option>
//                            <option>Disagree</option>
//                            <td>
//                                <a href="http://www.deanofstudents.ucla.edu/Academic-Integrity"> User agreement form</a>
//                                </td>
//							</td>
                        <tr>
                        <td>
                            <td colspan="6">
                        <button name="sign_up">Sign Up
                            </button>
                        </td>
                        </tr>
                    </table>
                </form>
                <?php 
                include("user_insert.php");
                ?>
            </div>
        </div>
        <!-- content area ends-->
?>