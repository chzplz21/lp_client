
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#createModal">Create User</button>


<div id = "all_table">
  <all_table 
            v-bind:table_headers="table_headers"
            v-bind:big_array="big_array"
            v-bind:red="red"
            v-if="red"
    >
    </all_table>
</div>


<div id = "create_user_form">
  <create_user> 
  </create_user>
</div>

<script>

  const all_table = new Vue({
      el: '#all_table',
      data: {
          table_headers: ['#', "Name", "Phone Number", "Email"],
          big_array: null,
          red: false
        },
      
       mounted() {
        axios.get('all_users')
        .then((response) => {
          this.big_array = response.data;
          this.red = true;
         // everthingIsReady = true;
          
        })

      }
  });
  
  
  const create_modal = new Vue({
      el: '#createModal',
      data: {
          modal_header: "Create User",
      },
      
  });



  const create_user = new Vue({
      el: '#create_user_form',
  });



  

</script>