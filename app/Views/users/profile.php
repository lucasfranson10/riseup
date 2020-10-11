<?= $this->extend('users/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row rowTitle">
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

  <?= $this->endSection() ?>