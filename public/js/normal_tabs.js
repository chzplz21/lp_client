

function get_normal_tabs() {

  return {
    Info: 'default-info',
    Lineitems: 'default-lineitems',
    Labor: 'workorder-labor'
    
  }

}
    
    
Vue.component("default-info", {
    template: "<tab-info ref = 'tab_info'></tab-info>",
    mounted: function () {
        this.$refs.tab_info.get_doc_info();
        this.$refs.tab_info.get_customer_info();
            
    }

});

Vue.component("default-lineitems", {
    template: "<tab-lineitems ref = 'lineitems' v-bind:table_headers='table_headers' ></tab-lineitems>",
    data: function () {
      return {
        table_headers: ['Name', "Cost", "Quantity"]
      }
    },
    mounted: function () {
      this.$refs.lineitems.get_lineitems();
    }
});

Vue.component("workorder-labor", {
  template: "<tab-labor ref = 'labor' v-bind:doc_type='doc_type' v-bind:doc_id='doc_id'></tab-labor>",
  data: function () {
    return {
      doc_type: 'workorder',
      doc_id: 1
    }
  },
  mounted: function () {
    this.$refs.labor.get_appointments();
  }
});


  



