<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
     
      <title>Document</title>
   </head>
   <body>
      <!-- navbar -->
      <header class="p-3 bg-dark text-white">
         <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
               <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
               </a>
               <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">About</a></li>
               </ul>
            </div>
         </div>
      </header>
      <!-- navbar -->
      <!-- form -->
      <div class="container mt-5">
         <div class="row">
            <div class="col-sm-6">
               <div class="form-group">
                  <form method="POST" action="">
                      @csrf
                      <div class="mb-3">
                        <label for="username" class="form-label">UserName</label>
                        <input type="text" class="form-control" name="username" id="username" value="{{@$edituser->username}}" required>
                     </div>
                     <div class="mb-3">
                        <label for="username" class="form-label">UserName</label>
                        <input type="text" class="form-control" name="username" id="username" value="{{@$edituser->username}}" required>
                     </div>
                     <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{@$edituser->email}}" required>
                     </div>
                     <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{@$edituser->phone}}" required>
                     </div>
                     <button type="submit" class="btn btn-success">UPDATE</button>
                  </form>
                  @if (session()->has('status'))
                      <div class="alert- alert-success">
                          {{session('status')}}
                      </div>
                  @endif
                </div>
            </div>
         </div>
      </div>
      <!-- form -->




        <!-- footer -->
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
         <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
               <svg class="bi" width="30" height="24">
                  <use xlink:href="#bootstrap"></use>
               </svg>
            </a>
            <span class="text-muted">© 2021 Company, Inc</span>
         </div>
         <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
               <a class="text-muted" href="#">
                  <svg class="bi" width="24" height="24">
                     <use xlink:href="#twitter"></use>
                  </svg>
               </a>
            </li>
            <li class="ms-3">
               <a class="text-muted" href="#">
                  <svg class="bi" width="24" height="24">
                     <use xlink:href="#instagram"></use>
                  </svg>
               </a>
            </li>
            <li class="ms-3">
               <a class="text-muted" href="#">
                  <svg class="bi" width="24" height="24">
                     <use xlink:href="#facebook"></use>
                  </svg>
               </a>
            </li>
         </ul>
      </footer>
      <!-- footer -->


      
      <!-- jquery cdn -->
      <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
      <!-- jquery validation -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
      <!-- jquery validation -->
      <!-- bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
      <!-- bootstrap -->




   </body>
</html>