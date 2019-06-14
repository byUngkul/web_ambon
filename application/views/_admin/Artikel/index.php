<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <?php $this->load->view('_admin/side_nav');?>            
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Welcome to Admin page</h3>
              </div>              
            </div>

            <!-- Latest Users -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Posts...">
                      </div>
                </div>
                <br>
                <table id="mytable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Author</th>
                      <th>Desa</th>
                      <th>Category</th>
                      <th>Published</th>
                      <th>Date added</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>