<template>
  <div id="post" class="documentation_info">
      <article class="documentation_body" id="documentation">
          <div class="shortcode_title">
              <h1>База знаний</h1>
              <p><span>Добро пожаловать в базу знаний !</span>Воспользуйтесь меню слева для доступа к следующим функциям:</p>
          </div>
          <div class="row">
              <div class="col-lg-6 col-sm-6">
                  <div class="media documentation_item">
                      <div class="icon">
                          <img src="img/main/3.png" alt="">
                      </div>
                      <div class="media-body">
                          <a href="#">
                              <h5>Виды деятельности</h5>
                          </a>
                          <p>Материалы по видам деятельности</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                  <div class="media documentation_item">
                      <div class="icon">
                          <img src="img/main/4.png" alt="">
                      </div>
                      <div class="media-body">
                          <a href="#">
                              <h5>Нормативно-правовые акты</h5>
                          </a>
                          <p>Актуальные нормативно-правовые акты по вопросам дорожной деятельности</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                  <div class="media documentation_item">
                      <div class="icon">
                          <img src="img/main/2.png" alt="">
                      </div>
                      <div class="media-body">
                          <a href="#">
                              <h5>Материалы</h5>
                          </a>
                          <p>Все материалы базы знаний</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                  <div class="media documentation_item">
                      <div class="icon">
                          <img src="img/main/5.png" alt="">
                      </div>
                      <div class="media-body">
                          <a href="#">
                              <h5>Задать вопрос</h5>
                          </a>
                          <p>Задайте вопрос эксперту дорожной отрасли!</p>
                      </div>
                  </div>
              </div>
              <!-- <div class="col-lg-6 col-sm-6">
                  <div class="media documentation_item">
                      <div class="icon">
                          <img src="img/home_one/icon/newspaper.png" alt="">
                      </div>
                      <div class="media-body">
                          <a href="#">
                              <h5>Эксперты</h5>
                          </a>
                          <p>Список экспертов</p>
                      </div>
                  </div>
              </div> -->
              <div class="col-lg-6 col-sm-6">
                  <div class="media documentation_item">
                      <div class="icon">
                          <img src="img/main/6.png" alt="">
                      </div>
                      <div class="media-body">
                          <a href="#">
                              <h5>Подписаться на обновления</h5>
                          </a>
                          <p>Подпишитесь на обновления базы знаний</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="border_bottom"></div>
      </article>
      
  </div>
</template>


<script>
export default {
  name: 'home',
  metaInfo: {
    title: 'Home'
  },
  data(){ return { 
    npas: []
  }},
}
</script>
