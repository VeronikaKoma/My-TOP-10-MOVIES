const requestURL = "../json/peliculas.json";

var audio=document.querySelector("audio");
audio.volume=0.5;

async function fetchMoviesJson(){
    const response = await fetch(requestURL);
    const movies = await response.json();
    return movies;
}


fetchMoviesJson().then(movies =>{
    for(let index = 0 ; index < movies.peliculas.length; index++)
    {

    console.log(movies.peliculas[index].titulo);

    const moviesSection = document.getElementById('movieSection');

        let id = movies.peliculas[index].id;
        let title = movies.peliculas[index].titulo;
        let resume = movies.peliculas[index].description;
        let director = movies.peliculas[index].director;
        let img = movies.peliculas[index].caratula;
        let genre = movies.peliculas[index].classification;
        //console.log(movies.peliculas[index].id);

        moviesSection.innerHTML += `
            <div class="card" style="width: 18rem;">
                <img src="${img}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">${id}. ${title}</h2>
                    <h4 class="card-title">Director : ${director}</h3>
                    <h5 class="card-title">Genero : ${genre}</h2>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
            `
        
    };
}
)