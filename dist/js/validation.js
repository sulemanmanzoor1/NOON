$(document).ready(function(){
  $('#frm').validate({
    rules:{

      date:{
        required: true
      },
      to_date:{
        required: true,
      },
      name:{
        required: true,
        minlength: 5
      },
      purpose:{
        required: true
      },
      fabric:{
        required: true
      },
      cut_fab:{
        required: true,
      },
      cate_fab:{
        required:true
      },
      sti_fab:{
        required: true,
      },

      // salary
      emp_name:{
        required:true,
        digits:false
      },
      emp_desig:{
        required:true
      },
      emp_pay:{
        required:true
      },
      // date:{
      //   required:true
      // },
      s_name:{
        required:true,
      },
      services:{
        required:true,
      },
      price:{
        required:true,
      },
      // salary

      //Factory Equipment 
      add_equipment:{
        required:true,
        lettersonly:true
      },
      quantity:{
        required:true,
        Numbersonly:true
      },
      purchase:{
        required:true,
        Numbersonly:true
      },
      add_status:{
        required:true,
      },
      //Factory 
      price:{
        required:true
      },
      // daily usage
      sale_name:{
        required:true
      },
      totalamount:{
        required:true,
      },
      receive:{
        required:true,
      },

    },
    messages:{

      name:{
        minlength: "Name at least 5 characters without digits"
      },

      emp_name:{
        required:" Only letters and white space.",
      },
      emp_desig:{
        required:" Only letters and white space.",
      },
      
    }
  });
});

