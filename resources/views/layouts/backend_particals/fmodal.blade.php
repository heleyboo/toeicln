<!-- Modal -->
<div id="fileModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Files</h4>
      </div>
      <div class="modal-body">
      <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tabFiles" data-toggle="tab" aria-expanded="true">Files</a></li>
              <li class=""><a href="#tabUpload" data-toggle="tab" aria-expanded="false">Upload</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tabFiles">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Thumbnail</th>
                    <th>Size</th>
                    <th>Select</th>
                  </tr>
                </thead>
                <tbody id="tableImageBody">
                </tbody>
              </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tabUpload">
                The European languages are members of the same family. Their separate existence is a myth.
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>