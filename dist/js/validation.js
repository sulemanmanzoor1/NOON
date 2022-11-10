$(document).ready(function(){
  $('#frm').validate({
    rules:{
     
      
      date:{
        required: true,
      },
      name:{
        required: true,
        lettersonly:true
      },
      purpose:{
        required: true,
        lettersonly:true
      },
      fabric:{
        required: true,
        Numbersonly:true,
      },
      cut_fab:{
        required: true,
      },
      sti_fab:{
        required: true,
      },

      lat:{
        required: true,
        Numbers: true
        
      },
      lon:{
        required: true,
        Numbers: true
        
      },
      country_id:{
        forselect:true
      },
      customer_name:{
        required:true,
        lettersonly:true,
        alphanumeric:true
      },
      city_id:{
       forselect:true
      },
      customer_address:{
        required:true,
       
      },
      next_call_date:{
        required:true,
      },
      first_name:{
        required:true,
        lettersonly:true
      },
      last_name:{
        required:true,
        lettersonly:true
      },
      employee_id:{
        forselect:true
      },
      customer_id:{
        forselect:true
      },
      start_time:{
        dateFA:true
      },
      call_outcome_id:{
        forselect:true
      },

      outcome_text:{
        required:true,
        lettersonly:true
      }


    },
    messages:{
      
      country_name:{
        forselect:"Select Country Name",
      },
      country_name_eng:{
        forselect:"Select Country Name in Eng",
      },
      country_code:{
        forselect:"Select Country Code",
      },
      city_name:{
        required :"please Enter city name",

      },
      country_id:{
        forselect:"Please Select Country"
      },
      city_id:{
        forselect:"Please Select City"
       },
       employee_id:{
        forselect:"Please Select Employee"
      },
      customer_id:{
        forselect:"Please Select Customer"
      },
      call_outcome_id:{
        forselect:"Please Select Call_outcome"
      },
    }
  });
});

