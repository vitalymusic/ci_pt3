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
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="" id="pageform1">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Sadaļas nosaukums</label>
                  <input type="text" class="form-control" name="page_name" id="exampleFormControlInput1" placeholder="Jauna sadaļa">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput2" class="form-label">Izveides datums</label>
                  <input type="datetime" class="form-control" id="exampleFormControlInput3" name="page_date" placeholder="Datums">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Lapas saturs</label>
                  <textarea class="form-control" name="page_content" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>
               <input type="hidden" name="id" value="">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary saveFormBtn">Saglabāt</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->     
  
<script>
document.addEventListener("DOMContentLoaded",()=>{
    tinymce.init({
    selector: '#exampleFormControlTextarea1',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });

})   
 
</script>

<script>
 document.addEventListener("DOMContentLoaded",()=>{

      let pagesBtns = document.querySelectorAll('.pages a');
      let formElement = document.querySelector('#pageform1');
      let page_modal1 = new bootstrap.Modal(document.querySelector('#page_modal1'));
      const editor = tinymce.activeEditor;     
        let saveFormBtn = document.querySelector('.saveFormBtn');   
        document.querySelector('#page_modal1').addEventListener('hidden.bs.modal', () => {
                         window.location.reload();
                        })  


      for( pagebtn of pagesBtns){
               pagebtn.onclick = (e)=>{
                 
                  let page_id = e.target.dataset.page_id;
                  fetch('<?=base_url('/admin/page/')?>'+page_id)
                     .then(data=>{return data.json()})
                     .then(data=>{
                         
                           formElement[0].value = data.page_name;
                           formElement[1].value = data.page_date;
                           formElement[2].value = data.page_content;
                           document.querySelector('[name="id"]').value = data.id;
                           
                          
                           editor.setContent(data.page_content);






                        // const editor = tinymce.activeEditor;
                        // const html = editor.getContent();
                        // console.log(html);

                     }).then(
                        ()=>{page_modal1.show()}
                     )
                     .catch(error=>console.error(error));
               }
      }



      // formas saglabāšana

       

         saveFormBtn.onclick = ()=>{
                formElement[2].value =  editor.getContent();

                let formData = new FormData(formElement);

                fetch('<?=base_url('/admin/page/update')?>',{
                  method:"POST",
                  body:formData
                })
                  .then(data=>{return data.json()})
                  .then(data=>{
                     if(data.message=="success"){
                        page_modal1.hide();
                     }
                  })
                  .catch(error=>console.error(error));







         }



 })  

   

</script>



<?= $this->endSection() ?>