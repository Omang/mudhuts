
  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
 

  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>

  <script>tinymce.init({
    selector: '#tiny-editor',
    width:'100%',
    height: 250,
    plugins: [
        "code ",
        "paste"
    ],
    browser_spellcheck : true,
    menu: {
        edit: { 
            title: 'Edit', 
            items: 'undo redo | cut copy paste | selectall | searchreplace' 
        },
        view: { 
            title: 'View', 
            items: 'code | visualaid visualchars visualblocks | preview fullscreen' 
        },
        format: { 
            title: 'Format', 
            items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align | forecolor backcolor | removeformat' 
        },
        tools: { 
            title: 'Tools', 
            items: 'code wordcount' 
        },
        table: { 
            title: 'Table', 
            items: 'inserttable | cell row column | tableprops deletetable' 
        },
        help: { 
            title: 'Help', items: 'help' 
        }
    },
    branding: false,
    mobile: {
        menubar: true
    },
});</script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>