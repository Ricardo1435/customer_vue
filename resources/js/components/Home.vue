<template>
    <div class="container mt-4">
        <div class="container md">
            <div class="col text-center">
                <h1>RICARDO <span class="badge bg-secondary">OLIVA</span></h1>
            </div>
            <!-- Carrusel -->
            <div id="carouselImage" class="carousel slide my-4 mx-5" data-ride="carousel" >
                <ol class="carousel-indicators">
                    <li data-target="#carouselImage" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselImage" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" id="imageCarusel">
                    <div class="carousel-item active">
                        <img src="https://www.unir.net/wp-content/uploads/2021/12/costes-cabecera-min.jpg" class="d-block w-100" alt="..."  />
                    </div>
                    <div class="carousel-item">
                        <img src="https://analistasderiesgosblog.files.wordpress.com/2017/11/fotolia_65696193_industrie_4-0.jpg" class="d-block w-100" alt="..."  />
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselImage" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselImage" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</template>
