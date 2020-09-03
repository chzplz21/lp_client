
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#createModal">Create Customer</button>


<div id = "all_table">
  <all_table 
            v-bind:table_headers="table_headers"
            v-bind:big_array="big_array"
            v-bind:ready="ready"
            v-if="ready"
    >
    </all_table>
</div>

<div id = "create_customer_form">
  <create_customer> 
  </create_customer>
</div>



<script>

  const all_table = new Vue({
      el: '#all_table',
      data: {
          table_headers: ['#', "Name", "Phone Number", "Email"],
          big_array: null,
          ready: false
        },
      
       mounted() {
        axios.get('all_customers')
        .then((response) => {
          this.big_array = response.data;
          this.ready = true;
         // everthingIsReady = true;
          
        })

      }
  });
  
  
  const create_modal = new Vue({
      el: '#createModal',
      data: {
          modal_header: "Create Customer",
      },
      
  });



  const create_customer = new Vue({
      el: '#create_customer_form',
  });



  

</script>