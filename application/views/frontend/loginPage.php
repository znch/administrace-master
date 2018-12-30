<div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <h1>Přihlášení</h1>
                                    <p class="text-warning"><?php echo $message; ?></p>
                                </div>
                            </div>
                            <div class="panel-body">
                                
                                <?php 
                                $attributes = array(
                                    'accept-charset' => "UTF-8",
                                    'role' => 'form',
                                    'class' => 'form-signin',
                                    'method' => 'post',
                                );
                                echo form_open('login-finish', $attributes); ?>
                                
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Vložte uživatelské jméno" id="username" type="text" name="username">
                                        <input class="form-control" placeholder="Vložte heslo" id="password" type="password" name="password">
                                        <br></br>
                                        <input class="btn btn-lg btn-primary btn-block" type="submit" id="login" value="Přihlásit »">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>

