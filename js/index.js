const requestURL = "../json/peliculas.json";

async function fetchMoviesJson(){
    const response = await fetch(requestURL);
    const movies = await response.json();
    return movies;
}
    fetchMoviesJson().then(movies =>{
    for(let index = 0 ; index < movies.peliculas.length; index++){
    
    console.log(movies.peliculas[index].titulo);

    };
    
})