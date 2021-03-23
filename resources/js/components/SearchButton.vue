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
                    console.log(response.data);
                }).catch(function (error) {
                    console.error(error);
                });
               
            }
        }
    }
</script>
