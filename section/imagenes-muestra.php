<style>
.card{
        /* Aumentamos la anchura y altura durante 2 segundos */
        transition: width 2s, height 2s, transform 2s;
        -moz-transition: width 2s, height 2s, -moz-transform 2s;
        -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
        -o-transition: width 2s, height 2s,-o-transform 2s;
    }
    .card:hover{
        /* tranformamos el elemento al pasar el mouse por encima al doble de
           su tamaño con scale(2). */
        transform : scale(2);
        -moz-transform : scale(2);      /* Firefox */
        -webkit-transform : scale(1.1);   /* Chrome - Safari */
        -o-transform : scale(2);        /* Opera */
    }
</style>

<div class=" m-2" >
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="../img/Imagen_no_disponible1.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class ="col-sm 12 col-md 6">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                <div class="card" style="width: 100%; height : 100%">
                <img class="card-img-top " src="../img/Imagen_no_disponible1.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
                </div>
               <div class="col-sm-12 col-md-6">
               <div class="card" style="width: 100%;">
                <img class="card-img-top" src="../img/Imagen_no_disponible1.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                <div class="card" style="width: 100%;">
                <img class="card-img-top" src="../img/Imagen_no_disponible1.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
                </div>
                <div class="col-sm-12 col-md-6">
                <div class="card" style="width: 100%;">
                <img class="card-img-top" src="../img/Imagen_no_disponible1.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>