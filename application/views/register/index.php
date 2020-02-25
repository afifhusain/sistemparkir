
<div class="main">

<div class="container center">


<div class="col s12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Halaman Register Akun</h5>

            <p class="light"></p>
          </div>
        </div>
 




    <form method="post" action="<?= base_url('masuk/register');?>">
   
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text"  name="username">
          <label for="icon_prefix">Username</label>
          <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
        </div>


        <div class="input-field">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email"  name="email">
          <label for="icon_telephone">Email</label>
          <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
        </div>

         <div class="input-field">
          <i class="material-icons prefix">vpn_key</i>
          <input id="pas1" name="pas1" type="password" >
          <label for="icon_telephone">Password</label>
       
        <?= form_error('pas1', ' <small  class="text-danger pl-3">', '</small>'); ?>
        </div>    

        <div class="input-field">
          <i class="material-icons prefix">vpn_key</i>
          <input id="pas2" name="pas2" type="password" >
          <label for="icon_telephone">Confirm Password</label>
        </div>    

     
      <button class="waves-effect waves-light btn-small" type="submit"><i class="material-icons left">cloud</i>Register Akun</button>

    </form>
  
   </div>
   </div>