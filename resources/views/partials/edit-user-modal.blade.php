<!-- Modal -->
<form action="/editUser" method="post" enctype="multipart/form-data">
  @csrf
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" style="outline: none;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="user" value="{{$user->id}}">
        <div class="form-group">
          <label for="picture">Update your photo</label>
          <input type="file" value="{{$user->picture}}" name="pic" class="form-control-file" id="picture">
        </div>
          <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" id="name" type="text" name="name" value="{{$user->name}}">
          </div>
          <div class="form-group">
          <label for="email">Email Address:</label>
            <input class="form-control" id="email" type="email" name="email" value="{{$user->email}}">
          </div>
          <div class="form-group">
          <label for="location">Location</label>
            <input class="form-control" id="location" type="text" name="location" value="{{$user->location}}">
          </div>
          <div class="form-group">
            <label for="about">About Me</label>
            <textarea name="about" id=about placeholder="Tell us more about yourself" class="form-control" rows="4" value="{{$user->teacher->about}}">{{$user->teacher->about}}</textarea>
          </div>
          <div class="form-group">
            <label for="rate">Charging rates</label>
            <input type="number" id="rate" class="form-control" value="{{$user->teacher->rate}}" name="rate">
            <small>This will be displayed to clients when they go through your profile</small>
          </div>
          <div class="form-group">
            <label for="qualification">Add qualifications:</label>
            <input class="form-control" id="qualification" type="text" name="qualification" value="{{$user->teacher->qualification}}">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>