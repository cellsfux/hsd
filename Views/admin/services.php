<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">

             <div  style='position:absolute; right:20px; top:10px'>
                 <a href="<?= URLROOT ?>admin/page/services/addservice" class="btn  btn-success f-right">Ajouter un article</a>
             </div>

        
                
            

              <h4 class="card-title">Tous les Services</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php $i=1; foreach($data as $service){

                      ?>
                        <tr>
                              <td><?= $i ?></td>
                              <td><?= $service->title ?></td>
                              <td><?= $service->created_at ?></td>
                              <td>
                               <a href="<?=URLROOT ?>admin/deleteservice/<?= $service->_id ?>" class="btn btn-danger">Supprimer</a>
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