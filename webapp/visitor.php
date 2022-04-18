<div class="form-container sign-up-container">

    <form action="signup.php" id="form-id">

        <h1>GUEST REGISTRATION</h1>

        <!--VALIDATIOON FOR ERROR-->

        <?php if (isset($_GET['error'])) { ?>
            <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <span>Make sure all the information is correct.</span>

        <input type="name" name="ru_name" value="<?php
                                                    if (empty($_GET['ru_name'])) {
                                                        echo "";
                                                    } else {
                                                        echo $_GET['ru_name'];
                                                    } ?>" placeholder="Name">


        <!-- PHONE NUMBER CODE INSERT -->




        <input type="email" name="ru_email" value="<?php
                                                    if (empty($_GET['ru_email'])) {
                                                        echo "";
                                                    } else {
                                                        echo $_GET['ru_email'];
                                                    } ?>" placeholder="Email">


        <button>Register</button>


    </form>
</div>