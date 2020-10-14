<?= $this->extend('users/layout') ?>

<?= $this->section('content') ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 colTitle">
                <h1>Update User</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= \Config\Services::validation()->listErrors(); ?>
                <form method="post" action="/users/<?=$user[0]->user_id?>">
                    <input type="hidden" name="_method" value="PUT" />
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input type="text" 
                               name="user_name" 
                               class="form-control" 
                               id="user_name" 
                               placeholder="Username" 
                               value= '<?= $user[0]->user_name?>' 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="user_prof">Profession</label>
                        <input type="text" 
                                name="user_prof" 
                                class="form-control" 
                                id="user_prof" 
                                placeholder="Profession" 
                                value= '<?= $user[0]->user_prof?>'
                                required>
                    </div>

                    <div class="form-group">
                        <label for="user_exp">Experience</label>
                        <input type="text" 
                                name="user_exp" 
                                class="form-control" 
                                id="user_exp" 
                                placeholder="Experience" 
                                value= '<?= $user[0]->user_exp?>'
                                required>
                    </div>

                    <div class="form-group">
                        <label for="user_phone">Phone</label>
                        <input type="tel" 
                                name="user_phone" 
                                class="form-control" 
                                id="user_phone" 
                                placeholder="123-45-678" 
                                pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                value= '<?= $user[0]->user_phone?>'
                                required>
                        <small>Format: 123-45-678</small>
                    </div>

                     <div class="form-group">
                        <label for="user_loc">Location</label>
                        <input type="text" 
                                name="user_loc" 
                                class="form-control" 
                                id="user_loc" 
                                placeholder="Location" 
                                value= '<?= $user[0]->user_loc?>'
                                required>
                    </div>

                    <div class="form-group">
                        <label for="user_email">Email address</label>
                        <input type="email" 
                               name="user_email" 
                               class="form-control" 
                               id="user_email" 
                               aria-describedby="emailHelp" 
                               placeholder="Enter email"
                               value= '<?= $user[0]->user_email?>'
                               required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
<?= $this->endSection() ?>