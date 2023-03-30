@extends('app')

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
  @yield('content')
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://html.design/wp-content/uploads/2021/03/urotaxi-758x948.jpg"
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

                <form action="{{ route('register') }}" method="POST">
                {!! csrf_field() !!}

                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">S'incrire</span>

                    <br>
                    <label class="form-label" >Nom</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" />

                  


                    <label class="form-label" >Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />

                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg"  />
                    <br>
                    <button class="btn btn-dark btn-lg btn-block" >Enregistrer</button>
                    
                    <br>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <a href="/login" style="color: #393f81;">Se connecter</a></p>

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