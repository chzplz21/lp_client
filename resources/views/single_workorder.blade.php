@extends('app')

@section('content')


<normal-tabs></normal-tabs>


<script type="application/javascript">

var NormalTabs = get_normal_tabs();

Vue.component("normal-tabs", {
    template: "<doc-tabs v-bind:tabs='tabs' v-bind:currentTab='currentTab' v-bind:activatedComponent='activatedComponent	'></doc-tabs>",
    data: function () {
        return {
        currentTab: 'Lineitems',
        activatedComponent: 'lineitems',
        tabs: NormalTabs

        }
    },


});


	
</script>



@endsection


