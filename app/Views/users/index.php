<?= $this->extend('users/layout') ?>

<?= $this->section('content') ?>

<div class="container">
	<div class="row">
		<div class="col-md-3 createBtn">
			<a href="/users/create" class="btn btn-primary" role="button">Create a new user</a>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="main-box clearfix">
				<div class="table-responsive">
					<table class="table user-list">
						<thead>
							<tr>
								<th><span>User</span></th>
								<th><span>Created</span></th>
								<th class="text-center"><span>Status</span></th>
								<th><span>Email</span></th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							
							<?php foreach($user as $user):?>
								<tr>
									<td>
										<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
										<a href="#" class="user-link"> <?= $user->user_name ?> </a>
									</td>
									<td>
										<?= '20/3/2014' ?>
									</td>
									<td class="text-center">
										<span class="label label-default">Inactive</span>
									</td>
									<td>
										<a href="#"> <?= $user->user_email ?></a>
									</td>
									<td style="width: 20%;">
										<a href="/users/<?= $user->user_id ?>" class="table-link">
											<span class="fa-stack">
												<i class="fa fa-square fa-stack-2x"></i>
												<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
											</span>
										</a>
										<a href="/users/<?= $user->user_id ?>/edit" class="table-link">
											<span class="fa-stack">
												<i class="fa fa-square fa-stack-2x"></i>
												<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
											</span>
										</a>
										<a href="/users/<?= $user->user_id ?>/delete" class="table-link danger">	
											<span class="fa-stack">
												<i class="fa fa-square fa-stack-2x"></i>
												<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
											</span>
										</a>
									</td>

								</tr>
								
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<!-- <ul class="pagination pull-right">
					<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
				</ul> -->
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>