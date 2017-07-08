$(document).ready(function(){
    var superCounter = new SuperviseurCounter();
    superCounter.init(superCounter);
});

var SuperviseurCounter = function(){
    this.init = function(obj){
        $("a.btn-add-counter").click(function(e){
            obj.stopEvent(e);
            $.post("index.php?a=save-counter",$("#form-create-counter").serialize(),function(resp){                
                if(resp.isSuccess){
                    var elem = $(".table-counters-synch[attr-id='"+$("#inp-building").val()+"']");
                    elem.hide();
                    $(".item-synch",elem).remove();                  
                    setTimeout(function(){
                        $("tbody",elem).append(resp.data);
                        elem.fadeIn("slow");
                    },400);
                }
            },"json");
        });
    },
    this.stopEvent = function(event){
        event.preventDefault();
        event.stopPropagation();
    }
}