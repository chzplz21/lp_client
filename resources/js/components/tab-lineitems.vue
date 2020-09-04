<template>
   <div>
    <all_table 
            v-bind:table_headers="table_headers"
            v-bind:big_array="big_array"
            v-bind:ready="ready"
            v-if="ready"
    >
    </all_table>
  </div>      
</template>


<script>
    
    export default {
      props: ['table_headers'], 
      data: function () {
        return {         
          big_array: null,
          ready: false
        }
      },

       methods: {

         get_lineitems: function() {
           axios.get('1/get_lineitems')
            .then((response) => {
              this.big_array = response.data;
              this.ready = true; 
            })

         }
         

      }

   

    }

  

</script>