   <footer>
      <span class="text-white ft-copyright">© 2021 REJUVIS MCT OIL - All Rights Reserved.</span>
   </footer>
   
   <script src="<?= base_url('assets/jquery/jquery.min.js'); ?>"></script>
   <script src="<?= base_url('assets/bootstrap-5/js/bootstrap.min.js'); ?>"></script>
   <script src="<?= base_url('assets/waypoints/jquery.waypoints.min.js'); ?>"></script>
   
   <script>
      $(document).ready(function () {
         // Load custom script
         <?= view('scripts/script'); ?>
         
         // Load waypoint script
         <?= view('scripts/waypoints'); ?>
      });
   </script>

</body>
</html>