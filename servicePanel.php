<?php
echo '
<section id="main">
        <div class="container">
            <article id="main-col">
                
                   <ul id="services">
                   <li>
				   <fieldset>
				   <legend>Choose the action</legend>';
				   ?>
            <?php include 'selectAction.php'; ?>
					   <?php
					   echo '
					   </fieldset>
                   </li>

                   <li>
				   <fieldset>
				   <legend>View the lost People</legend>
				   <p><a href="processVictim.php">Click to view</a></p>
				   </fieldset>
				 
                   </li>

                   <li>
				   <fieldset>
                       <legend>View Found People</legend>
					   <p><a href="#">Click to view</a></p>
                       </fieldset>
                   </li>

                   </ul>

            </article>
            <div class="windowContent">
			
			
			</div>

        </div>

    </section>



';




?>