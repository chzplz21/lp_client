  <template>
      <div class = "row">   
          <info-panel  v-if="doc_ready" 
          v-bind:panel_info="doc_info">
          </info-panel>
          <div class = "col-md-2">
          </div>
          <info-panel  v-if="customer_ready" 
          v-bind:panel_info="customer_info">
          </info-panel>
          
      </div>
  </template>


<script>
    
    export default {
      data: function() {
        return {
          panel_info: null,
          customer_ready: false,
          doc_ready: false
        }
      },

      methods: {
        get_customer_info: function() {
          axios.get('1/customer_info')
          .then((response) => {
            this.customer_info = response.data;
            this.customer_ready = true;   
          })

        },

        get_doc_info: function() {
          axios.get('1/get_single_workorder')
          .then((response) => {
            this.doc_info = response.data;
            this.doc_ready = true;   
          })

        }

      }

    }

  

</script>