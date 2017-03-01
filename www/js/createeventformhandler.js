define(['jquery'], function($){

    function processForm(){
        this.serialize = function(obj){
            var o = obj.serializeArray();
            var out = {};
            for(var i = 0; i < o.length; i++){
               out[o[i].name] = o[i].value;
            }
            //console.log(out);
            return out;
        }
    }
    
    return processForm;

})