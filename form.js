
$(document).ready(()=>{

  var messageLog = (message)=>{
    swal({
      position: 'center',
      icon: 'error',
      title: `${message}` ,
      showConfirmButton: false,
      timer: 40000
    });
  }

  var messageWarning = (message)=>{
    swal({
      position: 'center',
      icon: 'warning',
      title: `${message}` ,
      showConfirmButton: false,
      timer: 40000
    });
  }

  $('#first').click(()=>{
    $('#first').removeClass('js-btn-next');
    if($('#accepted').is(":checked")==true){
       $('#first').addClass('js-btn-next');
    }
    else if(!$('#accepted').is(":checked")){
      swal({
        position: 'center',
        icon: 'error',
        title: 'please accept our term to continue',
        showConfirmButton: false,
        timer: 40000
      });
    }
  })

$('#second').click(()=>{
  $('#second').removeClass('js-btn-next');
  if(!$('#firstName').val() && !$('#lasttName').val() ){
     messageLog("first or last  name can't be empty")
  }else if(!$('#firstName').val() ){
  messageLog("first  name can't be empty")
  }else if(!$('#lastName').val() ){
   messageLog("last name can't be empty")
  }else if($('#firstName').val().length < 4){
  messageLog('first must be more than 3 characters')
  }else if($('#lastName').val().length < 4){
   messageLog('last must be more than 3 characters')
  }else{
    $('#second').addClass('js-btn-next');
  }
  })
  

$('#third').click(()=>{
  $('#third').removeClass('js-btn-next');
  if(!$('#address1').val() && !$('#address2').val() && !$('#city').val()){
     messageLog("Please fill up the form to continue")
  }else if(!$('#address').val() ){
  messageLog("Address can't be empty")
  }else if($('#address').val().length < 10 ){
    messageLog("Address must be at least 15 character")
    }else if(!$('#city').val()){
   messageLog("City can't be empty")
  }else if($('#city').val().length < 4){
  messageLog('city must be at least 4 character')
  }else if(!$('#zip').val()){
    messageLog('Please enter your zip code')
  }else if($('#zip').val().length < 4){
    messageLog('zip code must be at least 4 character')
  }else if($('#state').val() == 'default'){
    messageLog('Please select state to continue')
  }else{
        $('#third').addClass('js-btn-next')
  }

})

$('#fourth').click(()=>{
  $('#fourth').removeClass('js-btn-next')
   if(!$('#email').val()){
    messageLog('Please enter your email')
   }else if($('#email').val().length < 5){
     messageLog('Email is too short')
   }else if(!$('#email').val().match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
    messageLog(' Email is invalid')
  }else if($('#email').val().match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) && $('#email').val().length > 5){
    $('#fourth').addClass('js-btn-next')
   }
})
$('#fifth').click(()=>{
  $('#fifth').removeClass('js-btn-next')
  if(!$('#number').val()){
    messageLog('Please provide your phone number')
  }else if(!$('#number').val().match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)){
     messageLog('Invalid phone number entered')
  }else{
    $('#fifth').addClass('js-btn-next')
  }
})
$('#sixth').click(()=>{
  $('#sixth').removeClass('js-btn-next')
 if($('#home').val() == 'Single Family' && $('#floors').val() == 1  && $('#bedrooms').val() == 1){
  messageWarning(`You use default options for Home section, press 'prev' to change it`)
 }else{
  $('#sixth').addClass('js-btn-next')
 }
    
  
})
$('#seventh').click(()=>{
  $('#seventh').removeClass('js-btn-next')
  if($('#Sizes').val() == 'None'){
    messageLog('Please select  bed size')
  }else if($('#TV').val() == 'None'){
    messageLog('Please enter the number of TV')
  }else if($('#Dressers').val() == 'None'){
    messageLog('Please enter the number of Dressers')
  }else if(!$('#Boxes').val()){
    messageLog('Please specify the number of Boxes')
  }else{
    $('#seventh').addClass('js-btn-next')
  }
})



$('#eighth').click(()=>{
  $('#eighth').removeClass('js-btn-next')
  if($('#refrigerator').val() == 'None'){
    messageLog('Please enter the number of Refrigerator ')
  }else if($('#Stove').val() == 'None'){
     messageLog('Please enter the number of  Stove')
  }else if($('#Dishwasher').val() == 'None'){
    messageLog('Please enter the number of Dishwasher')
 }else if($('#Grill').val() == 'None'){
  messageLog('Please enter the number of Grill')
}else if($('#Washer').val() == 'None'){
  messageLog('Please enter the number of Washer')
}else if($('#Dryer').val() == 'None'){
  messageLog('Please enter the number of Dryer')
}else if($('#AirConditioner').val() == 'None'){
  messageLog('Please enter the number of Air Conditioner')
}else if($('#DeepFreezer').val() == 'None'){
  messageLog('Please enter the number of Deep Freezer')
}else if($('#Microwave').val() == 'None'){
  messageLog('Please enter the number of Microwave')
}else{
    $('#eighth').addClass('js-btn-next')
  }
})

$('#ninth').click(()=>{
  $('#ninth').removeClass('js-btn-next')
  if($('#Armoire').val() == 'None'){
    messageLog('Please enter the number of Armoire')
  }else if($('#Couch').val() == 'None'){
     messageLog('Please enter the number of Couch')
  }else if($('#Bookcases').val() == 'None'){
    messageLog('Please enter the number of Bookcases')
 }else if($('#Cabinets').val() == 'None'){
  messageLog('Please enter the number of Cabinets')
}else if($('#Desks').val() == 'None'){
  messageLog('Please enter the number of Desks')
}else if($('#Lamps').val() == 'None'){
  messageLog('Please enter the number of Lamps')
}else if($('#EndTables').val() == 'None'){
  messageLog('Please enter the number of End Tables')
}else if($('#DiningRoomset').val() == 'None'){
  messageLog('Please enter the number of Dining Room set')
}else if($('#KitchenTableandchairs').val() == 'None'){
  messageLog("number of Deep Kitchen Table and chairs can't be None")
}else if($('#ArmChair').val() == 'None'){
  messageLog('Please enter the number of Arm Chair')
}else if($('#Rugs').val() == 'None'){
  messageLog('Please enter the number of Rugs')
}else{
    $('#ninth').addClass('js-btn-next')
  }
})

$('#tenth').click(()=>{
  $('#tenth').removeClass('js-btn-next')
  if(!$('#Garageandorsheditems').val() || !$('#Misc').val() || !$('#fragile').val() ){
    messageLog('Please complete this form to continue')
  }else{
    $('#tenth').addClass('js-btn-next')
  }
})

  $("form").on("submit", (e)=>{
    e.preventDefault();
    if(!$('#Misc').val()){
      messageLog('Please enter all the requirement for this quote')
    }else if($('#Misc')){
      $.ajax({
        type: 'post',
        url: 'mail.php',
        data: $('form').serialize(),
        dataType:'JSON',
        success: function (data) {
          swal({
            position: 'center',
            icon: 'success',
            title: 'form submitted successfully ',
            showConfirmButton: false,
            timer: 40000
          });
          window.location.href = "index.php";
        },
        error:function(data){
          swal({
            position: 'center',
            icon: 'error',
            title: 'Form failed to send!, please try again',
            showConfirmButton: false,
            timer: 40000
          });

          console.log(data)

        }
       
      });
    }
    

         

        });



  })
