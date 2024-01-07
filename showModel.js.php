<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        var showModal = '<?php echo $show_modal; ?>';
        if (showModal == "1") {
            $("#bookPackage").modal("show");
        }
    });
</script>