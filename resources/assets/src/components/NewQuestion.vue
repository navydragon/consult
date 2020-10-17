
<template>
  <div id="post" class="documentation_info">
      <article class="documentation_body" id="documentation">
      <div class="shortcode_title">
          <h1>Задать вопрос</h1> 
          <p>Задайте вопрос экспертам дорожного хозяйства. Все атрибуты формы обязательны к заполнению.</p>
      </div>
      <div>
          <b-form-group id = "fullname"
           description="Введите Ваше ФИО."
           label="ФИО">
            <b-form-input id="i_fullname" v-model="new_question.fullname" trim></b-form-input>
          </b-form-group>
          <b-form-group id = "email"
           description="Введите email."
           label="Email">
            <b-form-input id="i_email" type="email" v-model="new_question.email" trim></b-form-input>
          </b-form-group>
          <b-form-group id = "region"
           description="Введите субъект РФ."
           label="Субъект РФ">
            <b-form-input id="i_region" v-model="new_question.region" trim></b-form-input>
          </b-form-group>
          <b-form-group id = "company"
           description="Введите Вашу организацию."
           label="Организация">
            <b-form-input id="i_company"  v-model="new_question.company" trim></b-form-input>
          </b-form-group>
          <b-form-group id = "title"
           description="Введите заголовок вопроса."
           label="Заголовок вопроса">
            <b-form-input id="i_title"  v-model="new_question.title" trim></b-form-input>
          </b-form-group>
          <b-form-group id = "text"
           description="Введите Ваш вопрос."
           label="Суть вопроса">
            <wysiwyg v-model="new_question.text" />
          </b-form-group>
      </div>
     
      <div v-if="errors!=0" class="alert media message_alert alert-danger fade show" role="alert">
        <i class="icon_close_alt2"></i>
        <div class="media-body">
            <h5>Ошибка!</h5>
            <p>Не все поля формы заполнены корректно.</p>
        </div>
      </div>
     <div>
        <b-button @click="add_question()" block variant="primary">Задать вопрос</b-button>
      </div>
           
      <div class="border_bottom"></div>
      </article>
  </div>
</template>

<style>
legend {color: black;}
</style>

<script>

export default {
  name: 'new-question',
  metaInfo: {
    title: 'Задать вопрос'
  },
  data() 
  { 
    return{
    new_question:{
        fullname: '',
        email: '',
        region: '',
        company: '',
        title: '',
        text: ''
    },
    errors: 0
    }
  },
  methods:
  {
      add_question(){
        this.errors = 0;
        for (let elem in this.new_question)
        {
            if (this.new_question[elem] == '')
            {
                this.errors++;
            }
        }
        if (this.errors == 0)
        {
          axios.post('/questions/add_question',{
            question_data: this.new_question
          })
          .then((response) => {
            this.$swal({
                icon: 'success',
                title: 'Успех!',
                text: 'Вопрос задан! Мы оповестим Вас по e-mail, когда эксперты ответят на него',
            })
         })
            
        }
      }
  },
  mounted()
  {
    
  }
}


</script>