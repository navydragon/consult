<template>
  <div id="post" class="documentation_info">
      <article class="documentation_body" id="documentation">
          <div class="shortcode_title">
              <h1>Учебные материалы</h1>
              <p>Всего материалов в базе знаний: <strong>{{materials.length}}</strong></p>
              <div class="alert media message_alert alert-info fade show" role="alert">
                  <i class="icon_info_alt"></i>
                  <div class="media-body">
                      <h5>Информация</h5>
                      <p>Для просмотра учебного материала нажмите на кнопку «Просмотреть». Вы также можете воспользоваться фильтром по типу материала</p>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="icon_close"></i>
                      </button>
                  </div>
              </div>
              <p></p>
                <b-form-group
                  id="fieldset-1"
                  label="Фильтр по типу материала"
                >
                <v-select v-model="selected" :options="material_types" :reduce="mt => mt.id" label="name"></v-select>
             </b-form-group>
            
          </div>
          <div>
            
          </div>
          <div class="row">
              <div class="community-posts-wrapper w-100">
                    <div v-for="material in filtered_materials" :key="'mat'+material.id"  class="community-post wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="post-content">
                            <div class="author-avatar">
                                <b-img :src="material.type.icon_url" alt="Circle image"></b-img>
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title" @click.prevent="$router.push({ path: 'materials/'+material.id })">{{material.name}}</h3>
                                <p>{{material.type.name}}</p>
                            </div>
                        </div>
                        <div class="post-meta-wrapper">
                         <a target="_blank" :href="encodeURI(material.url)" class="doc_border_btn btn_small_two ml-2" >Просмотреть</a>
                        </div>
                    </div>
                    <!-- /.community-post -->


                </div>
          </div>
          <div class="border_bottom"></div>
      </article>
      <div class="border_bottom"></div>
      
  </div>
</template>


<script>
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
export default {
  name: 'materials',
  metaInfo: {
    title: 'Учебные материалы'
  },
  components: {
    vSelect
  },
  data() 
  { 
    return{
    materials:[],
    selected: 0,
    material_types: [],
    }
  },
  computed:
  {
    filtered_materials()
    {
      if (this.selected == '')
      {
        return this.materials
      }else{
        return this.materials.filter(el => el.type_id == this.selected)
      }
    }
  },
  mounted()
  {
    axios.get('/materials')
    .then((response) => {
      this.materials = response.data;
    })

     axios.get('/material_types')
    .then((response) => {
      this.material_types = response.data;
      this.material_types.unshift({
        'id': 0,
        'name' : 'Все'
      })
    })
  
  }
}


</script>