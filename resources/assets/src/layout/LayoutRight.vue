<template>
    <div>
        <div class="open_icon" id="right">
            <i class="arrow_carrot-left"></i>
            <i class="arrow_carrot-right"></i>
        </div>
        <div class="doc_rightsidebar scroll">
            <h6>Дополнительные возможности:</h6>
            <div id="font-switcher" class="d-flex justify-content-between align-items-center">
                <div id="rvfs-controllers" class="fontsize-controllers group"></div>
                <a href="javascript:window.print()" class="print"><i class="icon_printer"></i></a>
            </div>
            <div class="doc_switch">
                <label for="something" class="tab-btn tab-btns"><i class="icon_lightbulb_alt"></i></label>
                <input type="checkbox" name="something" id="something" class="tab_switcher">
                <label for="something" class="tab-btn"><i class="far fa-moon"></i></label>
            </div>
        </div>
    </div>

</template>

<script>
export default {
  name: 'app-layout-right',

  methods: {
    getLayoutFooterBg () {
      return `bg-${this.layoutFooterBg}`
    }
  },
   
}
</script>
