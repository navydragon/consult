<template>
  <div id="post" class="documentation_info">
      <article class="documentation_body" id="documentation">
          <div class="shortcode_title">
              <h1>Нормативно-правовые акты</h1>
              <p>Для просмотра материалов по конкретному НПА нажмите на кнопку «Подробнее»</p>
          </div>
          <div class="row">
              <div class="community-posts-wrapper">
                    <div v-for="npa in npas" :key="'npa'+npa.id"  class="community-post wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="post-content">
                            <div class="author-avatar">
                                <img src="img/law-book.png" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title" @click.prevent="$router.push({ path: 'npas/'+npa.id })">{{npa.name}}</h3>
                                <p>{{npa.type}}</p>
                            </div>
                        </div>
                        <div class="post-meta-wrapper">
                         <b-button @click.prevent="$router.push({ path: 'npas/'+npa.id })" class="doc_border_btn btn_small_two ml-2" >Подробнее</b-button>
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
  name: 'npas',
  metaInfo: {
    title: 'Нормативно правовые акты'
  },
  data() 
  { 
    return{
    npas:[]
    }
  },
  mounted()
  {
    axios.get('/npas')
    .then((response) => {
      this.npas = response.data;
    })
  }
}


</script>