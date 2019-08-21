$(function() {
    $('.lazy').lazy({
      afterLoad: (e) => {
        e[0].classList.add('fade')
      },
      onFinishAll: () => {
        this.destory();
      }
    });
});