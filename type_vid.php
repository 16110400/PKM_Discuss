<div class="col-md-12">
  <form method="post" action="upload_video.php" enctype="multipart/form-data">
    <table width="100%">
      <tr>
        <td align="center">
          <label for="message-2">
               Pilih Sebuah Video
               <input type="file" name="fileToUpload" class="file_multi_video" id="message-2" accept="video/*" style="display: none" onclick="showresponddiv(this.id)">
               </label><p>

            <img src="" id="respond-1" alt="" height="400px" width="400px" class="mt-4" style="display:none">
                    <video id="respond-2" width="400" controls class="mt-4" style="display:none">
                    <source src="" id="video_here">
                     Your browser does not support HTML5 video.
                    </video>
        </td>
        <td>
          <label for="exampleFormControlTextarea1"><h5>Deskripsi</h5></label>
              <textarea class="form-control rounded-0" name="des" rows="9"></textarea>
              <p><p>

              <input type="submit" value="Upload Video" name="upd"/>
        </td>
      </tr>
    </table>
  </form>
</div>