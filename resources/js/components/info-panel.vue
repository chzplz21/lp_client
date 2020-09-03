<template> 
    <div class="card col-md-5">
      <div class = "card-body">
        <template v-for="array in chunk_array">
                <div class = "row">
                    <template v-for="(value, name) in array">
                        <div class="col-md-6">
                            <label>
                             {{name}}
                            </label>
                            <br>
                            {{value}}
                        </div>
                    </template>
                </div>
        </template>   
      </div>
    </div>
</template>

<script>
  module.exports = {  
        props: ['panel_info'],

        data: function () {
          return {
            chunk_array: [],
          }
        },

        created: function() {

            var temp_object = new Object();
            var index = 1;

            for (property in this.panel_info) {
                temp_object[property] = this.panel_info[property];
                if (index % 2 == 0) {
                    this.chunk_array.push(temp_object);
                    var temp_object = new Object();
                } 
                
                index++;
            }

            //console.log(this.chunk_array)
        },

  }

</script>