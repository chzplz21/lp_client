<!-- Modal -->
<template> 
    <div id="createEditModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <slot name = "form_title"></slot>
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>
                <div class="modal-body">
                    <slot name = "form"></slot>
                </div>
            </div>
        </div>
    </div>
</template>



<script>

    //import CreateCustomer from './create_customer.vue';
     export default {  
         name: "create_edit_modal",
    
    }
    
</script>