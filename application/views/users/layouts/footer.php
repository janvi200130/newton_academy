
<footer class="main-footer">
  <strong> © Created by me:- &nbsp;<a target="_blank" href="https://raysitworld.com/" class="color_white fw_400 line_height_24"> RAYS IT & DESIGN WORLD PVT. LTD.</strong>
  All rights reserved.
  <!-- <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div> -->
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>

  <script src="<?=base_url();?>assets/admin_assets/jquery/jquery.min.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/jquery-ui/jquery-ui.min.js"></script>

    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>

    <script src="<?=base_url();?>assets/admin_assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/chart.js/Chart.min.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/sparklines/sparkline.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?=base_url();?>assets/admin_assets/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/jquery-knob/jquery.knob.min.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/moment/moment.min.js"></script>
    <script src="<?=base_url();?>assets/admin_assets/daterangepicker/daterangepicker.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/summernote/summernote-bs4.min.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/js/adminlte.js?v=3.2.0"></script>

    <script src="<?=base_url();?>assets/admin_assets/js/demo.js"></script>

    <script src="<?=base_url();?>assets/admin_assets/js/pages/dashboard.js"></script>



<script>
  window.alert = function() {};
</script>

  <script>
    $(function() {
      // Summernote
      $("#summernote").summernote();

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai",
      });
    });
  </script>

</body>

</html>
