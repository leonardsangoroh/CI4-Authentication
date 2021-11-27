$(function(){
    var $registrationForm = $("#registration");

    if ($registrationForm.length) {
        $registrationForm.validate({
            rules:{
                name: {
                    required: true
                },

                email: {
                    required: true,
                    equalTo: '#password'
                },
                
                password: {
                    required: true
                },

                cpassword: {
                    required: true
                }
            },
            messages: {
                name:{
                    required: 'name is required'
                },

                
                email: {
                    required: 'email is required'
                },
                
                password: {
                    required: 'password is required'
                },

                cpassword: {
                    required: 'password confirmation is required',
                    equalTo: 'Kindly key in the same password'
                }
            },

            //A method to cater for error message indentation for radio and checkbox selections
            errorPlacement: function(error, element){
                if(element.is(":radio")) {
                    error.appendTo(element.parents(".gender"));

                }
                else if (element.is(":checkbox")) {
                    error.appendTo(element.parents(".hobbies"));
                }
                else {
                    error.insertAfter(element);
                }
            }
        })
    }
})