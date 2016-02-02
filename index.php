<link rel="import" href="../core-scaffold/core-scaffold.html">
<link rel="import" href="../core-header-panel/core-header-panel.html">
<link rel="import" href="../core-menu/core-menu.html">
<link rel="import" href="../core-item/core-item.html">
<link rel="import" href="../core-icon-button/core-icon-button.html">
<link rel="import" href="../core-toolbar/core-toolbar.html">
<link rel="import" href="../core-menu/core-submenu.html">

<polymer-element name="my-element">

  <template>
    <style>    
      :host {
        position: absolute;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
      }
      #core_scaffold {
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
      }
      #core_header_panel {
        background-color: rgb(255, 255, 255);
      }
      #core_toolbar {
        color: rgb(255, 255, 255);
        background-color: rgb(79, 125, 201);
      }
      #core_menu {
        font-size: 16px;
      }
      #core_card {
        position: absolute;
        width: 400px;
        height: 600px;
        border-radius: 2px;
        box-shadow: rgba(0, 0, 0, 0.0980392) 0px 2px 4px, rgba(0, 0, 0, 0.0980392) 0px 0px 3px;
        left: 0px;
        top: 0px;
        display: none;
        background-color: rgb(255, 255, 255);
      }
    </style>
    <core-scaffold responsivewidth="1000px" id="core_scaffold">
      <core-header-panel mode="seamed" id="core_header_panel" navigation flex>
        <core-toolbar id="core_toolbar"></core-toolbar>
        <core-menu selected="Item1" valueattr="label" selectedindex="0" id="core_menu" theme="core-light-theme">
          <core-item id="core_item" on-tap="{{ openCard }}" icon="settings" label="Item1" horizontal center layout active></core-item>
          <core-item id="core_item1" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item2" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item3" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item4" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item5" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item6" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item7" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item8" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item9" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item10" icon="settings" label="Item2" horizontal center layout></core-item>
          <core-item id="core_item11" icon="settings" label="Item2" horizontal center layout></core-item>
        </core-menu>
      </core-header-panel>
      <div id="div1" tool>Title</div>
      <core-card id="core_card" layout vertical></core-card>
    </core-scaffold>
  </template>

  <script>

    Polymer({
      openCard: function () { this.$.core_card.style.display = "block"; }
    });

  </script>

</polymer-element>
