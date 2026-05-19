<?= $this->extend('admin/admin_layout') ?>


<?= $this->section('page_title') ?>
   <?=$title?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <h2>Sadaļas</h2>

    <div class="list-group">
         <?php foreach($pages as $page):?> 
                <a href="#" class="list-group-item list-group-item-action" aria-current="true" data-page-id="<?=$page["id"]?>">
                   <?=$page["page_name"]?>
                </a>
        <?php endforeach?>
       
</div>

  
      
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->     
  


<?= $this->endSection() ?>