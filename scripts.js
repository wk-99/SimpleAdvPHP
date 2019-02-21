(function(){

  //disable past dates from datepicker
  let today = new Date().toISOString().split('T')[0];
  let today_html = document.getElementsByName("date")[0];

  today_html ? today_html.setAttribute('min', today) : '';


  let end = new Date().toISOString().split('T')[0];
  let end_html = document.getElementsByName("date_end")[0];

  end_html ? end_html.setAttribute('min', end) : '';

})();

$(function(){
  //adding a class active to the menu
  var status = localStorage.getItem("status");
  var elHref = localStorage.getItem("elementsHref")

  $("a[href$='"+elHref+"']").addClass(status);

  $(document).ready(function($){
    $("a").bind('click', function () {
      localStorage.setItem("status", "active");
      localStorage.setItem("elementsHref", $(this).attr("href"))
      $("a").removeClass(localStorage.getItem("status"));
      $(this).addClass(localStorage.getItem("status"));
    });
  });

  //hiden allert
  setTimeout(() => {
    $('.alert').slideUp();
  }, 3000);
});







