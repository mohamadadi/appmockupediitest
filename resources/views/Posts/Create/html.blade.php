<section class="content">
    <div class="container-fluid">
        <div class="col-8">
          <!-- general form elements -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create A New Posts</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="create_posts" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" id="title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slug</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter slug..." id="slug" name="slug">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select class="form-control" id="category" name="category">
                        <option value="Laravel">Laravel</option>
                        <option value="Codeigniter">Codeigniter</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea class="form-control" rows="3" placeholder="Enter body" id="body" name="body"></textarea>
                  </div>                
               
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
