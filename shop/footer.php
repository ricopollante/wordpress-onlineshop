<?php wp_footer();?>


<script>
$(document).ready(function(){
 
  $.ajax({
    url: 'https://local.dev/wordpress/wp-json/wc/v3/products/categories?consumer_key=ck_0119fd05aadc65582ed1c02fa633ee82c1fe883c&consumer_secret=cs_d1f169cbc70508791ece8b66a26e1f3664f62d74',
    method: 'GET',
    crossDomain: true,
    success: function( data, txtStatus, xhr ) {
        //console.log( data ); //RESULTS
        childCategoryItems = [];
        parentCategoryItems = [];

for(i = 0;i<data.length;i++){
       // console.log( data[i].name );
  if(data[i].parent === 0){
    //console.log( data[i].name + " parent" );
    parentCategoryItems.push("<li class="+ data[i].name + ">" + data[i].name + "</li>");
  }
  else{
    //console.log( data[i].name + " child" );
    childCategoryItems.push("<li class="+ data[i].name + ">" + data[i].name + "</li>");
  }

}

$(".products-categories ul.parent").html(parentCategoryItems);// HTML DOM //save to parent category
        //console.log( xhr.status );
        

//Components
$(".products-categories ul.parent .Components").click(function(){
var childCat = $(".products-categories ul.child").css("display");

if (childCat === "flex"){
     $(".products-categories ul.child").css("display","none");
}
else{
    $(".products-categories ul.child").css("display","flex");
    $(".products-categories ul.child").css("flex-direction","column");
    $(".products-categories ul.child").html(childCategoryItems);// HTML DOM //save to child category
        //console.log( xhr.status );
}

});

                                                }
});

});

$("nav .hum").click(function(){


  var menuDisplay =  $("div.menu-header-container ul").css("display");
if (menuDisplay == "none"){
  $("div.menu-header-container ul").css("display","block");
  $("div.menu-header-container ul").css("text-align","left");

 
  }
else{
  $("div.menu-header-container ul").css("display","none");
}


});
</script>


<footer> </footer>
</body>
</html>