<template>
  <aside class="doc_left_sidebarlist">
      <div class="open_icon" id="left">
          <i class="arrow_carrot-right"></i>
          <i class="arrow_carrot-left"></i>
      </div>
      <div class="scroll">
          <ul class="list-unstyled nav-sidebar">
              <li class="nav-item">
                  <router-link to="/" class="nav-link"><img src="img/side-nav/home.png" alt="">Описание</router-link>
              </li>
              <li class="nav-item">
                  <router-link to="/materials" class="nav-link"><img src="img/side-nav/book.png" alt="">Материалы базы знаний</router-link>
              </li>
              <li class="nav-item">
                  <router-link to="/categories" class="nav-link"><img src="img/side-nav/document.png" alt="briefcase">Виды деятельности</router-link>
              </li>
              <li class="nav-item">
                  <router-link to="/npas" class="nav-link"><img src="img/side-nav/document2.png" alt="">Нормативно-правовые акты</router-link>
              </li>
              <li class="nav-item">
                   <router-link to="/new_question" class="nav-link"><img src="img/home_one/chat_mini.png" alt="">Задать вопрос</router-link>
              </li>
              <!--
              <li class="nav-item">
                  <a href="#" class="nav-link"><img src="img/side-nav/account.png" alt="">Эксперты</a>
              </li>
              -->
              <li class="nav-item">
                   <router-link to="/sign_didgest" class="nav-link"><img src="img/side-nav/smiles.png" alt="">Подписаться на обновления</router-link>
              </li>
          </ul>
      </div>
  </aside>
</template>

<script>
import { Sidenav, SidenavLink, SidenavRouterLink, SidenavMenu, SidenavHeader, SidenavBlock, SidenavDivider } from '@/vendor/libs/sidenav'

export default {
  name: 'app-layout-sidenav',
  components: {
    Sidenav,
    SidenavLink,
    SidenavRouterLink,
    SidenavMenu,
    SidenavHeader,
    SidenavBlock,
    SidenavDivider
  },

  props: {
    orientation: {
      type: String,
      default: 'vertical'
    }
  },

  computed: {
    curClasses () {
      let bg = this.layoutSidenavBg

      if (this.orientation === 'horizontal' && (bg.indexOf(' sidenav-dark') !== -1 || bg.indexOf(' sidenav-light') !== -1)) {
        bg = bg
          .replace(' sidenav-dark', '')
          .replace(' sidenav-light', '')
          .replace('-darker', '')
          .replace('-dark', '')
      }

      return `bg-${bg} ` + (
        this.orientation !== 'horizontal'
          ? 'layout-sidenav'
          : 'layout-sidenav-horizontal container-p-x flex-grow-0'
      )
    }
  },
  data: function () {
  return {
  }
  },
  methods: {
    isMenuActive (url) {
      return this.$route.path.indexOf(url) === 0
    },

    isMenuOpen (url) {
      return this.$route.path.indexOf(url) === 0 && this.orientation !== 'horizontal'
    },

    toggleSidenav () {
      this.layoutHelpers.toggleCollapsed()
    }
  },
}
</script>
