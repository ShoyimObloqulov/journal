<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../sources/js/jquery-3.3.1.min.js"></script>
<script src="../sources/js/popper.min.js"></script>
<script src="../sources/js/bootstrap.min.js"></script>
<script src="../sources/js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="../sources/js/plugins/pace.min.js"></script>
<script type="text/javascript" src="../sources/js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="../sources/js/plugins/select2.min.js"></script>
<script type="text/javascript" src="../sources/js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="../sources/js/plugins/dropzone.js"></script>
<script type="text/javascript" src="../sources/js/plugins/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="../sources/js/plugins/sweetalert.min.js"></script>
<!-- Table -->
<script type="text/javascript" src="../sources/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../sources/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$('#sampleTable').DataTable();
</script>
<script>
$(function() {
    $(".del").each(function() {
        this.addEventListener("click", function() {
            const rowId = this.dataset.rowId
            $.ajax({
                url: "../api/del.php",
                method: "POST",
                data: "id=" + rowId,
                success: function(x) {
                    if (x == 1) {
                        Swal.fire(
                            'Good jobs!',
                            'O\'chirildi',
                            'success'
                        );
                        $("#id" + rowId).remove();
                    }
                }
            });
            return false;
        });
    });
});
</script>