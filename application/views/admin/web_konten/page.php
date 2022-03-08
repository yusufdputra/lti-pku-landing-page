<div class="container">
   <div class="row">

      <?php 
         $hidden = ['id_content_page' => $row_page['id_content_page']];
         echo form_open(base_url('akses09/web-konten/edit/' . $row_page['id_content_page']), '', $hidden); 
      ?>

      <div class="col s12">
         <div class="page-content-title left left-align">
            <h4><?php echo strtoupper($page); ?></h4>
            <span>
               <?php echo "Terakhir diperbaharui : <strong>" . date('d/m/Y H:i:s', strtotime($row_page['latest_update'])) . "WIB</strong>"; ?>
            </span>
         </div>

         <div class="page-content-submit right">
            <button type="submit" name="submit" class="btn waves-effect blue darken-3">Simpan <i class="material-icons right">send</i></button>
         </div>
      </div>

      <!-- Content -->
      <div class="col s12 input-field">
         <textarea name="content" id="edit-content"><?php echo htmlspecialchars_decode($row_page["content"]); ?></textarea>
      </div>

      <!-- Btn Submit -->
      <div class="col s12 input-field right-align">
         
      </div>

      <?php echo form_close(); ?>
   </div>
</div>

<script>
   $(document).ready(function() {
      const baseURL = '<?php echo base_url(); ?>';
      
      $('#edit-content').summernote({
         height   : 400,
         toolbar : [
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['style', ['fontname', 'fontsize', 'strikethrough', 'superscript', 'subscript']],
            ['color', ['forecolor', 'backcolor']],
            ['para', ['style', 'ol', 'ul', 'paragraph', 'height']],
            ['insert', ['picture', 'link', 'video', 'table', 'hr']],
            ['misc', ['fullscreen']]
         ],
         callbacks: {
            onImageUpload: function(files) {
               uploadFile(files[0]);
            }
         }
      });

      function uploadFile(file) {
         data = new FormData();
         data.append("file", file);

         $.ajax({
            data       : data,
            type       : "POST",
            url        : baseURL + "admin/web_konten/upload_image",
            cache      : false,
            contentType: false,
            processData: false,
            success    : function(url) {
               $('#edit-content').summernote("insertImage", url);
            }
         });
      }
   });
</script>