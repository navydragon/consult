<template>
  <footer class="simple_footer" style="background: linear-gradient(#000, #333333); ">
            <div class="container">
                <div class="footer__support">
                  <p style="color:white;">Техническая поддержка портала (Российский Университет Транспорта (МИИТ))</p>
                  <p style="color:white;"><i class="fa fa-phone mr-2" aria-hidden="true"></i>+7(495)374-75-27</p>
                  <p style="color:white;"><i class="fa fa-envelope  mr-2" aria-hidden="true"></i>admin@emiit.ru</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <p style="color:white;">© {{year()}} Все права защищены <a href="https://rosdornii.ru">ФАУ «РОСДОРНИИ»</a></p>
                    </div>
                    
                </div>
            </div>
  </footer>
</template>

<script>
export default {
  name: 'app-layout-footer',

  methods: {
    getLayoutFooterBg () {
      return `bg-${this.layoutFooterBg}`
    },
    year()
    {
      let  date = new  Date();
      return date.getFullYear();
    }
  },
  data ()
  {
    return {
    }
  },

}
</script>
