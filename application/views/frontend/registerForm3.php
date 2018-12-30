
<div class="container">
    <div class="row main col-sm-offset-3 col-sm-6">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Registrace</h1>
                <hr />
            </div>
        </div> 
        <div class="main-login main-center">
            <strong>Políčka označená hvězdičkou jsou povinná.</strong> 
            <?php
            $attributes = array(
                'method' => 'post',
                'accept-charset' => "UTF-8",
                'role' => 'form'
            );


            echo form_open('register-finish3', $attributes);
            ?>



            <div class="form-group <?php echo $this->session->data['name']->status;?>">
                <label for="name" class="cols-sm-2 control-label">Jméno *</label>
                <p class="text-warning"><?php echo $this->session->data['name']->message; ?> </p>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input data-toggle="tooltip" title="Povinná položka" type="text" class="form-control" name="name" id="name"  placeholder="Vlož křestní jméno" value="<?php echo $this->session->data['name']->value; ?>" />
                    </div>

                </div>
            </div>

            <div class="form-group <?php echo $this->session->data['surname']->status;?>">
                <label for="surname" class="cols-sm-2 control-label">Příjmení *</label>
                <p class="text-warning"><?php echo $this->session->data['surname']->message; ?> </p>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="surname" id="name"  placeholder="Vlož příjmení" value="<?php echo $this->session->data['surname']->value; ?>"/>
                    </div>
                </div>
            </div>  

            <div class="form-group <?php echo $this->session->data['email']->status;?>">
                <label for="email" class="cols-sm-2 control-label">Email *</label>
                <p class="text-warning"><?php echo $this->session->data['email']->message; ?> </p>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="email" id="email"  placeholder="Vlož email" value="<?php echo $this->session->data['email']->value; ?>"/>
                    </div>
                </div>
            </div>

            <div class="form-group <?php echo $this->session->data['username']->status;?>">
                <label for="username" class="cols-sm-2 control-label">Uživatelské jméno *</label>
                <p class="text-warning"><?php echo $this->session->data['username']->message; ?> </p>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="username" id="username"  placeholder="Vlož uživatelské jméno" value="<?php echo $this->session->data['username']->value; ?>"/>
                    </div>
                </div>
            </div>

            <div class="form-group <?php echo $this->session->data['password']->status;?>">
                <label for="password" class="cols-sm-2 control-label">Heslo *</label>
                <p class="text-warning"><?php echo $this->session->data['password']->message; ?> </p>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Vlož heslo" value="<?php echo $this->session->data['password']->value; ?>"/>
                    </div>
                    <span id="helpBlockPassword" class="help-block">Heslo musí mít minimálně <?php echo $omezeni[0]; ?> a maximálně <?php echo $omezeni[1]; ?> znaků.</span>
                </div>
            </div>

            <div class="form-group <?php echo $this->session->data['confirm']->status;?>">
                <label for="confirm" class="cols-sm-2 control-label">Potvrzení hesla *</label>
                <p class="text-warning"><?php echo $this->session->data['confirm']->message; ?> </p>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Heslo ještě jednou" value="<?php echo $this->session->data['confirm']->value; ?>"/>
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





