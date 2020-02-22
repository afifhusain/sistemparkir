
<div class="main">

<div class="container center">


<div class="col s12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">directions_car</i></h2>
            <h5 class="center">Login Sistem Parkir</h5>

            <p class="light"></p>
          </div>
        </div>
 




    <form method="post" action="<?= base_url('masuk');?>">
   
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text"  name="username">
          <label for="icon_prefix">Username</label>
          <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
        </div>

        

         <div class="input-field">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" name="password" type="password" >
          <label for="icon_telephone">Password</label>
           <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
        </div>    

     

     
      <button class="waves-effect waves-light btn-small" type="submit"><i class="material-icons left">exit_to_app</i>Login</button>

    </form>
  
   </div>
   </div>