@extends('structure')
@section('contenido')
@section('title')
  @parent
  Home
@endsection
    <div class="site-container">
      @include('main_header')
        <section class="main-container">


            <article class="noticia-total">
              <form class="" action="index" method="post">

              <div class="mails-us2">
                  <h3 class="titulo-mail">Login</h3>
                  <p>
                      Enter your username:
                  </p>
                  <input type="text" name="email" value="" placeholder="  Enter your username...">
                  <p>
                      Enter your password:
                  </p>
                  <input type="text" name="email" value="" placeholder="  Enter your password...">
                  <div class="subscribe">
                      <input type="submit" name="name" value="Login">
                  </div>
              </div>
            </form>
                <header class="main-titulo">
                    <h2><a href="recipe">Healthier Chocolate Peanut Butter No Bake Cookies</a></h2>
                </header>
                <img class="foto-portada" src="http://cf.thereciperebel.com/wp-content/uploads/2016/09/Maple-Ginger-Beef-www.thereciperebel.com-6-of-7-680x900.jpg" alt="" />
                <p class="texto-noticia">
                    These Chocolate Peanut Butter No Bake Cookies are made better for you with no refined sugar, and a boost of protein from peanut butter, peanuts and oats! Just 10 minutes prep and easily made gluten-free. Is school back in session where you are? Here,
                    school starts this week and although our oldest girl is only in Nursery School one morning a ...
                </p>
                <p class="readmore">
                    <a href="#">Read more &gt&gt</a>
                </p>
            </article>
            </cms:editable>
            </cms:pages>

            <article class="noticia-total">
                <header class="main-titulo">
                    <h2><a href="#">Maple Ginger Beef: 30 Minute Thursday</a></h2>
                </header>
                <img class="foto-portada" src="http://cf.thereciperebel.com/wp-content/uploads/2016/09/Maple-Ginger-Beef-www.thereciperebel.com-6-of-7-680x900.jpg" alt="" />
                <p class="texto-noticia">
                    This Maple Ginger Beef is better than any take-out and ready in 30 minutes or less! Throw in your favorite veggies (broccoli, mushrooms, snap peas, peppers) for a quick veggie-loaded stir fry! SO. I'm the kind of person who can't easily switch gears once
                    I have my mind set to doing something. But I'm also the kind of person that ...
                </p>
                <p class="readmore">
                    <a href="#">Read more &gt&gt</a>
                </p>
            </article>

            <article class="noticia-nueva">
                <img class="foto-portada" src="http://cf.thereciperebel.com/wp-content/uploads/2016/08/Overnight-Pumpkin-French-Toast-www.thereciperebel.com-5-of-10-680x900.jpg" alt="" />
                <header class="segundo-titulo">
                    <h2><a href="#">Maple Ginger Beef: 30 Minute Thursday</a></h2>
                </header>
                <p class="texto-noticia-nueva">
                    This Maple Ginger Beef is better than any take-out and ready in 30 minutes or less! Throw in your favorite veggies (broccoli, mushrooms, snap peas, peppers) for a quick veggie-loaded stir fry! SO. I'm the kind of person who can't easily switch gears once
                    I have my mind set to doing something. But I'm also the kind of person that ...
                </p>
                <p class="readmore">
                    <a href="#">Read more &gt&gt</a>
                </p>
            </article>

            <article class="noticia-nueva">
                <img class="foto-portada" src="http://cf.thereciperebel.com/wp-content/uploads/2016/08/gluten-free-black-forest-cake-cherries-www.thereciperebel.com-13-of-14-680x900.jpg" alt="" />
                <header class="segundo-titulo">
                    <h2><a href="#">Maple Ginger Beef: 30 Minute Thursday</a></h2>
                </header>
                <p class="texto-noticia-nueva">
                    This Maple Ginger Beef is better than any take-out and ready in 30 minutes or less! Throw in your favorite veggies (broccoli, mushrooms, snap peas, peppers) for a quick veggie-loaded stir fry! SO. I'm the kind of person who can't easily switch gears once
                    I have my mind set to doing something. But I'm also the kind of person that ...
                </p>
                <p class="readmore">
                    <a href="#">Read more &gt&gt</a>
                </p>
            </article>

            <article class="noticia-nueva">
                <img class="foto-portada" src="http://cf.thereciperebel.com/wp-content/uploads/2016/08/10-Healthy-Breakfast-Recipes-600x900.jpg" alt="" />
                <header class="segundo-titulo">
                    <h2><a href="#">10 Healthy Breakfast Recipes and a Burnbrae Farms Tour</a></h2>
                </header>
                <p class="texto-noticia-nueva">
                    This Maple Ginger Beef is better than any take-out and ready in 30 minutes or less! Throw in your favorite veggies (broccoli, mushrooms, snap peas, peppers) for a quick veggie-loaded stir fry! SO. I'm the kind of person who can't easily switch gears once
                    I have my mind set to doing something. But I'm also the kind of person that ...
                </p>
                <p class="readmore">
                    <a href="#">Read more &gt&gt</a>
                </p>
            </article>

            <article class="noticia-nueva">
                <img class="foto-portada" src="http://cf.thereciperebel.com/wp-content/uploads/2016/08/Slow-Cooker-Mango-Salsa-Chicken-www.thereciperebel.com-4-of-10-680x900.jpg" alt="" />
                <header class="segundo-titulo">
                    <h2><a href="#">Slow Cooker Mango Salsa Chicken</a></h2>
                </header>
                <p class="texto-noticia-nueva">
                    This Maple Ginger Beef is better than any take-out and ready in 30 minutes or less! Throw in your favorite veggies (broccoli, mushrooms, snap peas, peppers) for a quick veggie-loaded stir fry! SO. I'm the kind of person who can't easily switch gears once
                    I have my mind set to doing something. But I'm also the kind of person that ...
                </p>
                <p class="readmore">
                    <a href="#">Read more &gt&gt</a>
                </p>
            </article>

            <article class="pages">
                <h3 class="page"><a href="#">Page 2 &gt&gt</a></h3>
            </article>

            <article class="toda-la-comida">
                <article class="easy-one">
                    <h4 class="tercer-titulo"><a href="#">Easy, One Dish Meals!</a></h4>
                </article>
                <article class="contenedor-comidas">
                    <a href="#"><img class="fotos-ultimas" src="http://cf.thereciperebel.com/wp-content/uploads/2015/12/Spanish-Tortilla-Spanish-Potato-Omelette-www.thereciperebel.com-3-of-6-680x900.jpg" alt="" /></a>
                    <header>
                        <h2 class="entry-tittle"><a href="#">Spanish Tortilla (Spanish Potato Omelette)</a></h2>
                        <div class="doble-linea">

                        </div>
                    </header>
                </article>

                <article class="contenedor-comidas">
                    <a href="#"><img class="fotos-ultimas" src="http://cf.thereciperebel.com/wp-content/uploads/2015/12/Spanish-Tortilla-Spanish-Potato-Omelette-www.thereciperebel.com-3-of-6-680x900.jpg" alt="" /></a>
                    <header>
                        <h2 class="entry-tittle"><a href="#">Spanish Tortilla (Spanish Potato Omelette)</a></h2>
                        <div class="doble-linea">

                        </div>
                    </header>
                </article>

                <article class="contenedor-comidas">
                    <a href="#"><img class="fotos-ultimas" src="http://cf.thereciperebel.com/wp-content/uploads/2015/12/Spanish-Tortilla-Spanish-Potato-Omelette-www.thereciperebel.com-3-of-6-680x900.jpg" alt="" /></a>
                    <header>
                        <h2 class="entry-tittle"><a href="#">Spanish Tortilla (Spanish Potato Omelette)</a></h2>
                        <div class="doble-linea">

                        </div>
                        <div class="contenedor-more">
                            <p class="more">
                                <a href="#">More recipes</a>
                            </p>
                        </div>
                    </header>
                  </article>
                    <article class="toda-la-comida">
                        <article class="easy-one">
                            <h4 class="tercer-titulo"><a href="#">Easy, One Dish Meals!</a></h4>
                        </article>
                        <article class="contenedor-comidas">
                            <a href="#"><img class="fotos-ultimas" src="http://cf.thereciperebel.com/wp-content/uploads/2015/12/Spanish-Tortilla-Spanish-Potato-Omelette-www.thereciperebel.com-3-of-6-680x900.jpg" alt="" /></a>
                            <header>
                                <h2 class="entry-tittle"><a href="#">Spanish Tortilla (Spanish Potato Omelette)</a></h2>
                                <div class="doble-linea">

                                </div>
                            </header>
                        </article>

                        <article class="contenedor-comidas">
                            <a href="#"><img class="fotos-ultimas" src="http://cf.thereciperebel.com/wp-content/uploads/2015/12/Spanish-Tortilla-Spanish-Potato-Omelette-www.thereciperebel.com-3-of-6-680x900.jpg" alt="" /></a>
                            <header>
                                <h2 class="entry-tittle"><a href="#">Spanish Tortilla (Spanish Potato Omelette)</a></h2>
                                <div class="doble-linea">

                                </div>
                            </header>
                        </article>

                        <article class="contenedor-comidas">
                            <a href="#"><img class="fotos-ultimas" src="http://cf.thereciperebel.com/wp-content/uploads/2015/12/Spanish-Tortilla-Spanish-Potato-Omelette-www.thereciperebel.com-3-of-6-680x900.jpg" alt="" /></a>
                            <header>
                                <h2 class="entry-tittle"><a href="#">Spanish Tortilla (Spanish Potato Omelette)</a></h2>
                                <div class="doble-linea">

                                </div>
                                <div class="contenedor-more">
                                    <p class="more">
                                        <a href="#">More recipes</a>
                                    </p>
                                </div>
                            </header>
                    </article>
                </article>
            </article>
        </section>

        @include('aside')


        <div class="cleaner"></div>
        @include('main_footer')
    </div>

  @endsection
