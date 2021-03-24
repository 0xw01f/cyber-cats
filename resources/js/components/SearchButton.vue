<template>
    <div>
        <form class="d-flex col-3" @submit.prevent="searchCat">
            <input id="txtSearch" class="form-control me-2 mx-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
        
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            searchCat() {
                
                let searchQuery = document.getElementById("txtSearch").value

                let options = {
                    method: 'GET',
                    url: 'https://api.thecatapi.com/v1/breeds/search',
                    params: {q: searchQuery},
                    headers: {
                        'x-api-key': '7748fad1-216f-423c-93dd-9efd621db115'
                    }
                };

                axios.request(options).then(function (response) {
                    var options = {
                        method: 'GET',
                        url: 'https://api.thecatapi.com/v1/images/' + response.data[0].reference_image_id,
                        headers: {cookie: '__cfduid=d26031aea82cfdfbf2f420e11ede4cc1c1616518363'}
                    };
                    axios.request(options).then(function (response) {
                        console.log(response.data)
                        let obj =  response.data;

                        let picture = document.getElementById("picture");
                        let name = document.getElementById("name");
                        let description = document.getElementById("description");
                        let temperament = document.getElementById("temperament");
                        let origin = document.getElementById("origin");
                        let lifespan = document.getElementById("lifespan");

                        let adaptability = document.getElementById("adaptability");
                        let affectionLevel = document.getElementById("affection-level");
                        let childFriendly = document.getElementById("child-friendly");
                        let grooming = document.getElementById("grooming");
                        let intelligence = document.getElementById("intellignece");
                        let healthIssues = document.getElementById("health-issues");
                        let socialNeeds = document.getElementById("social-needs");
                        let strangerFriendly = document.getElementById("stranger-friendly");

                        picture.style.backgroundImage = "url('" + obj.url + "')";
                        picture.style.backgroundColor = "#f3f3f3";
                        description.innerText = obj.breeds[0].description;
                        name.innerText = obj.breeds[0].name;
                        temperament.innerHTML = "<b>Temperament :</b> " + obj.breeds[0].temperament;
                        origin.innerHTML = "<b>Origin :</b> " + obj.breeds[0].origin;
                        lifespan.innerHTML = "<b>Lifespan :</b> " + obj.breeds[0].life_span + " years";

                        adaptability.style.width = obj.breeds[0].adaptability *10 *2 + "%";
                        affectionLevel.style.width = obj.breeds[0].affection_level *10 *2 + "%";
                        childFriendly.style.width = obj.breeds[0].child_friendly *10 *2 + "%";
                        grooming.style.width = obj.breeds[0].grooming *10 *2 + "%";
                        intelligence.style.width = obj.breeds[0].intelligence *10 *2 + "%";
                        healthIssues.style.width = obj.breeds[0].heanth_issues *10 *2 + "%";
                        socialNeeds.style.width = obj.breeds[0].social_needseeds *10 *2 + "%";
                        strangerFriendly.style.width = obj.breeds[0].stranger_friendly *10 *2 + "%";


                    }).catch(function (error) {
                        console.error(error);
                    });

                }).catch(function (error) {
                    console.error(error);
                });
               
            }
        }
    }
</script>
