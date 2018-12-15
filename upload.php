<div class="col-md-12 mt-2">
<div class="col-md-12 mb-4" style="text-align: center;"><h4>Unggah sebuah Gambar atau Video</h4></div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="row">
                <div class="col-md-6">
                    <label for="message-1">
                        <i class="material-icons material-icons-u">recent_actors
                        </i>
                        <input type="file" accept="image/*" name="" id="message-1" style="display: none" onclick="showresponddiv(this.id)" onchange="loadFile(event)">
                    </label>
                </div>
                <div class="col-md-6">
                    <label for="message-2">
                      <i class="material-icons material-icons-u">videocam
                      </i>
                      <input type="file" name="file[]" class="file_multi_video" id="message-2" accept="video/*" style="display: none" onclick="showresponddiv(this.id)">
                    </label>
                </div>

                <div class="col-md-12">
                 <img src="" id="respond-1" alt="" height="400px" width="400px" class="mt-4" style="display:none">
                  <video id="respond-2" width="400" controls class="mt-4" style="display:none">
                  <source src="" id="video_here">
                   Your browser does not support HTML5 video.
                  </video>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
               <label for="exampleFormControlTextarea1"><h5>Deskripsi</h5></label>
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="9"></textarea>
            </div>
        </div>
    </div>
</div>
