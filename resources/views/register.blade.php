<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Candidate Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100 gradient-custom" >
  <div class="container py-5 h-100" style="width:85%">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px; width:98%;background-color:grey;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"> Candidate Registration Form</h3>
            <form  action="{{ route('register_data')}}"method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="name" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Email</label>
                  </div>

                </div>
              </div>


              <div class="row">
                <div class="col-md-4 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="course[]" placeholder="Course" class="form-control form-control-lg" />
                   
                  </div>

                </div>
                <div class="col-md-4 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="university[]"  placeholder="University"class="form-control form-control-lg" />
                  </div>

                </div>
                <div class="col-md-4 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text"name="year[]" placeholder="Year" class="form-control form-control-lg" />
                    
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="course[]" placeholder="Course" class="form-control form-control-lg" />
                   
                  </div>

                </div>
                <div class="col-md-4 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="university[]"  placeholder="University"class="form-control form-control-lg" />
                  </div>

                </div>
                <div class="col-md-4 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text"name="year[]" placeholder="Year" class="form-control form-control-lg" />
                    
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="course[]" placeholder="Course" class="form-control form-control-lg" />
                   
                  </div>

                </div>
                <div class="col-md-4 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="university[]"  placeholder="University"class="form-control form-control-lg" />
                  </div>

                </div>
                <div class="col-md-4 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text"name="year[]" placeholder="Year" class="form-control form-control-lg" />
                    
                  </div>

                </div>
              </div>



              
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Save" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
