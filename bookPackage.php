<?php
session_start();
if (isset($_POST['book'])) {
    echo "
        <script>
            if(alert('Payment success!')) {document.location = 'paymentSuccess.php';}else{document.location = 'paymentSuccess.php';}
        </script>
    ";
} else if (isset($_POST['cancel'])) {
    echo "
        <script>
            if(alert('Payment failure!')) {document.location = 'paymentFailure.php';}else{document.location = 'paymentFailure.php';}
        </script>
    ";
}

?>

<div class="modal fade" id="bookPackage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-right">
                            <form method="post">
                                <h3>Do you want to book the package? </h3>
                                <input type="submit" name="book" value="BOOK">
                                <input type="submit" name="cancel" value="CANCEL">
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>By logging in you agree to our <a href="aboutus.php?type=terms">Terms and Conditions</a> and <a href="aboutus.php?type=privacy">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>