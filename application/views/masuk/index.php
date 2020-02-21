
<div class="main">

<div class="container center">


<div class="col s12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Halaman Register Akun</h5>

            <p class="light"></p>
          </div>
        </div>
 




    <form method="post" action="<?= base_url();?>/masuk/registrasi">
   
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text" class="validate" name="username">
          <label for="icon_prefix">Username</label>
        </div>


        <div class="input-field">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email">
          <label for="icon_telephone">Email</label>
        </div>

         <div class="input-field">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" name="password" type="password" class="validate">
          <label for="icon_telephone">Password</label>
        </div>    

        <div class="input-field">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password2" name="password2" type="password" class="validate">
          <label for="icon_telephone">Confirm Password</label>
        </div>    




     
      <button class="waves-effect waves-light btn-small" type="submit"><i class="material-icons left">cloud</i>Register Akun</button>

    </form>
  
   </div>
   </div>