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
                <form method="post" action="/users/<?=$user['user_id']?>">
                    <input type="hidden" name="_method" value="PUT" />
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input type="text" 
                               name="user_name" 
                               class="form-control" 
                               id="user_name" 
                               placeholder="Username" 
                               value= '<?= $user['user_name']?>' 
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
                               value= '<?= $user['user_email']?>'
                               required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
<?= $this->endSection() ?>