<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block">
              <img src="<?php echo base_url('assets/img/logo_login.jpeg')?>" alt="" width="500">
            </div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <img src="<?php echo base_url('assets/img/sucofindo.svg')?>" alt="sucovindo" width="100">
                </div>
                <br>
                <form action="<?php echo base_url('login/aksi_login'); ?>" class="user" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" placeholder="Email..." required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                  </div>
                  <div class="text-right py-1 mr-2">
                    <a class="small" href="#">Lupa Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <h6 class="text-center" style="color: DarkGray;"> Assembled @2020 </h6> 
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>