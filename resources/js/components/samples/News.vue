<template>
	<div>
		<div class="title m-b-md">
		    {{ titlePage }}
		</div>
	</div>
</template>
<script>
	export default{
		name: 'News',
		data(){
			return{
				csrf: "",
				titlePage:''
			}
		},
		mounted(){
			this.csrf = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
			this.getData();
		},
		methods: {
			async getData(){
				await axios.post(baseurl + "/news", {
                    headers: {
                        "X-CSRF-TOKEN": this.csrf
                    }
                })
                .then(response => {
                    this.titlePage = response.data;
                })
                .catch(function(error) {
                    swal('Info', 'Load data failed.', 'error')
                });
			}
		},
		metaInfo() {
            return {
                title: this.titlePage,
                htmlAttrs: {
                    lang: 'en'
                }
            }
        }
	}
</script>