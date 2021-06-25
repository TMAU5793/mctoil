   <footer>
      <span class="text-white ft-copyright">© 2021 REJUVIS MCT OIL - All Rights Reserved.</span>
   </footer>
   
   <script src="<?= base_url('assets/jquery/jquery.min.js'); ?>"></script>
   <script src="<?= base_url('assets/bootstrap-5/js/bootstrap.min.js'); ?>"></script>
   <script src="<?= base_url('assets/waypoints/jquery.waypoints.min.js'); ?>"></script>
   <script src="<?= base_url('assets/jquery/jquery.validate.js'); ?>"></script>
   
   <script>
      $(document).ready(function () {
         // Load custom script
         <?= view('scripts/script'); ?>
         
         // Load waypoint script
         <?= view('scripts/waypoints'); ?>

         // Load validate script
         <?= view('scripts/validate'); ?>

         var html = "";
         html += '<div class="modal fade mct-modal-success" id="mctModal">';
         html += '<div class="modal-dialog modal-dialog-centered">';
         html += '<div class="modal-content">';
         html += '<div class="modal-header">';
         html += '<h4 class="modal-title m-auto fw-600">การลงทะเบียนเรียบร้อย</h4>';
         html += '</div><div class="modal-body pt-4 pb-4">';
         html += '<h4>การลงทะเบียนรับส่วนลดของคุณเรียบร้อยแล้ว <br> ขอบคุณค่ะ</h4>';
         html += '<div style="max-width:200px; margin:1.5rem auto;"><img src="<?= base_url('assets/images/mct-oil-logo.png'); ?>" alt="mct oil logo"></div>';
         html += '</div></div></div></div>';
         $('footer').append(html);
         $('#mctModal').modal('show');
      });
   </script>

</body>
</html>