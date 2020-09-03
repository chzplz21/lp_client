<template>
    <div>
     <create-modal>
        <h2 slot="form_title">Create User</h2>
        <form slot = "form" action="/users/create" method = "post">
            <div class = "row">
                <div class="col-md-6">
                    <label>Name</label>
                     <input id="name" type="text" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="text" name = "address" class="form-control">
                </div>
            </div>
            <div class = "row">
                <div class="col-md-6">
                    <label>Password</label>
                    <input type="text" name = "phone_number" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="text" name = "email" class="form-control">
                </div>
            </div>
            <div class = "row">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
     </create-modal>
    </div>
</template>

<script>
    import create_modal from './create_modal.vue';

    export default {
        props: ['dog_name'],  
        data: function () {
          return {
            modal_header: "Create User",
          }
        },
        components: {
           'create-modal': create_modal
        },
        
        
    }


</script>