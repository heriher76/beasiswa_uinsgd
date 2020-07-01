<div class="wrapper">
	<div class="nav-side-menu">
		<div class="brand">Brand Logo</div>
		<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

		<div class="menu-list">

			<ul id="menu-content" class="menu-content collapse out">
				<li>
					<a href="<?=base_url('Auth1/dashboard'); ?>">
						<i class="fa fa-dashboard fa-lg"></i> Dashboard</a>
					</a>
				</li>

				<li  data-toggle="collapse" data-target="#products" class="collapsed">
					<a href="#"><i class="fa fa-gift fa-lg"></i> Data Admin <span class="arrow"></span></a>
				</li>
				<ul class="sub-menu collapse" id="products">
					<li><a href="<?=base_url('Auth1/view2'); ?>">Daftar Admin</a></li>
					<li><a href="<?=base_url('Auth1/view3'); ?>">Ganti Password</a></li>
				</ul>

				<li data-toggle="collapse" data-target="" class="collapsed">
					<a href="<?=base_url('Auth1/view4'); ?>"><i class="fa fa-gift fa-lg"></i> Data Peserta <span class="arrow"></span></a>
				</li>
				
			</ul>
		</div>
	</div>
</div>