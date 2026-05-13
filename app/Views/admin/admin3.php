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

  
      

     
  


<?= $this->endSection() ?>