function init(){
  getAllOspiti();
  $("#target").on("click", ".delete", deletePagante);
}
$(document).ready(init);

function getAllOspiti(){

  $.ajax({

    url : "getAllOspiti.php",
    method : "GET",
    success : function(data){

      console.log(data);

      for (var i = 0; i < data.length; i++) {
        var paganti = data[i];
        $("#target").append('<li data-id=' + paganti.id +'>' + " " + paganti.name + " " + paganti.lastname + " " + paganti.address + "<span class='delete'>X</span>" + '</li>');
      }


    },
    error : function(err) {

      console.error(err);
    }
  })
}


function deletePagante(){
  var meStesso = $(this);
  var id_meStesso = meStesso.parent().data("id"); 
  console.log(id_meStesso);
  $.ajax({

    url: "delete.php",
    method: "POST",
    data: {
      id: id_meStesso,
    },
    success: function(data){
      meStesso.parent().remove();
    }

  });

}
