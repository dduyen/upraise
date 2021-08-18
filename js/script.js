//btnscroll
var btnScroll = document.getElementById('btnscroll');

btnscroll.addEventListener('click', function(){
    // window.scrollTo(0,0);
    window.scrollTo({
        top:50,
        left:0,
        behavior:"smooth",

    })
})
// yêu cầu người dùng nhập
function  Validator(options){
    function validate(inputElement, rule){
        var errorMessage = rule.test(inputElement.value);
        if(errorMessage){
            var errorElement = inputElement.parentElement.querySelector('.message');
            errorElement.innerText = errorMessage;
            inputElement.classList.add ('is-invalid');
        }
        else
        {
            var errorElement = inputElement.parentElement.querySelector('.message');
            errorElement.innerText = '';
            inputElement.classList.remove ('is-invalid');
        }
       
    }
    var formElement = document.querySelector(options.form);
    
    
    if(formElement){
        options.rules.forEach(rule=> {
            var inputElement = formElement.querySelector(rule.Selector);
           
            if(inputElement){
                //xử lý th blur ra ngoài
                inputElement.onblur = function(){
                    //value: inputElement.value
                    //test: fuction(test)
                  validate(inputElement, rule);
                }
                // xử lý th ngừoi dùng bất đầu nhập
                inputElement.oninput =  function(){
                    var errorElement = inputElement.parentElement.querySelector('.message');
                    errorElement.innerText = '';
                    inputElement.classList.remove ('is-invalid');
                }
            }
        });
    }

   
}
Validator.isRequied = function( Selector){
    return  {
        Selector: Selector,
        test: function(value) {
            return value ? undefined: 'Vui lòng nhập trường này'
        }
    };

}