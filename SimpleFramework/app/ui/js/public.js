/**
 * Controller Public
 * @author Thhibaut Latouche
 * Copyright Demand Side Instruments
 */
var PublicCtrl = function(){    
    //Elements
    this.validForm   = $(".btn-regie");
    this.errorPanel  = $(".error-login");
    this.inputPwd    = $("input[type=password]");
    this.formLogin   = $("#formlogin");
    //Others
    this.urlLogin    = "index.php?a=do-login"; 
    this.enterKey    = 13;
    this.init = function(obj){        
	obj.validForm.click(function(e){
            e.preventDefault();
            e.stopPropagation();
            obj.doLogin(obj);
        });
        
	obj.inputPwd.keypress(function(e){
        	if(e.which == obj.enterKey){
                    obj.doLogin(obj);
                }
        });               
    },    
    this.doLogin = function(obj){
          $.post(obj.urlLogin, obj.formLogin.serialize(), function(json) {
            if (json.isSuccess) {                            
		location.href = json.data;
            }
            else{
		obj.errorLogin(obj,json.errorMessage);
            }
        }, 'json');
    },
    this.errorLogin = function(obj,errorMessage){
	obj.errorPanel.hide();
	obj.errorPanel.html(errorMessage);
        obj.errorPanel.fadeIn("slow");    
   }
    
}    
    
