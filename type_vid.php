<div class="col-md-6">
       <label for="message-2">
       Pilih Sebuah Video
       <input type="file" name="file[]" class="file_multi_video" id="message-2" accept="video/*" style="display: none" onclick="showresponddiv(this.id)">
       </label>

        <div class="col-md-12">
                 <img src="" id="respond-1" alt="" height="400px" width="400px" class="mt-4" style="display:none">
                  <video id="respond-2" width="400" controls class="mt-4" style="display:none">
                  <source src="" id="video_here">
                   Your browser does not support HTML5 video.
                  </video>
                </div>
      </div>
      <div class="col-md-6">
       <div class="form-group">
        <label for="exampleFormControlTextarea1"><h5>Deskripsi</h5></label>
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="9"></textarea>
        </div>
      </div>