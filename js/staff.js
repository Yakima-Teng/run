let staff_groups = [];
let staff_types={};
let searchValue;

$(document).ready(function(){
    //get staff type data
})

function fetchStaffInfo(){
    //get staff type & staff group
    $.post("php/functions/get_staff_info.php",
    {'action':1},
    function(result){
        let jsonResult = JSON.parse(result);

    
        /**
         * result looks like {
         *  staff_type:{
         *      id=>name
         *  },
         *  staff_group:
         *      id=>[name,type]
         * }
         * */
        staff_groups = 
    }
)
}