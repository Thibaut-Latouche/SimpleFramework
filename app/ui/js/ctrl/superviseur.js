$(document).ready(function () {
    var superCtrl = new SuperviseurCtrl();
    superCtrl.init(superCtrl);        
});

var SuperviseurCtrl = function () {
    this.valueSearch      = $(".inp-search-field");
    this.btnValidForm     = $(".btn.btn-valid-search");
    this.urlSearch        = "index.php?a=launch-search";    
    this.tableResult      = $(".table.table-list-infos-counter tbody");
    this.urlLoadChartData = "index.php?a=data-for-chart";
    this.arrayRSSI        = new Array();
    this.arraySNR         = new Array();
    this.arrayBAT         = new Array();
    this.chartSeries      = new Array();
    this.init = function (obj) {
        $(obj.btnValidForm).click(function (e) {
            obj.stopEvent(e);
            obj.launchSearch(obj);  
        });
        $(".navbar form").on("submit",function(e){
            obj.stopEvent(e);
            obj.launchSearch(obj);  
        });        
        obj.launchGrowl(obj);
    },
    this.launchGrowl = function(obj){
      var cntDefaultCounter = $(".item-info-counter-default").length;
      if(cntDefaultCounter > 0){
             $.bootstrapGrowl("Des compteurs présentent des anomalies.", { type: 'danger',  offset: {from: 'top', amount: 70} });
      }
    },
    this.stopEvent = function(e){
      e.preventDefault();
      e.stopPropagation();
    },
    this.launchSearch = function(obj){            
            obj.tableResult.hide();
            $("div.spinner").show();            
            $.post(obj.urlSearch, {search: $(obj.valueSearch).val()}, function (json) {
                $("tr.item-info-counter").remove();
                if (json.isSuccess) {
                    obj.tableResult.append(json.data);
                }
                $("div.spinner").hide();
                obj.tableResult.fadeIn("slow");
            }, "json");           
    },
    this.makeDataForChart = function(obj){
        $.post(obj.urlLoadChartData,{id : 86},function(jsonData){           
            for(var i=0; i<jsonData.data.releves.length;i++){
                var elem = jsonData.data.releves[i];
                obj.arrayRSSI.push([elem.script_ts * 1000, elem.rssi]);
                obj.arraySNR.push([elem.script_ts * 1000, elem.srn]);
                obj.arrayBAT.push([elem.script_ts * 1000, elem.battery]);
            }            
            obj.chartSeries.push({
                name : "SNR",
                data : obj.arraySNR
            });
            obj.chartSeries.push({
                
            })
            obj.makeChart(obj);
        },"json");
    },
    this.makeChart = function (obj) {
                $('#chart-container').highcharts({
                    chart: {
                        type: 'spline'
                    },
                    title: {
                        text: 'Radio measures - RSSI & SNR'
                    },                    
                    xAxis: {
                        type: 'datetime',
                        title: {
                            text: 'Date'
                        }
                    },
                    yAxis: {
                        title: {
                            text: 'Snow depth (m)'
                        },
                        min: 0
                    },                    
                    plotOptions: {
                        spline: {
                            marker: {
                                enabled: true
                            }
                        }
                    },
                    series: obj.chartSeries
                });
            }
}