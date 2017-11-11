<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h2 class="modal-title">Inscription à la newsletter</h2>
        </div>
    
        <div class="modal-body">
          <form method="POST" action="{{ route('newsletter.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-md-8">
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Adress E-mail" required/>
              </div>
            </div>

            <div>
              <button type="submit" class="btn btn-default">Ok</button>
            </div>
          </form>
        </div>
    
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
</div>