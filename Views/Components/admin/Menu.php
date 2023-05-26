<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
      
          <li class="nav-item">
            <a class="nav-link" href="<?= URLROOT ?>admin">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            </a>
          </li>

        
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Blog</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= URLROOT ?>admin/page/blog">Tous les Articles</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= URLROOT ?>admin/page/blog/createblog">Ajouter un article</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basicss" aria-expanded="false" 
            aria-controls="ui-basicss">
            <i class="menu-icon mdi mdi-file-image-outline"></i>
              <span class="menu-title">Media Storage</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basicss">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= URLROOT ?>admin/page/media">Medias storage</a></li>
              
              </ul>
            </div>
          </li>


     

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-services" aria-expanded="false" aria-controls="ui-services">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Services</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-services">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= URLROOT ?>admin/page/services">Services</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= URLROOT ?>admin/page/services/addservice">Ajouter un service</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-company" aria-expanded="false" aria-controls="ui-company">
               <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Company</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-company">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= URLROOT ?>admin/page/aboute">Apropos</a></li>
               
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#user_ui" aria-expanded="false" aria-controls="user_ui">
               <i class="menu-icon mdi mdi-account-outline"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="user_ui">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= URLROOT ?>admin/page/users">Users</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= URLROOT ?>admin/page/adduser">Add User</a></li>
              </ul>
            </div>
          </li>

       

          <li class="nav-item">
            <a class="nav-link" href="<?= URLROOT ?>admin/disconnect">
              <i class="menu-icon mdi mdi-logout"></i>
              <span class="menu-title">Se deconnecter</span>
            </a>
          </li>
        </ul>
      </nav>