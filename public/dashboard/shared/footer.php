
    </main>
    <footer>
        &copy; 2021 - Hotels.ng
    </footer>
    <script src="<?php echo url_for("/dashboard/shared/custom.js") ?>"></script>

    <?php  if(isset($edit_password)) { ?>
        <script src="<?php echo url_for("/dashboard/js/edit_password.js") ?>"></script>
   <?php } ?>
    <?php  if(isset($rooms)) { ?>
        <script src="<?php echo url_for("/dashboard/js/rooms.js") ?>"></script>
   <?php } ?>
    
</body>
</html>