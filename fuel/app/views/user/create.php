       <div class="login" >
            <h1><span id="neogen">Create User</span></h1>
            <br />
            <?php echo Form::open('index.php/login/verify'); ?>
            <input name='name' type='text' placeholder='Name'required autofocus /> 
            <br>
            <input name='password' type='password' placeholder='Password'required  /> 
            <br>
            <input type='submit' value='Create' class='btn'/>
            
            <?php echo Form::close(); ?>

        </div>
