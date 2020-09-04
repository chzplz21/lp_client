<template>
    <div>
     <create-edit-modal>
        <h2 slot="form_title">Create Customer</h2>
        <form slot = "form" action="/schedule/store" method = "post">
            <div class = "row">
                <div class="col-md-6">
                    <label>Start Date</label>
                    <input v-model="form_fields.start_date" type="text" name = "start" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Start Time</label>
                    <input v-model="form_fields.start_hour" type="text" name = "end" class="form-control">
                </div>
            </div>

            <div class = "row">
                <div class="col-md-6">
                    <label>End Date</label>
                    <input v-model="form_fields.end_date" type="text" name = "start" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>End Time</label>
                    <input v-model="form_fields.end_hour" type="text" name = "end" class="form-control">
                </div>
            </div>
            
            <div class = "row">
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name = "doc_type" v-bind:value = "doc_type">
                <input type="hidden" name = "doc_id" v-bind:value = "doc_id">
            </div>
        </form>
     </create-edit-modal>
    </div>
</template>

<script>
    import create_edit_modal from './create-edit-modal.vue';

    export default {
        props: ['doc_type', 'doc_id', 'form_fields'],  
        data: function () {
          return {
            modal_header: "Create Customer",
            
          }
        },
        components: {
           'create-edit-modal': create_edit_modal
        },
        
        
    }


</script>