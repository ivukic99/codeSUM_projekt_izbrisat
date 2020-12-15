<template>
  <v-container class="filter_search_box">
    <div class="filter-box">
      <v-form
        ref="form"
      >

        <v-select
          :items="items"
          label="Kategorija"
        ></v-select>

      </v-form>
    </div>
    <div class="search_box">
        <input class="search_input" type="text" style="color: white;">
        <a class="search_button" href="#">
            <i class="fas fa-search" style="color: white;"></i>
        </a>
    </div>
  </v-container>
</template>

<script>
export default {

  data(){
    return{
      items: [
        'Item 1',
        'Item 2',
        'Item 3',
        'Item 4',
      ],
    }
  }

}
</script>

<style>

.filter_search_box{
  position: relative;
  height: 120px;
}

.filter-box{
  height: 60px;
  position: absolute;
  top: 50%;
  left: 20%;
}

.search_box {
  position: absolute;
  top: 50%;
  left: 68%;
  background:#1B4188;
  height: 60px;
  border-radius: 40px;
  padding: 10px;
}
.search_box:hover > .search_input{
  width: 240px;
  padding: 0 6px;
  color: white;
  
}
.search_box:hover > .search_button{
  background:#1B4188;
  color: white;
  
}
.search_button {
  color: #e74c3c;
  float: right;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #1B4188;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.4s;
}

.search_input {
  border:none;
  background: none;
  outline: none;
  float: left;
  padding: 0;
  color: #1B4188;
  font-size: 16px;
  transition: 0.4s;
  line-height: 40px;
  width: 0px;
}

</style>