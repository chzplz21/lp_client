
<template> 
    <table class="table">
      <input type = "text" v-on:keyup="reverseMessage" v-model="search_value" placeholder = "">
      <thead class="thead-dark">
      <tr>
          <template v-for="table_header in table_headers">
            <th scope="col">{{table_header}}</th>
          </template>
            <th scope="col"></th>
      </tr>
      </thead>
      <tbody>
        <template v-for="entity in table_elements">
            <tr>
              <template v-for="(value, name) in entity">
                  <!-- Render everything except the db id of the index -->
                  <td v-if="name != 'id'">{{ value }}</td>    
              </template>
                  <td><button v-on:click="fill_in_form(entity.id)" type="button" class="btn btn-info btn-lg edit" data-toggle="modal" data-target="#createEditModal"><i class="fas fa-pencil" aria-hidden="true"></i></button></td> 
            </tr>
        </template>
      </tbody>
  </table>
      
</template>




<script>

    module.exports = {  
         props: ['table_headers', 'big_array'],

         data: function () {
          return {
            search_value: "",
            table_elements: [],
            new_array: [],
            
          }
        },

        created: function() {
          //use .slice because arrays are objects in js and passed by reference.
          //must instead make copy of array
          this.table_elements = this.big_array.slice();
          
          //purpose of function is to organize the big array properties to correlate with the table headers
          this.organize_big_array();
         

        },
         
        methods: {
          reverseMessage: function () {
            //use .slice because arrays are objects in js and passed by reference.
            this.table_elements = this.new_array.slice();
      
            //iterate backwards so splice method works
            //otherwise if it was a normal loop, the reindexing wouldn't work 
            for(var i = this.table_elements.length - 1; i >= 0; i--) {
              var keep_element = false;
              //current object in loop
              var object = this.table_elements[i];
              for(const property in object) {
                //makes sure it's a string so indexof works
                var property_value = object[property] + "";
                property_value = property_value.toLowerCase();
                if(property_value.indexOf(this.search_value) != -1) {
                  keep_element = true;
                }  
              }
            
              if(!keep_element) {
                this.table_elements.splice(i, 1);
              } 

                 
            }

              
          },

          //purpose of function is to organize the big array properties to correlate with the table headers
          organize_big_array: function() {
          
              for(var i = 0; i<this.table_elements.length; i++) {
                var temp_object = new Object();
                //goes through table header properties and picks out corresponding values from big array
                this.table_headers.forEach((element) => {
                  element = element.toLowerCase();
                  temp_object[element] = this.table_elements[i][element];
                  
                });
                //also push in id 
                temp_object.id = this.table_elements[i]['id'];
    
                this.new_array.push(temp_object);
              }
              //reassign this.table_elements to be the newly organized array
              this.table_elements = this.new_array.slice();

          },

          fill_in_form: function(id) {
            this.$parent.fill_in_form(id);
          }

      }

    }

</script>







