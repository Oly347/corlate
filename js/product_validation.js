$(document).ready(function(){

    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });


    $("#myInput1").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable1 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });


      $("#myInput2").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable2 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });


      $("#myInput3").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable3 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });



      $("#myInput4").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable4 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#myInput5").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable5 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#myInput6").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable6 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
  
  $(document).on("click","#cpuNext",function(){
  
  
  if(1){
    nextPrev(1);
  }
  
  
  });
  
  
  
  $(document).on("click","#cabNext",function(){
  
  var cab = document.getElementsByName('CAB');
  var genValue = false;
  
          for(var i=0; i<cab.length;i++){
              if(cab[i].checked == true){
                  genValue = true;    
              }
          }
          if(!genValue){
            sweetAlert("Oops...", "Please choose your option!", "error");
              return false;
          }else{
  
            nextPrev(1);
          }
  
  // if(1){
  //   nextPrev(1);
  // }
  
  
  });
  
  
  $(document).on("click","#smps",function(){
  
  var smps = document.getElementsByName('SMPS');
  var genValue = false;
  
          for(var i=0; i<smps.length;i++){
              if(smps[i].checked == true){
                  genValue = true;    
              }
          }
          if(!genValue){
            sweetAlert("Oops...", "Please choose your option!", "error");
              return false;
          }else{
  
            nextPrev(1);
          }
  
  // if(1){
  //   nextPrev(1);
  // }
  
  
  });
  $(document).on("click","#mbnext",function(){
  
  var smps = document.getElementsByName('MB');
  var genValue = false;
  
          for(var i=0; i<smps.length;i++){
              if(smps[i].checked == true){
                  genValue = true;    
              }
          }
          if(!genValue){
            sweetAlert("Oops...", "Please choose your option!", "error");
              return false;
          }else{
  
            nextPrev(1);
          }
  
  // if(1){
  //   nextPrev(1);
  // }
  
  
  });
  
  
  
  $(document).on("click","#hddnext",function(){
  
  var smps = document.getElementsByName('HDD');
  var genValue = false;
  
          for(var i=0; i<smps.length;i++){
              if(smps[i].checked == true){
                  genValue = true;    
              }
          }
          if(!genValue){
            sweetAlert("Oops...", "Please choose your option!", "error");
              return false;
          }else{
  
            nextPrev(1);
          }
  
  // if(1){
  //   nextPrev(1);
  // }
  
  
  });
  
  
  $(document).on("click","#ramnext",function(){
  
  var smps = document.getElementsByName('RAM');
  var genValue = false;
  
          for(var i=0; i<smps.length;i++){
              if(smps[i].checked == true){
                  genValue = true;    
              }
          }
          if(!genValue){
            sweetAlert("Oops...", "Please choose your option!", "error");
              return false;
          }else{
  
            nextPrev(1);
          }
  
  // if(1){
  //   nextPrev(1);
  // }
  
  
  });
  
  
  $(document).on("click","#gcardnext",function(){
  
  var smps = document.getElementsByName('GCARD');
  var genValue = false;
  
          for(var i=0; i<smps.length;i++){
              if(smps[i].checked == true){
                  genValue = true;    
              }
          }
          if(!genValue){
            sweetAlert("Oops...", "Please choose your option!", "error");
              return false;
          }else{
  
            nextPrev(1);
          }
  
  // if(1){
  //   nextPrev(1);
  // }
  
  
  });
  
  
  
  
  
  });