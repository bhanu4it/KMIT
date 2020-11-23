<?php 
include 'init.php';
include ROOT_DIR .  '/common/header.php'; ?>

<style>
            .embed360 {
                height: 350px;
                max-width: 700px;
            }
</style>

    <center>
        <div class="embed360" data-rotation="0 90 -10">
            <img src="new_features/testImage.jpg">
        </div>
    </center>
    <script>
    embed360('.embed360');
    </script>

<?php include ROOT_DIR .  '/common/footer.php'; ?>