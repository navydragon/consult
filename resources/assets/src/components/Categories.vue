<template>
  <div id="post" class="documentation_info">
      <article class="documentation_body" id="documentation">
          <div class="shortcode_title">
              <h1>Виды деятельности</h1>
              <p>Для просмотра материалов по конкретному виду деятельности нажмите на кнопку «Подробнее»</p>
          </div>
          <div class="row">
              <div class="community-posts-wrapper">
                    <div v-for="category in categories" :key="'cat'+category.id"  class="community-post wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="post-content">
                            <div class="author-avatar">
                                <img v-if="!category.icon_url" src="img/home_support/cp1.png" alt="community post">
                                <img v-if="category.icon_url" :src="category.icon_url" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title" @click.prevent="$router.push({ path: 'categories/'+category.id })">{{category.name}}</h3>
                                <small>Материалов: .. , последнее обновление:</small>
                            </div>
                        </div>
                        <div class="post-meta-wrapper">
                    
                         <b-button @click.prevent="$router.push({ path: 'categories/'+category.id })" class="doc_border_btn btn_small_two ml-2" >Подробнее</b-button>
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
  name: 'categories',
  metaInfo: {
    title: 'Виды деятельности'
  },
  data() 
  { 
    return{
    categories:[]
    }
  },
  mounted()
  {
    axios.get('/categories')
    .then((response) => {
      this.categories = response.data;
    })
  }
}


</script>