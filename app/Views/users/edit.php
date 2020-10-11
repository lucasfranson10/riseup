<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>User list page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <!-- <style type="text/css"> </style> -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
			    <a href="/users" class="btn btn-primary" role="button">Home</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
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
    
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>