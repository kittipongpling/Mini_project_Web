<form action="./photo.php" method="POST">
<input type="text" name="name" require value="name"><br>
<input type="text" name="lname" require value="lname"><br>
<input type="text" name="rich" require value="ราคา"><br>
<input class="form-control" type="file" name="photo" require accept="image/*"> <br>
<input type="submit" value="เพิ่ม">
<input type="button" onclick="newDoc()" value="กลับ">
</form>
<script>
function newDoc() {
  window.location.assign("./index.php")
}
</script>