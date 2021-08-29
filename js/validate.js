
function Validator (options){
    function Validate (inputElement, rule ){
      
        var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
        var errorMessage = rule.test(inputElement.value);
        if(errorMessage){
           errorElement.innerText =errorMessage;
           inputElement.classList.add('is-invalid');
        }
        else{
            errorElement.innerText = '';
            inputElement.classList.remove('is-invalid');
        }
    }
    var formElement = document.querySelector(options.form);

    if(formElement){
        // formElement.onsubmit = function (e){
        //     options.rules.forEach(function (rule){
        //         var inputElement = formElement.querySelector(rule.selector);
        //         Validate(inputElement, rule);
                
        //     });
        // }
        options.rules.forEach(function (rule){
            var inputElement = formElement.querySelector(rule.selector);
            var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
            if(inputElement){
                inputElement.onblur = function(){
                    Validate(inputElement, rule);
                }
                inputElement.oninput = function(){
                    var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
                    errorElement.innerText = '';
                    inputElement.classList.remove('is-invalid');
                }

            }
            
        });
    }

}
Validator.isRequired = function(selector){
    return {
        selector: selector,
        test: function(value){
            return value ? undefined : 'Vui lòng nhập trường này';
        }
    };
}