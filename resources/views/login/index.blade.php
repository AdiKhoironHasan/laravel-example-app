 @extends('layouts/main')

 @section('container')

 <div class="row justify-content-center">
     <div class="col-md-5">
         <main class="form-signin">
             <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>

             @if(session()->has('registrationSuccess'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session('registrationSuccess') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
             @endif

             @if(session()->has('loginError'))
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session('loginError') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
             @endif

             <form action="/login" method="POST">
                 @csrf
                 <div class="form-floating">
                     <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                     <label for="email">Email address</label>
                     @error('email')
                     <div class="invalid-feedback">
                         {{$message}}
                     </div>
                     @enderror
                 </div>
                 <div class="form-floating">
                     <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                     <label for="password">Password</label>
                 </div>
                 <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
             </form>

             <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small>
         </main>
     </div>
 </div>

 @endsection
