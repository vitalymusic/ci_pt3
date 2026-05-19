<?= $this->extend('admin/admin_layout') ?>


<?= $this->section('page_title') ?>
   <?=$title?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <h2>Sadaļas</h2>

    <div class="list-group pages">
         <?php foreach($pages as $page):?> 
                <a href="#" class="list-group-item list-group-item-action" aria-current="true" data-page_id="<?=$page["id"]?>">
                   <?=$page["page_name"]?>
                </a>
        <?php endforeach?>
       
</div>

  
      
<!-- Modal -->
<div class="modal fade" id="page_modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Sadaļas nosaukums</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jauna sadaļa">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput2" class="form-label">Izveides datums</label>
                  <input type="date" class="form-control" id="exampleFormControlInput3" placeholder="Datums">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Lapas saturs</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->     
  

<script>
 document.addEventListener("DOMContentLoaded",()=>{
      let pagesBtns = document.querySelectorAll('.pages a');
      let page_modal1 = new bootstrap.Modal(document.querySelector('#page_modal1'));


      for( pagebtn of pagesBtns){
               pagebtn.onclick = (e)=>{
                  page_modal1.show();
                  console.log(e.target.dataset.page_id);
               }
      }

 })  

   

</script>

<?= $this->endSection() ?>