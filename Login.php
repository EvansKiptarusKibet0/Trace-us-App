<?php
 echo '<section id="main">
        
            <aside id="sidebar">
                <div class="dark">
				<fieldset>
                <legend>Login;</legend>
                <p><img src="img/login1.PNG"></p>
               <form method="post" action="db_login">
                   <div>
                    <label>Username;</label><br>
                    <input type="text" name="username" placeholder="Enter name..."/>
                   </div>

                   <div>
                  <label>Password:</label>
                  <input type="password" name="pass" placeholder="enter password..">
                   </div>

                      <div>
                            <button type="submit" class="button_1">Send</button>
                      </div>
					  <p>Not have an Account? <a href="Account.php">Register</a></p>
					  <p>If security officer <a href="policeLogin.php">Login here</a></p>


               </form>
			   </fieldset>
                   </div>
            </aside>

        </div>

    </section>



';

?>