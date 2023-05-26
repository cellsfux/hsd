
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin - <?= WEB_NAME ?> </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" ></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"  />
  <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.min.css"  />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"  />
  <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/css/vendor.bundle.base.css">
   <!-- Plugin css for this page -->
   <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/quill/quill.snow.css">
   <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/simplemde/simplemde.min.css">
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/css/vertical-layout-light/style.css">
   <!-- endinject -->
   <link rel="shortcut icon" href="<?= URLROOT ?>assets/admin/images/favicon.png" />
   <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendors/lightgallery/css/lightgallery.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <style>
    .jison_conten{
    position: relative;
    align-items: center;
    justify-content: center;
}

.jison_conten:hover .jison_hover{
    display: flex;
}
.jison_hover{
    position: absolute;
    color: #F1EFEF;
    flex-direction: column;
    padding: 1px;
    height: 40px;
    width: 40px;
    justify-content:center;
    align-items: center;
    display: none;
    z-index: 3;
    bottom: 0px;
    background-color: #3F413F;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    -ms-animation-duration: 1s;
    -o-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    -ms-animation-delay: 1s;
    -o-animation-delay: 1s;
    animation-delay: 1s;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -ms-animation-fill-mode: both;
    -o-animation-fill-mode: both;
    animation-fill-mode: both;
}
  </style>
</head>
<body class="with-welcome-text sidebar-dark">
  <div class="container-scroller">
   
    <?php include 'Components/admin/Navebar.php' ?>

    <div class="container-fluid page-body-wrapper">
     
    


      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="<?= URLROOT ?>assets/admin/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= URLROOT ?>assets/admin/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= URLROOT ?>assets/admin/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= URLROOT ?>assets/admin/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= URLROOT ?>assets/admin/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= URLROOT ?>assets/admin/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>

      

      <?php include 'Components/admin/Menu.php'; ?>


         <?= $contenu ?>


        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © <?= WEB_NAME ?> <?= date('Y') ?>. All rights reserved.</span>
          </div>
        </footer>
   
      </div>
    
    </div>
   
  </div>
  
  <script src="<?= URLROOT ?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= URLROOT ?>assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

  <script src="<?= URLROOT ?>assets/admin/vendors/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?= URLROOT ?>assets/admin/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

  <script src="<?= URLROOT ?>assets/admin/vendors/tinymce/tinymce.min.js"></script>
  <script src="<?= URLROOT ?>assets/admin/vendors/quill/quill.min.js"></script>
  <script src="<?= URLROOT ?>assets/admin/vendors/simplemde/simplemde.min.js"></script>


  <script src="<?= URLROOT ?>assets/admin/js/off-canvas.js"></script>
  <script src="<?= URLROOT ?>assets/admin/js/hoverable-collapse.js"></script>
  <script src="<?= URLROOT ?>assets/admin/js/template.js"></script>
  <script src="<?= URLROOT ?>assets/admin/js/settings.js"></script>
  <script src="<?= URLROOT ?>assets/admin/js/todolist.js"></script>

  
  <script src="<?= URLROOT ?>assets/admin/js/editorDemo.js"></script>

  <script src="<?= URLROOT ?>assets/admin/js/form-validation.js"></script>
  <script src="<?= URLROOT ?>assets/admin/js/bt-maxLength.js"></script>
  
  <script> 
  function findimage(){
    $.post('<?= URLROOT ?>admin/findallMedia', function(response) {
          $('#lightgalleryiiiii').html(response)
      });
  }

  function delete_image(i){
    $.post('<?= URLROOT ?>admin/deleteimage/'+i, function(response) {
    // handle response
      });
    $('#maskjison-'+i).toggle();
   // alert(i)
}

function selctedimage(lien){
         $('#exampleModal').modal('hide');
         $('#image_input').val(lien)
         $('#image_preview').attr('src', lien)
}







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

