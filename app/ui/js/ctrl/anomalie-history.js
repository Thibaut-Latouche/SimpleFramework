$(document).ready(function(){
    var anomalieHistory = new CtrlAnomalieHistory();
    anomalieHistory.init(anomalieHistory);
});


var CtrlAnomalieHistory = function(){
    this.init = function(obj){
        $(".navbar form").on("submit",function(e){
            obj.stopEvent(e);
            obj.launchSearch(obj);
        });
        
        $(".btn.btn-valid-search").click(function(e){
           obj.stopEvent(e);
           obj.launchSearch(obj);
        });
    },
    this.stopEvent = function(e){
        e.preventDefault();
        e.stopPropagation();
    },
    this.launchSearch = function(obj){
            $("div.container-list-anomalies").hide();            
            $("div.spinner").show();            
            $.post("index.php?a=search-history", {search: $(".inp-search-field").val()}, function (json) {                       
                if (json.isSuccess) {
                    $("div.container-list-anomalies").html(json.data);
                }                
                setTimeout(function(){                    
                    $("div.spinner").hide();
                    $("div.container-list-anomalies").fadeIn("slow")
                },800);
            }, "json");           
    }
    
}