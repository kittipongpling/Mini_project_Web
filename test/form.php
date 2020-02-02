<div class="collapse" id="upload_avatar">
    <div class="card card-body">
        <form enctype="multipart/form-data" action="./upload.php" method="post">
            <p class="text-left">Upload Avatar:</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
            <input type="text" name="name" require value="name"><br>
<input type="text" name="lname" require value="lname"><br>
<input type="text" name="rich" require value="ราคา"><br>
            <input name="image" type="file" /><br>
            <button class="form-control mr-sm-2 btn btn-outline-success my-2 my-sm-0" type="submit" name="avatar_upload" aria-controls="collapse_upload_avatar">
                Upload
            </button>
        </form>
    </div>
</div>