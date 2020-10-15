<?= $this->extend('users/layout') ?>

<?= $this->section('content') ?>

<div class="container main ">
    <div class="row rowTitle">
      <div class="col-lg-5 col-md-6 offset-md-3 offset-lg-3">
        <div class="mb-2">
          <img class="w-100" src="<?= $serv['hostname'].":".$serv['port'].$user[0]->user_avatar?>" alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?= $user[0]->user_name ?></h4>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Profession:</span>
              <label class="media-body"><?= $user[0]->user_prof ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Experience: </span>
              <label class="media-body"><?= $user[0]->user_exp ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Phone: </span>
              <label class="media-body"><?= $user[0]->user_phone ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Email: </span>
              <label class="media-body"><?= $user[0]->user_email ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Location: </span>
              <label class="media-body"><?= $user[0]->user_loc ?></label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection() ?>