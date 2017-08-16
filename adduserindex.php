<?php include 'addUser.php';?>
<html>
    <link rel="stylesheet" href="css/adduser.css">
   
    
    <body>
           <form action="" method="post">
        <section id="toplayer">
            <section id="basic" class="inner-section">
                <h5>Basic info</h5>
                <table>
                
                <tr>
                    <td><input type="text" name="first_name" placeholder="First Name" value=<?php echo isset($row['firstname']) ? $row['firstname'] : ''; ?>></td>
                </tr>
                <tr>
                    <td><input type="text" name="last_name" placeholder="Last Name" value=<?php echo isset($row['lastname']) ? $row['lastname'] : ''; ?>></td>
                </tr>
                <tr>
                    <td><input type="text" name="title" placeholder="title" value=<?php echo isset($row['title']) ? $row['title'] : ''; ?>></td>
                </tr>
             
                
                </table>
            </section>
            <section id="contact" class="inner-section">
                <h5>Contact info</h5>
                <table>
                
                <tr>
                    <td><input type="text" name="phone_number" placeholder="phone" value=<?php echo isset($row['phone']) ? $row['phone'] : ''; ?>></td>
                </tr>
                <tr>
                    <td><input type="text" name="address" placeholder="address" value=<?php echo isset($row['address']) ? $row['address'] : ''; ?>></td>
                </tr>
                <tr>
                    <td><input type="text" name="email" placeholder="email" value=<?php echo isset($row['email']) ? $row['email'] : ''; ?>></td>
                </tr>
                
                </table>
            </section>
            <section id="about" class="inner-section">
                <h5>About Me</h5>
                <table>
                
                <tr>
                    <td><input type="text" name="about_me" height="40" ></td>
                </tr>
               
                
                
                </table>
            </section>
        </section>
        <hr>
        
        <section id="social">
            <table>
                
                <tr>
                    <th> Social Networks</th>
                    
                </tr>
                <tr>
                    <td><input type="text" name="facebooklink" placeholder="Facebook Link"></td>
                    <td><input type="text" name="twitterlink" placeholder="Twitter Link"></td>
                </tr>
                <tr>
                    <td><input type="text" name="skypelink" placeholder="Skype Link"></td>
                    <td><input type="text" name="instagramlink" placeholder="Instagram Link"></td>
                </tr>
                <tr>
                    
                     
                     <td><input type="text" name="youtubelink" placeholder="youtube link Link"></td>
                </tr>

                
                </table>
        </section>
        <hr>
        
        <section id="experience">
            <section id="first">
                <table>
                   
                     <tr>
                        <th> Social Networks</th>
                     </tr>
                    <tr>
                        <td><input type="text" name="exptitle1" placeholder="Title"></td>
                        <td><input type="text" name="companyname1" placeholder="Work dates"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="workdates1" placeholder="Company name"></td>
                        <td><input type="text" name="expdescription1" placeholder="Description" class="desc"></td>
                    </tr>
                
                </table>
            </section>
            <section id="second">
                <table>
                    
                   
                    <tr>
                        <td><input type="text" name="exptitle2" placeholder="Title"></td>
                        <td><input type="text" name="companyname2" placeholder="Work dates"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="workdates2" placeholder="Company name"></td>
                        <td><input type="text" name="expdescription2" placeholder="Description" class="desc"></td>
                    </tr>
                
                </table>
            
            </section>
            <section id="third">
                <table>
                    
                   
                    <tr>
                        <td><input type="text" name="exptitle3" placeholder="Title"></td>
                        <td><input type="text" name="companyname3" placeholder="Work dates"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="workdates3" placeholder="Company name"></td>
                        <td><input type="text" name="expdescription3" placeholder="Description" class="desc"></td>
                    </tr>
                
                </table>
            </section>
        </section>
        <hr>
        
        <section id="skills">
                <table>
                    
                     <tr>
                        <th> Pro skills</th>
                         <th> Per skills</th>
                     </tr>
                    <tr>
                        <td><input type="text" name="prolevel1" placeholder="Some skill level(number)"></td>
                        <td><input type="text" name="perlevel1" placeholder="Some skill level(number)"></td>

                    </tr>
                    <tr>
                        <td><input type="text" name="prolevel2" placeholder="Some skill level(number)"></td>
                        <td><input type="text" name="perlevel2" placeholder="Some skill level(number)"></td>
                    </tr>
                        
                    <tr>
                        <td><input type="text" name="prolevel3" placeholder="Some skill level(number)"></td>
                        <td><input type="text" name="perlevel3" placeholder="Some skill level(number)"></td>
                    </tr>
                     <tr>
                        <td><input type="text" name="prolevel4" placeholder="Some skill level(number)"></td>
                        <td><input type="text" name="perlevel4" placeholder="Some skill level(number)"></td>
                    </tr>    
                    
                
                </table>
        </section>
        <hr>
        <section id="education">
            <section >
                   <table>
                    
                     <tr>
                        <th> Education</th>
                     </tr>
                    <tr>
                        <td><input type="text" name="edutitle1" placeholder="Title"></td>
                        <td><input type="text" name="place2" placeholder="place"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="edudate1" placeholder="Education dates"></td>
                        <td><input type="text" name="edudescription1" placeholder="Description" class="desc"></td>
                    </tr>
               
                </table>
            </section>
            <section id="second">
                <table>
                    
                   
                    <tr>
                        <td><input type="text" name="edutitle2" placeholder="Title"></td>
                        <td><input type="text" name="place2" placeholder="place2"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="edudate2" placeholder="Education dates"></td>
                        <td><input type="text" name="edudescription2" placeholder="Description" class="desc"></td>
                    </tr>
                
                </table>

                </section>
        </section>
        <hr>
        <section id="hobbies" class="bottom-section">
                <table>
                    
                    <tr>
                        <td><label><input type="checkbox" name="sport" >sport</label></td>  
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="reding">reding</label></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="swimming" > swimming</label></td>  
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="programming">programming</label></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="sleeping" >sleeping</label></td>  
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="doing nothing">doing nothing</label></td>
                    </tr>
                
                </table>
 
        </section>
        <section id="languages" class="bottom-section">
            <table>
                    
                     <tr>
                        <th> Languages</th>
                         
                     </tr>
                    <tr>
                        <td><input type="text" name="hebrew" placeholder="Hebrew level (number)"></td>
                        

                    </tr>
                    <tr>
                        <td><input type="text" name="english" placeholder="English level (number)"></td>
                       
                    </tr>
                        
                    <tr>
                        <td><input type="text" name="russian" placeholder="Russian level(number)"></td>
                        
                    </tr>
                     <tr>
                        <td><input type="text" name="italian" placeholder="Italian level(number)"></td>
                       
                    </tr>    
                    
                
                </table>
        </section>
        
        
        
        
             <section>
            <input type="submit" value="Add User">
             </section>
        </form>
    </body>






</html>