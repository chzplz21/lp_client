<template>
   <div class= "col-md-5">
    <all_table 
            v-bind:table_headers="table_headers"
            v-bind:big_array="big_array"
            v-bind:ready="ready"
            v-if="ready"
    >
    </all_table>
    <button type="button" v-on:click="empty_form()"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#createEditModal">Create Appointment</button>


    <appointment-modal 
        v-bind:doc_type="doc_type"
        v-bind:doc_id="doc_id"
        v-bind:form_fields="form_fields"       
    > 
    </appointment-modal>
  </div>      
</template>



<script>
    
    export default {
      props: ['doc_type', 'doc_id'],  
      data: function () {
        return {
          table_headers: ['start', "end"],
          big_array: null,
          ready: false,
          form_fields: {start_hour: "", end_hour: "", start_date: "", end_date: ""}
                          
        }
      },

       methods: {

         get_appointments: function() {
           axios.get('1/get_appointments')
            .then((response) => {
              this.big_array = response.data;
              this.ready = true; 
            })

         },

         fill_in_form: function(id) {
            axios.get('/schedule/'+id)
            .then((response) => {
              var single_appointment = response.data;
              console.log(single_appointment)
              this.form_fields.start_hour = single_appointment.start_hour;
              /*
              this.end_hour = single_appointment.end_hour;
              this.start_date = single_appointment.start_date;
              this.end_date = single_appointment.end_date;
              */
            })
          },

          empty_form: function() {
            this.start_time = "";
            this.end_time = "";
          }


         

      }

   

    }

  

</script>