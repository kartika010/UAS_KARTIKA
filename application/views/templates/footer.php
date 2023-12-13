 <head>
     <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

     <script>
         $(document).ready(function() {
             $(".loading").fadeOut(1000);
         })
     </script>

 <body>
     <div id="rounded">
         <div class="loading">
             <div class="loading">
                 <div class="loading">
                     <div class="loading">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </body>

 <style>
     body {
         background-color: #efefef !important
     }

     #rounded {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         width: 120px;
         height: 120px;
     }

     .loading {
         padding: 5px;
         width: calc(100% - 0px);
         height: calc(100% - 0px);
         border: 3px solid #eaeaea;
         border-radius: 50%;
         border-top: 3px solid #09a804;
         border-bottom: 3px solid #e80606;
         animation: rotate 5s linear infinite;
     }

     @keyframes rotate {
         100% {
             transform: rotate(360deg)
         }
     }
 </style>
 <!-- Bootstrap core JavaScript-->
 <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
 <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

 </body>

 </html>