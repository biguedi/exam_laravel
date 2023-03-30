@extends('app')

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
  
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://www.pulsecommunication.fr/wp-content/uploads/creation-site-web-taxi-vendee.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">


                    @if(session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif


                <form  action="{{ route('check') }}" method="POST">
                    
                    {!! csrf_field() !!}

                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Se connecter</span>

                    <br>

                    <label>Email</label>
                    <input type="email" name="email" id="email" class ="form-control form-control-lg"> </br>

                    <label class="form-label" >Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg"  />
 
                    <br>
                    <button class="btn btn-dark btn-lg btn-block" >Connexion</button>
                    
                    <br>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Si vous n'avez pas de compte &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    
                    <a href="/register" style="color: #393f81;">S'inscrire ici</a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
</body>
</html>