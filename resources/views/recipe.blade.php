@extends('structure')
@section('contenido')
@section('title')
  @parent
  Recipe
@endsection
    <div class="site-container">
        @include('main_header')
        <section class="main-container">
            <article class="noticia-total">
                <header class="main-titulo">
                    <h2>Little Cheesy Hasselback Potatoes</h2>
                    <ul class="share">
                        <li>Share &gt</li>
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-snapchat"></i></a></li>
                        <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                    </ul>
                </header>
                <p class="texto-receta">
                    <em>These Little Cheesy Hasselback Potatoes are a fun side dish or appetizer! They take less time to bake and are more “poppable” than large potatoes so they’re perfect for kids!</em>
                </p>
                <img class="photos-recetas" src="images/photo1.jpg" alt="" />
                <img class="photos-recetas" src="images/photo2.jpg" alt="" />
                <div class="ingredientes-recetas">
                  <h2>Little Cheesy Hasselback Potatoes</h2>
                    <div class="background-time">
                        <div class="time">
                            <h4>Prepare time</h4>
                            <p>
                                10 mins
                            </p>
                        </div>
                        <div class="time">
                            <h4>Cooking time</h4>
                            <p>
                                40 mins
                            </p>
                        </div>
                        <div class="time">
                            <h4>Total time</h4>
                            <p>
                                50 mins
                            </p>
                        </div>
                    </div>
                    <div class="texto-ingredientes">
                      <p>
                        These Little Cheesy Hasselback Potatoes are a fun side dish or appetizer! They take less time to bake and are more "poppable" than large potatoes so they're perfect for kids!
                      </p>
                    </div>
                    <div class="serves">
                      <p>
                        Serves: <span>4 servings</span>
                      </p>
                    </div>
                    <div class="ingredientes">
                    <h3>Ingedientes</h3>
                    <ul>
                      <li>Leche</li>
                      <li>Papa</li>
                      <li>Queso</li>
                      <li>Harina</li>
                      <li>Verdeo</li>
                    </ul>
                  </div>
                    <div class="preparacion">
                      <h2>How to make it:</h2>
                      <ol>
                        <li>Preheat oven to 400 degrees F and lightly grease a 9x13" pan or sheet pan.</li>
                        <li>Slice potatoes ⅔ of the way through, making sure not to slice off the sections you are creating (this takes some practice -- don't worry!).</li>
                        <li>Place in prepared pan and drizzle with canola oil. Sprinkle with salt and garlic powder and toss gently to coat.</li>
                        <li>Line potatoes up so the openings are at the top, and gently spread slightly apart (as much as possible without breaking them off!). Bake for 30 minutes or until tender.</li>
                        <li>Top with cheese and broil for 2 minutes or until melted. Serve.</li>
                      </ol>
                    </div>
                    <div class="imprimir">
                      <ul>
                        <li><a href="#">Print</a></li>
                      </ul>
                    </div>
                </div>
                @include('comentaries')
            </article>
        </section>


        @include('aside')


                        <div class="cleaner"></div>
                        @include('main_footer')
    </div>

@endsection
