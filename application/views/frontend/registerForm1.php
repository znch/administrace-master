
<div class="container">
    <div class="row main col-sm-offset-3 col-sm-6">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Registrace</h1>
                <hr />
            </div>
        </div> 
        <div class="main-login main-center">

            <?php
            $attributes = array(
                
                'method' => 'post',
                'accept-charset' => "UTF-8",
                'role' => 'form'
            );


            echo form_open('register-finish1', $attributes);
            ?>



            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Jméno</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input data-toggle="tooltip" type="text" class="form-control" name="name" id="name"  placeholder="Vlož křestní jméno"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="surname" class="cols-sm-2 control-label">Příjmení</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="surname" id="name"  placeholder="Vlož příjmení"/>
                    </div>
                </div>
            </div>  

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Email</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="email" id="email"  placeholder="Vlož email" />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Uživatelské jméno</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="username" id="username"  placeholder="Vlož uživatelské jméno"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Heslo</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Vlož heslo"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label">Potvrzení hesla</label>
                <p class="text-warning"><?php echo $this->session->message; ?> </p>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Heslo ještě jednou" />
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <input class="btn btn-lg btn-primary btn-block" type="submit" id="register" value="Registrovat">	
            </div>

            </form>

        </div>
    </div>
</div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


