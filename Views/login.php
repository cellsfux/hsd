
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= WEB_NAME ?> </title>

  <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/css/vertical-layout-light/style.css">

  <link rel="shortcut icon" href="<?= URLROOT ?>assets/admin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <?= WEB_NAME ?>
              </div>
              <h4><?= Saluer() ?>,  Bienvenu</h4>
              <h6 class="fw-light">Identifier vous pour continuer.</h6>
              <form class="pt-3" id="form-submit" data-url="<?= URLROOT ?>login/loginparam">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="pass" placeholder="Password">
                </div>
                <div id="result"></div>
                <div class="mt-3">
                  <button data-text="Se connecter" id="btn-save" data-before="Please wait..." class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" 
                  >Se connecter</button>
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  
  </div>
  
  <script src="<?= URLROOT ?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= URLROOT ?>assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  
  <script src="<?= URLROOT ?>assets/admin/js/off-canvas.js"></script>
  <script src="<?= URLROOT ?>assets/admin/js/hoverable-collapse.js"></script>
  <script src="<?= URLROOT ?>assets/admin/js/template.js"></script>
  <script src="<?= URLROOT ?>assets/admin/js/settings.js"></script>
  <script src="<?= URLROOT ?>assets/admin/js/todolist.js"></script>

  <script>
    
$(document).ready(()=>{
        $('#form-submit').on('submit', (e)=>{

           e.preventDefault();
          let  form= e.target;

          $.ajax({
              url:$('#form-submit').data('url'),
              type:'POST',
		          data:new FormData(form),
		          processData: false,
		          contentType: false,
		         cache: false,
		         timeout: 600000,
             dataType:'json',
             beforeSend:function(){
                  $('#btn-save').text($('#btn-save').data('before'))
             },success:function(response){
              $('#btn-save').text($('#btn-save').data('text'))
              if(response.error){
                $('#result').html('<strong class="text-danger text-center">'+response.message+'</strong>')
              }else if(response.url){
                window.location=response.url;
              }
              else{
                $('#form-submit')[0].reset();
                $('#image_preview').attr('src', '')
                $('#result').html('<strong class="text-success text-center">'+response.message+'</div> ')
              }
              
             }
            
          })



        })
         

       })

  </script>

</body>

</html>
