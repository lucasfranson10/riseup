<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile options - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/css/profile.css" rel="stylesheet">
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6 offset-md-3 offset-lg-3">
        <div class="mb-2">
          <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?= $user['user_name'] ?></h4>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Profession:</span>
              <label class="media-body">Design</label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Experience: </span>
              <label class="media-body">10  Years</label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Phone: </span>
              <label class="media-body">789 456 1230</label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Email: </span>
              <label class="media-body"><?= $user['user_email'] ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Location: </span>
              <label class="media-body">5557 Cottey St Fort Worth, Texas(TX), 76119, New York, USA</label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</body>
</html>