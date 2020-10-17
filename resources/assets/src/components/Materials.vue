<template>
  <div id="post" class="documentation_info">
      <article class="documentation_body" id="documentation">
          <div class="shortcode_title">
              <h1>Учебные материалы</h1>
              <p>Для просмотра нажмите на кнопку «Просмотреть»</p>
          </div>
          <div class="row">
              <div class="community-posts-wrapper w-100">
                    <div v-for="material in materials" :key="'mat'+material.id"  class="community-post wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="post-content">
                            <div class="author-avatar">
                                <b-img :src="material.type.icon_url" rounded="circle" alt="Circle image"></b-img>
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

export default {
  name: 'materials',
  metaInfo: {
    title: 'Учебные материалы'
  },
  components: {
    
  },
  data() 
  { 
    return{
    materials:[]
    }
  },
  mounted()
  {
    axios.get('/materials')
    .then((response) => {
      this.materials = response.data;
    })
  }
}


</script>