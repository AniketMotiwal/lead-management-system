<script>
  $(document).ready(function(){
    // Function to display content in a modal for viewing
    window.viewer_modal = function($src = ''){
      start_loader(); // Start loader animation
      var t = $src.split('.'); // Get file extension
      t = t[1];
      if(t =='mp4'){ // If file is a video
        var view = $("<video src='"+$src+"' controls autoplay></video>"); // Create video element
      }else{ // If file is an image
        var view = $("<img src='"+$src+"' />"); // Create image element
      }
      // Remove any existing content and append the new content
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove();
      $('#viewer_modal .modal-content').append(view);
      // Display the modal
      $('#viewer_modal').modal({
        show:true,
        backdrop:'static',
        keyboard:false,
        focus:true
      });
      end_loader(); // Stop loader animation
    }

    // Function to display content in a modal window
    window.uni_modal = function($title = '', $url='', $size=""){
      start_loader(); // Start loader animation
      $.ajax({
        url:$url,
        error:err=>{
          console.log()
          alert("An error occured")
        },
        success:function(resp){
          if(resp){
            $('#uni_modal .modal-title').html($title); // Set modal title
            $('#uni_modal .modal-body').html(resp); // Set modal body content
            if($size != ''){
              $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered'); // Set modal size
            }else{
              $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered"); // Default modal size
            }
            // Display the modal
            $('#uni_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            });
            end_loader(); // Stop loader animation
          }
        }
      });
    }

    // Function to display a confirmation modal
    window._conf = function($msg='', $func='', $params = []){
      $('#confirm_modal #confirm').attr('onclick', $func+"("+$params.join(',')+")"); // Set function and parameters to confirm button
      $('#confirm_modal .modal-body').html($msg); // Set confirmation message
      $('#confirm_modal').modal('show'); // Display the modal
    }

    // Remove empty list groups
    $('.list-group').each(function(){
      if($(this).find('.list-group-item').length <= 0){
        $(this).html('');
      }
    });
  });
</script>

<footer class="main-footer text-sm">
        <strong>Copyright © <?php echo date('Y') ?>. 
        <!-- <a href=""></a> -->
        </strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b><?php echo $_settings->info('short_name') ?>  <a href="#" target="blank">Aniket Motiwal</a></b>
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->
<div id="libraries">
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/fullcalendar/main.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
  </div>   
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;"></div>