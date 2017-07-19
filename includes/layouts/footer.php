<div id="footer">Copyright <?php echo date('Y');?>, Widget Corp</div>
</body>
</html>
<?php
//5.close database conection
if (isset($connection)) {
     mysqli_close($connection);
}
?>
