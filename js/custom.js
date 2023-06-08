$('#upgovt').owlCarousel({
    loop: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 50,
    dots:false,
    responsive:{
        50:{
            items:1
        },
        50:{
            items:3
        },
        50:{
            items:6
        }
    }
})


		

$(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );




$(window).on("load resize",function() {

  var counters = $(".count");
  var countersQuantity = counters.length;
  var counter = [];

  for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
  }

  var count = function(start, value, id) {
    var localStart = start;
    setInterval(function() {
      if (localStart < value) {
        localStart++;
        counters[id].innerHTML = localStart;
      }
    }, 4);
  }

  for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});