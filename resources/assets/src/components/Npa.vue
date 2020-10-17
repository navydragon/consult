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
              <p><em>Пока не добавлено материалов, относящихся к данному нормативно-правовому акту.</em></p>
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
    npa:{}
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