<?= $this->extend('users/layout') ?>

<?= $this->section('content') ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 colTitle">
                <h1>New User</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= \Config\Services::validation()->listErrors(); ?>
                <form method="post" action="/users" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label>Avatar: </label>
                        <input type="file"  
                                class="form-control" 
                                name="user_avatar" 
                                id="user_avatar" 
                                required/>
                    </div>

                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input type="text" 
                                name="user_name" 
                                class="form-control" 
                                id="user_name" 
                                placeholder="Username" 
                                required>
                    </div>

                    <div class="form-group">
                        <label for="user_prof">Profession</label>
                        <input type="text" 
                                name="user_prof" 
                                class="form-control" 
                                id="user_prof" 
                                placeholder="Profession" 
                                required>
                    </div>

                    <div class="form-group">
                        <label for="user_exp">Experience</label>
                        <input type="text" 
                                name="user_exp" 
                                class="form-control" 
                                id="user_exp" 
                                placeholder="Experience" 
                                required>
                    </div>

                    <div class="form-group">
                        <label for="user_phone">Phone</label>
                        <input type="tel" 
                                name="user_phone" 
                                class="form-control" 
                                id="user_phone" 
                                placeholder="123456789" 
                                pattern="[0-9]{9}" 
                                required>
                        <small>Format: 12345678</small>
                    </div>

                     <div class="form-group">
                        <label for="user_loc">Location</label>
                        <input type="text" 
                                name="user_loc" 
                                class="form-control" 
                                id="user_loc" 
                                placeholder="Location" r
                                equired>
                    </div>

                    <div class="form-group">
                        <label for="user_email">Email address</label>
                        <input type="email" 
                                name="user_email" 
                                class="form-control" 
                                id="user_email" 
                                aria-describedby="emailHelp" 
                                placeholder="Enter email" 
                                required>
                    </div>
                    <button type="submit" value = "upload" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
