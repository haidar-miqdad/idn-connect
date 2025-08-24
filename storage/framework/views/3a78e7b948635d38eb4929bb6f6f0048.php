

<?php if($message = Session::get('success')): ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: <?php echo json_encode($message, 15, 512) ?>,
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>
<?php endif; ?>

<?php if($message = Session::get('error')): ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: <?php echo json_encode($message, 15, 512) ?>,
                showConfirmButton: true
            });
        });
    </script>
<?php endif; ?>
<?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/layouts/alert.blade.php ENDPATH**/ ?>