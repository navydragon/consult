<template>
  <div id="post" class="documentation_info">
      <article class="documentation_body" id="documentation">
          <div class="shortcode_title">
              <h2>{{npa.name}}</h2>
              <hr>
              <h4>Актуальная версия документа</h4>
              <a :href="npa.url" target="_blank" class="doc_border_btn btn_small_two arrow_btn_medium">Посмотреть<i class="arrow_right"></i></a>
              <hr>
              <h4>Описание</h4>
              <p>{{npa.description}}</p>
              <hr>
              <h4>Материалы</h4>
              <p v-if="npa.materials.length==0"><em>Пока не добавлено материалов, относящихся к данному нормативно-правовому акту.</em></p>
               <div v-for="material in npa.materials" :key="'mat'+material.id"  class="community-post wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                  <div class="post-content">
                      <div class="author-avatar">
                          <b-img :src="material.type.icon_url" alt="Circle image"></b-img>
                      </div>
                      <div class="entry-content">
                          <h3 class="post-title" >{{material.name}}</h3>
                          <p>{{material.type.name}}</p>
                      </div>
                  </div>
                  <div class="post-meta-wrapper">
                    <a target="_blank" :href="encodeURI(material.url)" class="doc_border_btn btn_small_two ml-2" >Просмотреть</a>
                  </div>
              </div>
          </div>
          <div class="row">
             
          </div>
          <div class="border_bottom"></div>
      </article>
      
      <div class="border_bottom"></div>
      
  </div>
</template>


<script>
export default {
  name: 'npa',
  metaInfo: {
    title: 'Нормативно правовые акты'
  },
  data() 
  { 
    return{
    npa:{
      materials:[]
    }
    }
  },
  mounted()
  {
    axios.get('/npas/'+this.$route.params.npa)
    .then((response) => {
      this.npa = response.data;
    })
  }
}


</script>