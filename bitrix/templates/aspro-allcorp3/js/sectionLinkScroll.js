var options = 
{
    tabs_wrapper: ".line-block",
    tab_item: "> .line-block__item",
} 

InitLinkScroll = function () {
    $(".dropdown-select__list").scrollTab(options);
  };
  
  readyDOM(function () {
    InitLinkScroll();
  });
  
  BX.addCustomEvent("onScrollTabInit", function (eventdata) {
    const stOb = $(eventdata.tab).data("scrollTabOptions");
    stOb.activeTab = $(eventdata.tab).find(".head-block__item--active");
  
    const activeTabBounds = stOb.activeTab[0].getBoundingClientRect();
  
    const offset = stOb.arrows.arrow_width + 5; // offset from arrows
    if (activeTabBounds.right + offset > stOb.scrollBounds.right) {
      stOb.directScroll(stOb.scrollBounds.right - (activeTabBounds.right + offset), 0);
    }
  });
  