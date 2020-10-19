<template>
  <footer class="simple_footer">
            <img class="leaf_right" src="img/home_one/leaf_footter.png" alt="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <p>© {{year()}} Все права защищены <a href="https://rosdornii.ru">ФАУ «РОСДОРНИИ»</a></p>
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
