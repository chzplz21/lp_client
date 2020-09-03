<template>
    <div>
        <button
        v-for="(value, name) in tabs"
        v-bind:key="name"
        v-bind:class="['tab-button', { active: child_currentTab === name }]"
        v-on:click="child_currentTab = name; child_activatedComponent = value"
          
        >
            {{ name }}
        </button>

        <component v-bind:is="currentTabComponent" class="tab"></component>
    </div>


</template>

<script>

export default {
        props: ['tabs', 'currentTab', 'activatedComponent'], 
        data: function () {
            return {
                child_currentTab: this.currentTab,
                child_activatedComponent: this.activatedComponent 
            }
  	    },
         
        computed: {
            currentTabComponent: function() {
               // console.log(this.child_activatedComponent)
                return this.child_activatedComponent;
            }


        },
    
        
    }

</script>

<style>
	.tab-button {
	  padding: 6px 10px;
	  border-top-left-radius: 3px;
	  border-top-right-radius: 3px;
	  border: 1px solid #ccc;
	  cursor: pointer;
	  background: #f0f0f0;
	  margin-bottom: -1px;
	  margin-right: -1px;
	}
	.tab-button:hover {
	  background: #e0e0e0;
	}
	.tab-button.active {
	  background: #e0e0e0;
	}
	.tab {
	  border: 1px solid #ccc;
	  padding: 10px;
	}
  </style>