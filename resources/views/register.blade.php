@extends('structure')
@section('contenido')
@section('title')
  @parent
  Register
@endsection

    <div class="site-container">
        @include('main_header')
        <section class="main-container">

            <article class="noticia-total">
              <header class="main-titulo">
                <h2>Register</h2>
              </header>
              <form id='register' action='index' method='post' >
                {{ csrf_field() }}
                  <fieldset>
                      <div class="datos">
                        <div class="">

                          <div class="primeraColumna">
                              <label>Username</label>
                              <br>
                              <input type="text" placeholder="Username" class="username" name="name" value=''><b>
                          </div>

                        </div>
                        <div class="">

                          <div class="primeraColumna">
                              <label>Email</label>
                              <br>
                              <input type="email" placeholder="ejemplo@ejemplo.com" class="mail" name="email" value="">
                              <br>
                          </div>
                        </div>
                          <div class="primeraColumna">
                              <label>Password</label>
                              <br>
                              <input type="password" class="contra" placeholder="Contraseña" name="password">
                              <br>
                          </div>
                          <div class="primeraColumna">
                          <label>Confirm password</label>
                          <br>
                          <input type="password" class="contra" placeholder="Contraseña" name="password">
                          <br>
                        </div>
                          <div class="contenedor-sexo">
                              <label class="sexo">Sex</label>
                              <br>
                              <input type="radio" name="sexo" value="femenino">
                              <label>Femenino</label>
                              <br>
                              <input type="radio" name="sexo" value="masculino">
                              <label>Masculino</label>
                          </div>
                          <div class="botones">
                            <br>
                            <button type="submit">Register</button>
                            <button type="reset" name="button"  id="enviar">Errase</button>
                            <br>
                          </div>
                      </div>
                  </fieldset>
              </form>
            </article>
        </section>


                        @include('aside')


                        <div class="cleaner"></div>
                        @include('main_footer')
    </div>

@endsection
