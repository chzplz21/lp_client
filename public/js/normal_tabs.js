

function get_normal_tabs() {

  return {
    Info: 'info',
    Lineitems: 'lineitems'
  }

}
    
    
Vue.component("info", {
    template: "<tab-info ref = 'tab_info'></tab-info>",
    mounted: function () {
        this.$refs.tab_info.get_doc_info();
        this.$refs.tab_info.get_customer_info();
            
    }

});

Vue.component("lineitems", {
    template: "<tab-lineitems ref = 'lineitems'></tab-lineitems>",
    mounted: function () {
    this.$refs.lineitems.get_lineitems();
    }
});

  



