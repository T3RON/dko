<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
            <ul id="themecolors" class="m-t-20">
                <li><b>With Light sidebar</b></li>
                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
            </ul>
        
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer"> سامانه گردشگري داياكو </footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?=base_url('')?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?=base_url('')?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?=base_url('')?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?=base_url('')?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=base_url('')?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?=base_url('')?>assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?=base_url('')?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="<?=base_url('')?>assets/js/custom.min.js"></script>
<!-- Editable -->
<script src="<?=base_url('')?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="<?=base_url('')?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?=base_url('')?>assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="<?=base_url('')?>assets/plugins/tiny-editable/numeric-input-example.js"></script>
<script src="<?=base_url('')?>assets/js/jasny-bootstrap.js"></script>
<script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });
</script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--sparkline JavaScript -->
<script src="<?=base_url('')?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--morris JavaScript -->
<script src="<?=base_url('')?>assets/plugins/raphael/raphael-min.js"></script>
<script src="<?=base_url('')?>assets/plugins/morrisjs/morris.min.js"></script>
<!-- Chart JS -->
<script src="<?=base_url('')?>assets/js/dashboard1.js"></script>
<!-- ============================================================== -->
<!-- Sweet-Alert  -->
<script src="<?=base_url('')?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url('')?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
<!-- Style switcher -->
<!-- ============================================================== -->

<script src="<?=base_url('')?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<script src="<?=base_url('')?>assets/plugins/dropify/dist/js/dropify.js"></script>
<script src="<?=base_url('')?>assets/js/jquery.PrintArea.js" type="text/JavaScript"></script>

<script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
</script>
<script src="<?=base_url('')?>assets/js/mask.js"></script>

<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("واقعا نياز داريد اين فايل را حذف كنيد \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('فايل حذف گرديد');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
<script src="<?=base_url('')?>assets/plugins/tinymce/tinymce.min.js"></script>
<!-- Magnific popup JavaScript -->
<script src="<?=base_url('')?>assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url('')?>assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
<script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
</script>

</body>

</html>