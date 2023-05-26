<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">

             <div  style='position:absolute; right:20px; top:10px'>
                 <a href="<?= URLROOT ?>admin/page/blog/createblog" class="btn  btn-success f-right">Ajouter un article</a>
             </div>

        
                
            

              <h4 class="card-title">Tous les Articles</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Created by</th>
                            <th>Status</th>
                            <th>Publish at</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php $i=1; foreach($data as $articles){

                      ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= substr($articles->title, 0, 20) ?></td>
                            <td><?= $articles->by_create ?></td>
                            <td>
                              <label class="badge <?= $articles->status?  'badge-info':'badge-dark'?>">
                              <?= $articles->status?  'Publié':'Non publié'?>
                            </label>
                            </td>
                            
                            <td> <?= $articles->status?  $articles->update_at:'En attante'?></td>
                            <td><?= $articles->created_at ?></td>
                            <td>
                            <div class="dropdown">
                          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Options
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                            <h6 class="dropdown-header">Actions</h6>
                            <a class="dropdown-item" href="<?= URLROOT ?>admin/deletearticle/<?= $articles->_id ?>">Supprimer</a>
                            <a class="dropdown-item" onclick="actions(`<?= URLROOT ?>admin/pubarticle/<?= $articles->_id ?>/<?=  $articles->status? 0:1 ?>`)" href="javascript:void(0)"><?= $articles->status?  'Anuller la publication':'Publier'?></a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                            </td>
                            
                        </tr>

                        <?php $i=$i+1; } ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>